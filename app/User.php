<?php

namespace App;

use App\Models\ChatRoom;
use App\Models\Documents;
use App\Models\Orders;
use App\Models\Rekvizit;
use App\Models\UserSettings;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Twilio\Rest\Client;
use BWF\DocumentTemplates\TemplateDataSources\ModelProvidesTemplateData;
use BWF\DocumentTemplates\TemplateDataSources\TemplateDataSourceInterface;


class User extends \TCG\Voyager\Models\User implements MustVerifyEmail, TemplateDataSourceInterface
{
    use Notifiable,ModelProvidesTemplateData;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'phone',
        'address',
        'billing_address',
        'city',
        'inn',
        'name_organization',
        'is_active',
        'verified'
    ];

    /**
     *  Get columns for template
     * @return array|string[]
     */
    protected function getTemplateFields()
    {
        return $this->fillable;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
    ];

    public static function createFromPhoneNumber(array $data)
    {
        $user = User::create([
            'phone' => $data['phone'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
        return $user;
    }

    public static function createFromEmail(array $data)
    {
        $user = User::create([
            'email'=> $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
        return $user;
    }

    /**
     *  Redirected need verify type
     * @param null $phone
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Twilio\Exceptions\ConfigurationException
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function requestConfirmation($phone=null)
    {
        if ($this->email) {
            // Send email asking to confirm account
            $this->sendEmailVerificationNotification();
            return redirect()->route('verification.notice');
        } elseif ($this->phone) {
//            $phone = preg_replace('/^(\d+)$/',"+$1",$data['phone']);
            // Send SMS asking to confirm account
            $token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_sid = getenv("TWILIO_ACCOUNT_SID");
            $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
            $twilio = new Client($twilio_sid, $token);
            $twilio->verify->v2->services($twilio_verify_sid)
                ->verifications
                ->create('+'.$phone, "sms");

            return redirect()->route('verify')->with(['phone' => $phone]);
        }
    }
    // check verify or not for phone
    //1-type
    public function hasVerifiedPhone()
    {
        return $this->verified;
    }
    //2-type
//    public function hasVerifiedPhone()
//    {
//        return ! is_null($this->phone_verified_at);
//    }
    public function markPhoneAsVerified()
    {
        return $this->forceFill([
            'mobile_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

//    public function callToVerify()
//    {
//
//    }

    /********************************* Relations **********************************/

    public function chatRoom(){
        return $this->hasOne(ChatRoom::class, 'user_id', 'id');
    }
    public function getSetting(){
        return $this->hasOne(UserSettings::class, 'user_id', 'id');
    }
    public function getDocuments(){
        return $this->hasMany(Documents::class, 'user_id', 'id');
    }
    public function getRekvizits(){
        return $this->hasMany(Rekvizit::class, 'user_id', 'id');
    }
    public function getOrders(){
        return $this->hasMany(Orders::class, 'user_id', 'id');
    }
}
