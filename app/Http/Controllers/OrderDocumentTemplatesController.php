<?php

namespace App\Http\Controllers;

use App\DocumentTemplates\ApplicationTemplate;
use App\DocumentTemplates\CommercialProposalTemplate;
use App\DocumentTemplates\ShippingContractTemplate;
use App\Models\Orders;
use App\User;
use Illuminate\Http\Request;
use App\DocumentTemplates\InvoiceTemplate;
use BWF\DocumentTemplates\DocumentTemplates\DocumentTemplateFactory;
use BWF\DocumentTemplates\DocumentTemplates\DocumentTemplateModelInterface;
use BWF\DocumentTemplates\Http\Controllers\DocumentTemplatesController;
use BWF\DocumentTemplates\TemplateDataSources\TemplateDataSource;
use BWF\DocumentTemplates\TemplateDataSources\TemplateDataSourceFactory;
use Illuminate\Support\Facades\Auth;

class OrderDocumentTemplatesController extends DocumentTemplatesController
{
    protected $order=[
        [
            'id' => '1',
            'description' => 'Package Basic',
            'price' => 10
        ],
        [
            'id' => '2',
            'description' => 'Package Pro',
            'price' => 20
        ],
        [
            'id' => '3',
            'description' => 'Package Advanced',
            'price' => 30
        ],
    ];

    /**
     * @return TemplateDataSource[]
     */
    protected function getTestOrders()
    {
        $dataSources = [];

        foreach ($this->order as $item) {
            $dataSources[] = TemplateDataSourceFactory::build($item, 'order');
        }

        return collect($dataSources);
    }

    protected $documentClasses = [
        InvoiceTemplate::class,
    ];

    protected function getTemplateData()
    {
        return [
            'user' => Auth::user(),
            'orders' => $this->getTestOrders(),
        ];
    }

    public function show(DocumentTemplateModelInterface $documentTemplateModel)
    {

        $documentTemplate = DocumentTemplateFactory::build($documentTemplateModel);

        $templateData = $this->getTemplateData();

        foreach ($templateData as $name => $data) {
            $documentTemplate->addTemplateData($data, $name);
        }

        return $documentTemplate->render();

    }

    public function pdf(Request $request, DocumentTemplateModelInterface $documentTemplateModel)
    {

        $documentTemplate = DocumentTemplateFactory::build($documentTemplateModel);

        $templateData = $this->getTemplateData();

        foreach ($templateData as $name => $data) {
            $documentTemplate->addTemplateData($data, $name);
        }

        $pdf = $documentTemplate->renderPdf(storage_path( 'app/' . $documentTemplateModel->name . '.pdf'));
        return response()->file($pdf);

    }

    /**
     * @param PendingMail $mailer
     * @return PendingMail
     */
    private function setBcc(PendingMail $mailer){

        $bccAddress = config('mail.bcc_address');

        if(empty($bccAddress)){
            return $mailer;
        }

        $bccUser = new User();
        $bccUser->email = $bccAddress;

        $mailer->bcc($bccUser);

        return $mailer;
    }

    /**
     * @param Request $request
     * @param DocumentTemplateModelInterface $documentTemplateModel
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function email(Request $request, DocumentTemplateModelInterface $documentTemplateModel)
    {
        $user = Auth::user();

        $mailer = Mail::to($user);
        $mailer = $this->setBcc($mailer);
        $mailer->send(new TemplateMailable($documentTemplateModel, $this->getTemplateData()));

        return back()->with('status', sprintf('The email has been sent to %s!', $user->email));
    }
}
