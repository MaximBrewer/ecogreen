<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
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

        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
                0 => 
                array (
                    'id' => 4,
                    'key' => 'site.google_analytics_tracking_id',
                    'display_name' => 'Google Analytics Tracking ID',
                    'value' => NULL,
                    'details' => '',
                    'type' => 'text',
                    'order' => 13,
                    'group' => 'Site',
                ),
                1 => 
                array (
                    'id' => 5,
                    'key' => 'admin.bg_image',
                    'display_name' => 'Admin Background Image',
                    'value' => '',
                    'details' => '',
                    'type' => 'image',
                    'order' => 5,
                    'group' => 'Admin',
                ),
                2 => 
                array (
                    'id' => 6,
                    'key' => 'admin.title',
                    'display_name' => 'Admin Title',
                    'value' => 'EkoGreen',
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Admin',
                ),
                3 => 
                array (
                    'id' => 7,
                    'key' => 'admin.description',
                    'display_name' => 'Admin Description',
                    'value' => 'Welcome to Voyager. The Missing Admin for Laravel',
                    'details' => '',
                    'type' => 'text',
                    'order' => 2,
                    'group' => 'Admin',
                ),
                4 => 
                array (
                    'id' => 8,
                    'key' => 'admin.loader',
                    'display_name' => 'Admin Loader',
                    'value' => '',
                    'details' => '',
                    'type' => 'image',
                    'order' => 3,
                    'group' => 'Admin',
                ),
                5 => 
                array (
                    'id' => 9,
                    'key' => 'admin.icon_image',
                    'display_name' => 'Admin Icon Image',
                    'value' => '',
                    'details' => '',
                    'type' => 'image',
                    'order' => 4,
                    'group' => 'Admin',
                ),
                6 => 
                array (
                    'id' => 10,
                    'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                    'value' => NULL,
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Admin',
                ),
                7 => 
                array (
                    'id' => 12,
                    'key' => 'site.us_company',
                    'display_name' => 'О компании',
                    'value' => '<p style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Noto Sans TC\', sans-serif; vertical-align: baseline; color: #212529;">ООО &laquo;ЭкоГрин&raquo; &mdash; компания, обеспечивающая сельскохозяйственных производителей Краснодарского края, Северного Кавказа и других субъектов РФ средствами защиты растений с 1993 года.</p>
<hr style="box-sizing: content-box; height: 0px; overflow: visible; margin-top: 1rem; margin-bottom: 1rem; border-right: 0px; border-bottom: 0px; border-left: 0px; border-image: initial; border-top-style: solid; border-top-color: rgba(0, 0, 0, 0.1); color: #212529; font-family: \'Noto Sans TC\', sans-serif; font-size: 12px;" />
<p style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: \'Noto Sans TC\', sans-serif; vertical-align: baseline; color: #212529;">Понедельник - пятница&nbsp;<span class="main_green-text font-weight-bolder" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder !important; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #4a785a;">08:00-18:00</span><br style="box-sizing: border-box;" />Суббота&nbsp;<span class="main_green-text font-weight-bolder" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder !important; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #4a785a;">Выходной</span><br style="box-sizing: border-box;" />Воскресение&nbsp;<span class="main_green-text font-weight-bolder" style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bolder !important; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: #4a785a;">Выходной</span></p>',
                    'details' => NULL,
                    'type' => 'rich_text_box',
                    'order' => 6,
                    'group' => 'Site',
                ),
                8 => 
                array (
                    'id' => 14,
                    'key' => 'site.instagram',
                    'display_name' => 'Instagram',
                    'value' => NULL,
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 9,
                    'group' => 'Site',
                ),
                9 => 
                array (
                    'id' => 15,
                    'key' => 'site.facebook',
                    'display_name' => 'Facebook',
                    'value' => NULL,
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 11,
                    'group' => 'Site',
                ),
                10 => 
                array (
                    'id' => 16,
                    'key' => 'site.twitter',
                    'display_name' => 'Twitter',
                    'value' => NULL,
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 12,
                    'group' => 'Site',
                ),
                11 => 
                array (
                    'id' => 19,
                    'key' => 'site.email',
                    'display_name' => 'Адрес почты',
                    'value' => 'info@ecogreen.ru',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 14,
                    'group' => 'Site',
                ),
                12 => 
                array (
                    'id' => 20,
                    'key' => 'site.phone_office',
                    'display_name' => 'Телефон офиса',
                'value' => '(861) 224-75-37',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 16,
                    'group' => 'Site',
                ),
                13 => 
                array (
                    'id' => 21,
                    'key' => 'site.address_office',
                    'display_name' => 'Адрес офиса',
                    'value' => 'Город Краснодар, улица

Дальняя/Рашпилевская, дом 11/268',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 17,
                    'group' => 'Site',
                ),
                14 => 
                array (
                    'id' => 22,
                    'key' => 'site.fax_office',
                    'display_name' => 'Факс офиса',
                'value' => '(861) 224-75-59',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 18,
                    'group' => 'Site',
                ),
                15 => 
                array (
                    'id' => 23,
                    'key' => 'site.fax_warehouse',
                    'display_name' => 'Факс склада',
                'value' => '(861) 001-75-01',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 20,
                    'group' => 'Site',
                ),
                16 => 
                array (
                    'id' => 24,
                    'key' => 'site.phone_warehouse',
                    'display_name' => 'Телефон склада',
                'value' => '(861) 001-75-59',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 19,
                    'group' => 'Site',
                ),
                17 => 
                array (
                    'id' => 26,
                    'key' => 'site.address_warehouse',
                    'display_name' => 'Адрес склада',
                    'value' => 'край Краснодарский, город Краснодар, улица

Дальняя/Рашпилевская, дом 11/268',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 21,
                    'group' => 'Site',
                ),
                18 => 
                array (
                    'id' => 27,
                    'key' => 'site.email_warehouse',
                    'display_name' => 'Адрес почты склада',
                    'value' => 'info@ecogreen.ru',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 22,
                    'group' => 'Site',
                ),
                19 => 
                array (
                    'id' => 28,
                    'key' => 'site.map_office',
                    'display_name' => 'Карта офиса',
                    'value' => 'https://yandex.ru/map-widget/v1/?um=constructor%3Ade73dc722341eb284d66c49c2b29fae975cfe9b35d14ca54a529ccc9110642a5&amp;source=constructor',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 23,
                    'group' => 'Site',
                ),
                20 => 
                array (
                    'id' => 29,
                    'key' => 'site.map_warehouse',
                    'display_name' => 'Карта склада',
                    'value' => 'https://yandex.ru/map-widget/v1/?um=constructor%3Ade73dc722341eb284d66c49c2b29fae975cfe9b35d14ca54a529ccc9110642a5&amp;source=constructor',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 24,
                    'group' => 'Site',
                ),
                21 => 
                array (
                    'id' => 31,
                    'key' => 'site.title',
                    'display_name' => 'Заголовок',
                    'value' => '<h2 style="text-align: center;">Заголовок</h2>
<p>&nbsp;ООО &ldquo;ЭкоГрин&rdquo; является официальным дистрибьютором ведущих мировых производителей средств защиты растений</p>',
                    'details' => NULL,
                    'type' => 'rich_text_box',
                    'order' => 4,
                    'group' => 'Site',
                ),
                22 => 
                array (
                    'id' => 32,
                    'key' => 'site.logo',
                    'display_name' => 'Логотип',
                    'value' => 'settings/October2020/ktlP9M4M2jr59bM6vJdV.jpg',
                    'details' => NULL,
                    'type' => 'image',
                    'order' => 7,
                    'group' => 'Site',
                ),
                23 => 
                array (
                    'id' => 33,
                    'key' => 'site.title_image',
                    'display_name' => 'Заголовок изображения',
                    'value' => 'settings/October2020/8j0f1IwTh2wKeT1CxE0d.png',
                    'details' => NULL,
                    'type' => 'image',
                    'order' => 8,
                    'group' => 'Site',
                ),
                24 => 
                array (
                    'id' => 34,
                    'key' => 'site.payment_50',
                    'display_name' => 'Заголовок Оплата 50%',
                    'value' => 'Заголовок Оплата 50%
Заголовок Оплата 50%
Заголовок Оплата 50%',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 25,
                    'group' => 'Site',
                ),
                25 => 
                array (
                    'id' => 35,
                    'key' => 'site.payment_75',
                    'display_name' => 'Заголовок Оплата 75%',
                    'value' => 'Заголовок Оплата 75%
Заголовок Оплата 75%
Заголовок Оплата 75%',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 26,
                    'group' => 'Site',
                ),
                26 => 
                array (
                    'id' => 36,
                    'key' => 'site.payment_100',
                    'display_name' => 'Заголовок Оплата 100%',
                    'value' => 'Заголовок Оплата 100%
Заголовок Оплата 100%
Заголовок Оплата 100%',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 27,
                    'group' => 'Site',
                ),
                27 => 
                array (
                    'id' => 38,
                    'key' => 'site.choose_product',
                    'display_name' => 'Выбор товара',
                    'value' => 'Формирование потребности
Выбор товара',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 28,
                    'group' => 'Site',
                ),
                28 => 
                array (
                    'id' => 39,
                    'key' => 'site.add_product',
                    'display_name' => 'Добавление товара в корзину',
                    'value' => 'Добавление товара в корзину',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 29,
                    'group' => 'Site',
                ),
                29 => 
                array (
                    'id' => 40,
                    'key' => 'site.attach_preposition',
                    'display_name' => 'Прикрепить заявку',
                    'value' => 'Прикрепить заявку',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 30,
                    'group' => 'Site',
                ),
                30 => 
                array (
                    'id' => 42,
                    'key' => 'site.cabinet_add',
                    'display_name' => 'Формирование Личного кабинета',
                    'value' => 'Формирование
Личного кабинета',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 31,
                    'group' => 'Site',
                ),
                31 => 
                array (
                    'id' => 43,
                    'key' => 'site.add_contract',
                    'display_name' => 'Заключаем договор',
                    'value' => 'Заключаем договор',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 32,
                    'group' => 'Site',
                ),
                32 => 
                array (
                    'id' => 44,
                    'key' => 'site.make_decision',
                    'display_name' => 'Принимаем решение о покупке товара',
                    'value' => 'Принимаем решение о
покупке товара',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 33,
                    'group' => 'Site',
                ),
                33 => 
                array (
                    'id' => 45,
                    'key' => 'site.view_preposition',
                    'display_name' => 'Рассматриваем заявку',
                    'value' => 'Рассматриваем 
заявку',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 34,
                    'group' => 'Site',
                ),
                34 => 
                array (
                    'id' => 46,
                    'key' => 'site.receive_product',
                    'display_name' => 'Получаем товар',
                    'value' => 'Получаем товар',
                    'details' => NULL,
                    'type' => 'text_area',
                    'order' => 35,
                    'group' => 'Site',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
