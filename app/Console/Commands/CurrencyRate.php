<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use TCG\Voyager\Models\Setting;

class CurrencyRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:rate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $xml = simplexml_load_file("http://www.cbr.ru/scripts/XML_daily.asp?date_req=" . date("d/m/Y"));

        // var_dump($xml);
        // die;
        foreach($xml->Valute as $valute){
            if($valute['ID'] == "R01235"){
                $rate = (string)$valute->Value;
            }
        }
        if($rate){
            Setting::where('key', 'shop.dollar.rate')->first()->update(['value' => str_replace(",",".",$rate)]);
        }
        return 0;
    }
}
