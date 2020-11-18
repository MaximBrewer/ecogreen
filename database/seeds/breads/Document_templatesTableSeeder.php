<?php

use Illuminate\Database\Seeder;

class Document_templatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
     try {
        \DB::beginTransaction();

        \DB::table('document_templates')->delete();

        \DB::table('document_templates')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'Выставленный счет на оплата',
                    'subject' => NULL,
                    'document_class' => 'App\\DocumentTemplates\\InvoiceTemplate',
                    'layout' => 'InvoiceTemplate.html.twig',
                    'created_at' => '2020-11-01 22:55:38',
                    'updated_at' => '2020-11-01 22:55:38',
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'Договор доставки',
                    'subject' => NULL,
                    'document_class' => 'App\\DocumentTemplates\\InvoiceTemplate',
                    'layout' => 'InvoiceTemplate.html.twig',
                    'created_at' => '2020-11-01 23:29:44',
                    'updated_at' => '2020-11-01 23:29:44',
                ),
                2 => 
                array (
                    'id' => 3,
                    'name' => 'Приложение',
                    'subject' => NULL,
                    'document_class' => 'App\\DocumentTemplates\\InvoiceTemplate',
                    'layout' => 'InvoiceTemplate.html.twig',
                    'created_at' => '2020-11-01 23:35:24',
                    'updated_at' => '2020-11-02 02:27:08',
                ),
                3 => 
                array (
                    'id' => 5,
                    'name' => 'Коммерческое предложение',
                    'subject' => NULL,
                    'document_class' => 'App\\DocumentTemplates\\InvoiceTemplate',
                    'layout' => 'InvoiceTemplate.html.twig',
                    'created_at' => '2020-11-01 23:38:27',
                    'updated_at' => '2020-11-01 22:19:18',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
