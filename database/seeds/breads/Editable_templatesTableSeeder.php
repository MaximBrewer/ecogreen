<?php

use Illuminate\Database\Seeder;

class Editable_templatesTableSeeder extends Seeder
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

        \DB::table('editable_templates')->delete();

        \DB::table('editable_templates')->insert(array (
                0 => 
                array (
                    'id' => 2,
                    'document_template_id' => 1,
                    'name' => 'content',
                    'content' => '<p>&nbsp;</p>

<table class="Table" style="border-collapse:collapse; width:512.8000pt; margin-left:3px; border:1.0000pt solid #000000; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr style="height:12.0000pt">
<td colspan="2" rowspan="2" style="border-bottom:1.0000pt solid #ffffff; width:247.9000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.5000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.5000pt solid #000000" valign="top" width="330">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Южный филиал АО &quot;Райффайзенбанк&quot; г.Краснодар</span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:49.7000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.5000pt solid #000000" valign="top" width="66">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">БИК</span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #ffffff; width:215.2000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.5000pt solid #000000; border-top:1.5000pt solid #000000" valign="top" width="286">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">040349556</span></span></span></p>
</td>
</tr>
<tr style="height:23.2000pt">
<td rowspan="2" style="border-bottom:1.0000pt solid #000000; width:49.7000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #000000" valign="top" width="66">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">К/С</span><span style="font-family:Arial">. № </span></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid #000000; width:215.2000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.5000pt solid #000000; border-top:none" valign="top" width="286">
<p style="margin-top:1px; margin-right:38px"><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">30101810900000000556</span></span></span></p>

<p>&nbsp;</p>
</td>
</tr>
<tr style="height:12.0000pt">
<td colspan="2" style="border-bottom:1.5000pt solid #000000; width:247.9000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.5000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #ffffff" valign="top" width="330">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Банк получателя</span></span></span></p>
</td>
</tr>
<tr style="height:12.0000pt">
<td style="border-bottom:1.0000pt solid #000000; width:124.0000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.5000pt solid #000000; border-right:1.0000pt solid #000000; border-top:none" valign="top" width="165">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">ИНН 2308034817</span></span></span></p>
</td>
<td style="border-bottom:none; width:123.9000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:none" valign="top" width="165">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">КПП 230801001</span></span></span></p>
</td>
<td rowspan="4" style="border-bottom:1.5000pt solid #000000; width:49.7000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:none" valign="top" width="66">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Р/С </span><span style="font-family:Arial">№ </span></span></span></p>
</td>
<td rowspan="4" style="border-bottom:1.5000pt solid #000000; width:215.2000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.5000pt solid #000000; border-top:1.5000pt solid #000000" valign="top" width="286">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">40702810426100412758</span></span></span></p>
</td>
</tr>
<tr style="height:12.0000pt">
<td colspan="2" rowspan="2" style="border-bottom:1.0000pt solid #ffffff; width:247.9000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.5000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #000000" valign="top" width="330">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Общество с ограниченной ответственностью &quot;ЭкоГрин&quot;</span></span></span></p>
</td>
</tr>
<tr style="height:23.2000pt">
</tr>
<tr style="height:12.0000pt">
<td colspan="2" style="border-bottom:1.5000pt solid #000000; width:247.9000pt; padding:1.5000pt 2.5000pt 1.5000pt 2.5000pt ; border-left:1.5000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #ffffff" valign="top" width="330">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Получатель</span></span></span></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<table class="Table" style="border-collapse:collapse; margin-left:6px; border:1.0000pt solid #ffffff; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr style="height:35.0000pt">
<td style="border-bottom:1.5000pt solid #000000; width:515.0000pt; padding:0.0000pt 0.5000pt 0.0000pt 0.5000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="center" width="686">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-size:14.0000pt"><span style="font-family:Arial"><span style="font-weight:bold">Счет №&nbsp;</span></span></span></b></span></span>{{order.order_nr}}<span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-size:14.0000pt"><span style="font-family:Arial"><span style="font-weight:bold">&nbsp;</span></span></span></b><b><span style="font-size:14.0000pt"><span style="background:#ffff00"><span style="font-family:Arial"><span style="font-weight:bold">&nbsp;</span></span></span></span></b><b><span style="font-size:14.0000pt"><span style="background:#ffff00"><span style="font-family:Arial"><span style="font-weight:bold">от&nbsp;</span></span></span></span></b></span></span>{{order_date}}<span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-size:14.0000pt"><span style="background:#ffff00"><span style="font-family:Arial"><span style="font-weight:bold">&nbsp;</span></span></span></span></b><b><span style="font-size:14.0000pt"><span style="background:#ffff00"><span style="font-family:Arial"><span style="font-weight:bold">г.</span></span></span></span></b></span></span></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<table class="Table" style="border-collapse:collapse; margin-left:7px; border:1.0000pt solid #ffffff; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr>
<td style="border-bottom:1.0000pt solid #ffffff; width:75.0000pt; padding:5.0000pt 0.0000pt 0.0000pt 0.0000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="100">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Поставщик:</span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Адрес</span><span style="font-family:Arial">:</span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Телефон</span><span style="font-family:Arial">:</span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #ffffff; width:440.0000pt; padding:5.0000pt 0.0000pt 0.0000pt 0.0000pt ; border-left:none; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="586">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-size:11.0000pt"><span style="font-family:\'Times New Roman\'">Общество с ограниченной ответственностью &quot;ЭкоГрин&quot;</span></span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-size:11.0000pt"><span style="font-family:\'Times New Roman\'">350051, Краснодарский край, город Краснодар, улица Дальняя/Рашпилевская, дом 11/268</span></span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-size:11.0000pt"><span style="font-family:\'Times New Roman\'">(861)224-75-37</span></span></span></span></p>
</td>
</tr>
<tr>
<td style="border-bottom:1.0000pt solid #ffffff; width:75.0000pt; padding:5.0000pt 0.0000pt 0.0000pt 0.0000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:none" valign="top" width="100">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Покупатель:</span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="background:#ffff00"><span style="font-family:Arial">Адрес</span></span><span style="background:#ffff00"><span style="font-family:Arial">:</span></span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="background:#ffff00"><span style="font-family:Arial">Телефон</span></span><span style="background:#ffff00"><span style="font-family:Arial">:</span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #ffffff; width:440.0000pt; padding:5.0000pt 0.0000pt 0.0000pt 0.0000pt ; border-left:none; border-right:1.0000pt solid #ffffff; border-top:none" valign="top" width="586">
<p>{{user.name}}</p>

<p>{{user.address}}</p>

<p>{{user.phone}}</p>
</td>
</tr>
<tr>
<td style="border-bottom:1.0000pt solid #ffffff; width:75.0000pt; padding:5.0000pt 0.0000pt 0.0000pt 0.0000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:none" valign="top" width="100">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Основание:</span>&nbsp;</span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #ffffff; width:440.0000pt; padding:5.0000pt 0.0000pt 0.0000pt 0.0000pt ; border-left:none; border-right:1.0000pt solid #ffffff; border-top:none" valign="top" width="586">
<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Договор поставки №&nbsp;</span></span></span>{{order.id}}<span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">/И от </span></span></span>{{date}}<span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">г., приложение </span><span style="background:#ffff00"><span style="font-family:Arial">№&nbsp;</span></span></span></span>{{order.id}}<span style="line-height:114%"><span style="font-family:Arial"><span style="background:#ffff00"><span style="font-family:Arial">&nbsp;От&nbsp;</span></span></span></span>{{order_date}}</p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<table class="Table" style="border-collapse:collapse; width:516.6500pt; margin-left:3px; border:1.0000pt solid #000000; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr style="height:20.0000pt">
<td style="border-bottom:1.0000pt solid #000000; width:24.2000pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.5000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.5000pt solid #000000" valign="center" width="32">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">№</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:166.4500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.5000pt solid #000000" valign="center" width="221">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Наименование </span></span></b><b><span style="font-family:Arial"><span style="font-weight:bold">товара</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:49.6000pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.5000pt solid #000000" valign="center" width="66">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Кол-вo</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:21.2500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.5000pt solid #000000" valign="center" width="28">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Ед</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:77.9500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid windowtext; border-top:1.5000pt solid #000000" valign="center" width="103">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Цена</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:42.5500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.5000pt solid #000000" valign="center" width="56">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Ставка НДС%</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:54.9500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.5000pt solid #000000" valign="center" width="73">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">В т.ч.НДС</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #000000; width:79.7000pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:none; border-right:1.5000pt solid #000000; border-top:1.5000pt solid #000000" valign="center" width="106">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Сумма</span></span></b></span></span></p>
</td>
</tr>
<tr>
<td style="border-bottom:1.5000pt solid #000000; width:24.2000pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.5000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #000000" valign="top" width="32">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">1</span></span></span></p>
</td>
<td style="border-bottom:1.5000pt solid #000000; width:166.4500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #000000" valign="top" width="221">
<p>&nbsp;</p>
</td>
<td style="border-bottom:1.5000pt solid #000000; width:49.6000pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #000000" valign="top" width="66">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
<td style="border-bottom:1.5000pt solid #000000; width:21.2500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid #000000; border-top:1.0000pt solid #000000" valign="top" width="28">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
<td style="border-bottom:1.5000pt solid #000000; width:77.9500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:1.0000pt solid #000000; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid #000000" valign="top" width="103">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
<td style="border-bottom:1.5000pt solid #000000; width:42.5500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid #000000" valign="top" width="56">
<p align="center" style="text-align:center"><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">20</span></span></span></p>
</td>
<td style="border-bottom:1.5000pt solid #000000; width:54.9500pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid #000000" valign="top" width="73">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
<td style="border-bottom:1.5000pt solid #000000; width:79.7000pt; padding:2.5000pt 2.5000pt 2.5000pt 2.5000pt ; border-left:none; border-right:1.5000pt solid #000000; border-top:1.0000pt solid #000000" valign="top" width="106">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<table class="Table" style="border-collapse:collapse; margin-left:3px; border:1.0000pt solid #ffffff; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr style="height:10.0000pt">
<td style="border-bottom:1.0000pt solid #ffffff; width:445.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="593">
<p align="right" style="text-align:right"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Итого:</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #ffffff; width:70.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:none; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="93">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
</tr>
<tr style="height:10.0000pt">
<td style="border-bottom:1.0000pt solid #ffffff; width:445.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="593">
<p align="right" style="text-align:right"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">В том числе НДС</span></span></b><b><span style="font-family:Arial"><span style="font-weight:bold">:</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #ffffff; width:70.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:none; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="93">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
</tr>
<tr style="height:10.0000pt">
<td style="border-bottom:1.0000pt solid #ffffff; width:445.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="593">
<p align="right" style="text-align:right"><span style="line-height:114%"><span style="font-family:Arial"><b><span style="font-family:Arial"><span style="font-weight:bold">Всего к оплате:</span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid #ffffff; width:70.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:none; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="93">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
</tr>
<tr style="height:10.0000pt">
<td colspan="2" style="border-bottom:1.0000pt solid #ffffff; width:515.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="686">
<p>&nbsp;</p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Всего </span><span style="background:#ffff00"><span style="font-family:Arial">наименований &nbsp;&nbsp;&nbsp;, на сумму (прописью) &nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span>{{order_total_word}}<span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">.</span></span></span></p>
</td>
</tr>
<tr style="height:10.0000pt">
<td colspan="2" style="border-bottom:1.5000pt solid #000000; width:515.0000pt; padding:0.0000pt 2.5000pt 0.5000pt 2.5000pt ; border-left:1.0000pt solid #ffffff; border-right:1.0000pt solid #ffffff; border-top:1.0000pt solid #ffffff" valign="top" width="686">
<p>&nbsp;</p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Внимание!</span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Счет действителен в течении 5 дней.</span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Оплата данного счета означает согласие с условиями поставки товара.</span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Уведомление об оплате обязательно, в противном случае не гарантируется наличие товара на складе.</span></span></span></p>

<p><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Товар отпускается по факту прихода денег на р/с Поставщика, </span><span style="background:#ffff00"><span style="font-family:Arial">самовывозом</span></span><span style="font-family:Arial">, при наличии доверенности и паспорта.</span></span></span></p>

<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<p style="margin-bottom:13px">&nbsp;</p>

<p style="margin-right:3px; margin-bottom:13px"><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Директор &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________ Кирющенко Т.Н.</span></span></span></p>

<p style="margin-bottom:13px">&nbsp;</p>

<p style="margin-bottom:13px">&nbsp;</p>

<p style="margin-bottom:13px"><span style="line-height:114%"><span style="font-family:Arial"><span style="font-family:Arial">Главный бухгалтер &nbsp;&nbsp;&nbsp;____________________ Фабричнева С.Г.</span></span></span></p>

<div id="gtx-trans" style="position: absolute; left: 491px; top: 1466.1px;">
<div class="gtx-trans-icon">&nbsp;</div>
</div>',
                    'created_at' => '2020-11-01 22:55:39',
                    'updated_at' => '2020-11-02 00:32:23',
                ),
                1 => 
                array (
                    'id' => 4,
                    'document_template_id' => 2,
                    'name' => 'content',
                    'content' => '<p class="15"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">ДОГОВОР ПОСТАВКИ № </span></span></span></b>{{order.id}}<b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">/И</span></span></span></b></p>

<p style="margin-left:3px; text-indent:-2.0000pt"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">г. Краснодар</span></span></span></b><b> </b></span></span>{{order_date}}<span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Courier New\'">г</span></span></span></span></span></p>

<p align="justify" style="margin-left:3px; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Общество с ограниченной ответственностью &laquo;ЭкоГрин&raquo;, г. Краснодар, </span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">именуемое в дальнейшем</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;&laquo;Поставщик&raquo;,</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;в лице </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Кирющенко Татьяны Николаевны, действующей на основании устава</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">, с одной стороны, <a name="_Hlk45377477">и </a></span></span><b>&nbsp;&nbsp;</b></span></span></span>{{user.name}}<span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b>&nbsp;</b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">, именуемое </span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;в дальнейшем</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;&laquo;Покупатель&raquo;,</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;в лице </span></span></span></span></span>{{user.name}}<span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">, действующего на основании </span></span></span></b></span></span></span>{{user.name}}<span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">, с другой стороны, заключили настоящий договор о нижеследующем:</span></span></span></span></span></p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">1. ПРЕДМЕТ ДОГОВОРА</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">1.1.</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Поставщик</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;обязуется передать в собственность</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Покупателя</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Товар, ассортимент, количество и срок поставки которого указаны в Приложениях к настоящему договору, а </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Покупатель</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;обязуется принять и оплатить его в установленные сроки. </span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">1.2. Все Приложения к настоящему договору, согласованные и подписанные обеими сторонами, являются неотъемлемой частью настоящего договора.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">1.3. Стоимость договора складывается из сумм Приложений к настоящему договору.</span></span></span></span></span></p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">2. УСЛОВИЯ ПОСТАВКИ</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">2.1.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;На каждую партию поставляемого Товара составляется накладная и счет-фактура, которые оформляются согласно требованиям, установленным действующим законодательством Российской Федерации.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">2.2.</span></span><b>&nbsp;</b><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Поставщик</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;осуществит поставку Товара представителю </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Покупателя</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;со склада в &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ст. Григорьевской Северского р-на Краснодарского края (выборка Товара), или, по согласованию сторон, осуществит доставку товара к местонахождению Покупателя, согласно срокам, указанным в Приложениях к настоящему договору.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">2.3.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Датой поставки считается дата получения Товара </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Покупателем, отмеченная в накладной</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">2.4. Право собственности, риск случайной гибели или повреждения Товара переходит </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Покупателю</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;в момент передачи товара представителю</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Покупателя</span></span></span></b>&nbsp;<span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">и подписания товаросопроводительных документов.</span></span></span></span></span></p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">3. КАЧЕСТВО ТОВАРА</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">3.1.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Качество товара по настоящему договору, должно соответствовать техническим стандартам фирмы-производителя и требованиям, установленным действующими Российской Федерации ГОСТами для данных видов товаров.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">3.2.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Качество Товара должно подтверждаться декларацией о соответствии или иными документами, предусмотренными действующим законодательством.</span></span></span></span></span></p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">4. УПАКОВКА</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">4.1. </span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">Товар отгружается в упаковке, обеспечивающей его сохранность от механических повреждений.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">4.2. Упаковка должна соответствовать установленным в РФ стандартам или техническим условиям и обеспечивать, при условии надлежащего обращения с грузом, сохранность Товара во время транспортировки. </span></span></span></span></span></p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">5. ПОРЯДОК ОТГРУЗКИ И ПРИЕМКИ ТОВАРА</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">5.1.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;При получении Товара и товаросопроводительных документов,</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Покупатель</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;надлежащим образом оформляет соответствующие документы и возвращает по одному экземпляру каждого документа</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Поставщику.</span></span></span></b></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">5.2.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;В момент получения товара, Покупатель обязан обеспечить проверку ассортимента, количества Товара. При обнаружении недостачи, несоответствия ассортименту, недоброкачественности, повреждения или порчи Товара, об этом составляется надлежаще оформленный &nbsp;претензионный акт и подписывается уполномоченными лицами сторон. </span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">5.3.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Требования, связанные с недостатками полученного Товара, указанные в п.5.2., должны быть заявлены в течение</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;3-х</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;рабочих дней с момента получения товара.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">5.4.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;В случае несоблюдения</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Покупателем</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;сроков приемки Товара в соответствие с п.5.3. </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Поставщик</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;не принимает претензии.</span></span></span></span></span></p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">6. ЦЕНА И УСЛОВИЯ ОПЛАТЫ</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">6.1.</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Поставщик</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;отпускает Товар по предварительно согласованным с</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Покупателем</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;ценам, указанным в накладной на отпускаемый по соответствующему Приложению к договору Товар. Стоимость тары и упаковки входит в стоимость Товара.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">6.2.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Оплата за Товар производится</span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">&nbsp;Покупателем</span></span></span></b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;в сроки, указанные в пункте 2 в соответствующем Приложении к договору.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">6.3. В случае, если цена и стоимость Товара в Приложении указаны в условных единицах (у.е.), эквивалентных доллару США или Евро, оплата за поставленный Товар производится:</span></span></span></span></span></p>

<p align="justify" style="margin-left:12px; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">6.3.1. по суммам, перечисленным до поставки товара (в качестве предоплаты), по курсу ЦБ РФ на день оплаты;</span></span></span></span></span></p>

<p align="justify" style="margin-left:12px; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">6.3.2. по суммам, перечисленным после поставки товара, по курсу ЦБ РФ на день оплаты, но не ниже курса на день отгрузки.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">Датой оплаты считается дата зачисления денежных средств на расчетный счет </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Поставщика.</span></span></span></b></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">6.4. В случае, если цена и стоимость Товара в Приложении указаны в рублях, то оплата за поставленный Товар производится в рублях. Датой оплаты считается дата зачисления денежных средств на расчетный счет </span></span><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">Поставщика.</span></span></span></b></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">7. САНКЦИИ</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">7.1. Если Покупатель откажется от покупки Товара по условиям настоящего договора по истечении 14 (четырнадцать) календарных дней с даты подписания настоящего договора или соответствующего приложения, он уплачивает Поставщику штраф в размере 10 (десять) % от стоимости отказного Товара.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">7.2. В случае нарушения п.6.2., настоящего договора, Покупатель, оплачивает Поставщику неустойку в размере, равном 0,1% за каждый календарный день просрочки от суммы неоплаченного Товара.</span></span></span></span></span></p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">8. ФОРС-МАЖОР</span></span></span></b></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">8.1. Сторона освобождается от ответственности за частичное или полное неисполнение обязательств по настоящему договору, если это неисполнение явилось следствием обстоятельств непреодолимой силы и эти обстоятельства непосредственно повлияли на исполнение настоящего договора. </span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">8.2. Под обстоятельствами непреодолимой силы понимаются обстоятельства чрезвычайного характера: наводнение, пожар, землетрясение или иные явления природы, военные действия, акты и любые другие обстоятельства вне разумного контроля сторон.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="page-break-after:avoid"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">При наступлении вышеуказанных обстоятельств, срок исполнения обязательства по настоящему договору отодвигается соразмерно времени, в течение которого действовали такие обстоятельства.</span></span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">8.3. Сторона, для которой создалась невозможность исполнения обязательств по &nbsp;настоящему договору, должна не позднее 7 (семь) дней письменно известить другую сторону о наступлении или прекращении обстоятельств, препятствующих исполнению обязательств. Несвоевременное, сверх десяти дней, извещение об обстоятельствах непреодолимой силы лишает сторону права ссылаться на них в будущем.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">8.4. В случаях, когда указанные обстоятельства и их последствия продолжают действовать более шести месяцев или если при их наступлении становится ясным, что они и их последствия будут действовать более &nbsp;этого срока, стороны в возможно короткий срок проведут переговоры с целью выявления приемлемых для них альтернативных способов исполнения настоящего договора и достижения соответствующей договоренности.</span></span></span></span></span></p>

<p align="center" style="text-align:center">&nbsp;</p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">9.ДОПОЛНИТЕЛЬНЫЕ УСЛОВИЯ</span></span></span></b></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">9.1.</span></span> <span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">Покупатель обязуется предоставить Поставщику на момент заключения настоящего договора следующий пакет документов, заверенный подписью уполномоченного лица и печатью Покупателя:</span></span></span></span></span></p>

<p align="justify" style="text-indent:35.4500pt; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- Устав (страницы с указанием адреса организации, уполномоченного органа, первую и последнюю страницы);</span></span></span></span></span></p>

<p align="justify" style="text-indent:35.4500pt; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- Свидетельство о регистрации в качестве юридического лица/ Свидетельство о регистрации в качестве ИП;</span></span></span></span></span></p>

<p align="justify" style="text-indent:35.4500pt; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- Приказ (Протокол) о назначении руководителя (уполномоченного органа);</span></span></span></span></span></p>

<p align="justify" style="text-indent:35.4500pt; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- Свидетельство о постановке на налоговый учет;</span></span></span></span></span></p>

<p align="justify" style="text-indent:35.4500pt; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- Выписку из ЕГРЮЛ / ЕГРИП;</span></span></span></span></span></p>

<p align="justify" style="text-indent:35.4500pt; text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- Документ, подтверждающий полномочия лица, подписывающего настоящий договор (заверенная копия приказа или протокола о назначении, доверенности либо иного документа, подтверждающего наличие полномочий на подписание настоящего договора).</span></span></span></span></span></p>

<p align="justify" style="text-indent:35.4500pt; text-align:justify">&nbsp;</p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">10. СРОК ДЕЙСТВИЯ ДОГОВОРА</span></span></span></b></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">10.1.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Договор действителен с момента подписания его сторонами и действует до</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;исполнения обязательств обеими сторонами.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">11. ЗАКЛЮЧИТЕЛЬНЫЕ ПОЛОЖЕНИЯ.</span></span></span></b></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">11.1.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Настоящий договор составлен в двух экземплярах, имеющих одинаковую юридическую силу, по одному экземпляру для каждой стороны. </span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">11.2.</span></span><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;Любые изменения и дополнения к настоящему Договору действительны, если они совершены в письменной форме и подписаны уполномоченными представителями обеих сторон. Стороны соглашаются, что Договор и иные документы, полученные по факсу, электронной почте или иным способом, позволяющим достоверно установить, что документ исходит от Стороны по договору, имеют юридическую силу до подписания оригиналов соответствующих документов.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">11.3. Все споры, возникающие &nbsp;или могущие возникнуть из настоящего договора или в связи с ним, в том числе касающиеся его исполнения, нарушения, прекращения или недействительности, подлежат разрешению в арбитражном суде или суде общей юрисдикции по месту нахождения Поставщика. </span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">11.4. Все уведомления и сообщения Сторон, связанные с исполнением настоящего Договора, направляются Сторонами следующими способами:</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- по факсу или электронной почте, если уведомление или сообщение связано с вопросом, требующим немедленного разрешения. Оригинал документа должен быть направлен в течение 2 (двух) рабочих дней одним из указанных ниже способов;</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- путем вручения уполномоченным представителем одной Стороны соответствующего уведомления (сообщения, иного документа) уполномоченному представителю другой Стороны;</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">- заказным письмом.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">Сообщения влекут гражданско-правовые последствия для Стороны, которой направлены, с момента их доставки указанной Стороне или ее представителю. Такие последствия возникают и в случае, когда сообщение не было вручено адресату по зависящим от него обстоятельствам (</span></span><a href="consultantplus://offline/ref=52FBB17057BDD2CCE15613D7D76C5171A158C9187132CDCC54B3C6086133E91E4F2E24FBEECC2C578A21FC8F9EC19C974FFB79EADCE942F"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">п. 1 ст. 165.1</span></span></a><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">&nbsp;ГК РФ).</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">11.5. Во всем, что не предусмотрено настоящим договором, стороны руководствуются действующим гражданским законодательством РФ. </span></span></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="center" style="margin-left:3px; text-indent:-2.0000pt; text-align:center"><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">12. РЕКВИЗИТЫ СТОРОН</span></span></span></b></span></span></span></p>

<p><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">ПОСТАВЩИК:</span></span></span></b><b> </b><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">ПОКУПАТЕЛЬ:</span></span></span></b></span></span></span></p>

<table class="Table" style="border-collapse:collapse; width:770.4000pt; border:none; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr style="height:11.8500pt">
<td style="border-bottom:none; width:266.4000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:none; border-top:none" valign="top" width="355">
<p><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">ООО &quot;ЭкоГрин&quot;</span></span></span></span></span></p>

<p><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">350051, край Краснодарский, город Краснодар, </span></span></span></span></span></p>

<p><span style="page-break-after:avoid"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">улица Дальняя/Рашпилевская, дом 11/268 </span></span></span></span></span></p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="font-family:\'Times New Roman\'">тел. (861) 24 55 28, 24 75 37</span></span></span></span></p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="font-family:\'Times New Roman\'">ОГРН 1152308000019</span></span></span></span></p>

<p style="margin-right:68px"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">ИНН 2308034817/КПП 230801001</span></span></span></span></p>

<p><span style="text-autospace:ideograph-numeric"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">Р/с 40702810426100412758</span></span></span></span></span></p>

<p><span style="text-autospace:ideograph-numeric"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">Южный филиал АО &laquo;Райффайзенбанк&raquo; </span></span></span></span></span></p>

<p><span style="text-autospace:ideograph-numeric"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">г.Краснодар</span></span></span></span></span></p>

<p><span style="text-autospace:ideograph-numeric"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">К/с 30101810900000000556</span></span></span></span></span></p>

<p><span style="text-autospace:ideograph-numeric"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:11.0000pt"><span style="font-family:\'Courier New\'">БИК 040349556</span></span></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>
</td>
<td style="border-bottom:none; width:252.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:none; border-top:none" valign="top" width="336">
<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica">&nbsp;<span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">Наименование</span></span></span><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">:&nbsp;&nbsp;</span></span></span></span></span>{{user.name}}</p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">Адрес:&nbsp;&nbsp;</span></span></span></span></span>{{user.billing_address}}</p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">ОГРН / ОГРНИП</span></span></span></span></span></p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">ИНН &nbsp;&nbsp;&nbsp;</span></span></span></span></span>{{user.inn}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;КПП: &nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></span></p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">р/с &nbsp;&nbsp;</span></span></span></span></span></p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">к/с &nbsp;&nbsp;</span></span></span></span></span></p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">Наименование банка</span></span></span><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">:</span></span></span></span></span></p>

<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:11.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">БИК</span></span></span>&nbsp;&nbsp;&nbsp;</span></span></p>
</td>
<td style="border-bottom:none; width:252.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:none; border-top:none" valign="top" width="336">
<p class="MsoHeader"><span style="font-size:12pt"><span style="font-family:NTHarmonica">&nbsp;</span></span></p>

<p class="MsoHeader">&nbsp;</p>

<p class="MsoHeader">&nbsp;</p>

<p class="MsoHeader">&nbsp;</p>

<p class="MsoHeader">&nbsp;</p>
</td>
</tr>
</tbody>
</table>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">За и от имени ПОСТАВЩИКА</span></span></span></b><b> </b><b><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'"><span style="font-weight:bold">За и от имени ПОКУПАТЕЛЯ</span></span></span></b></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">______________________________</span></span> <span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">________________________________</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">Кирющенко Татьяна Николаевна</span></span> </span></span></span>{{user.name}}<span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Courier New\'">&nbsp;и наименование должности &hellip;&hellip;.</span></span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">Директор</span></span> &nbsp;</span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p style="margin-left:3px; text-indent:-2.0000pt">{{order_date}}<span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Courier New\'">&nbsp;г</span></span></span><b> </b></span></span>{{order_date}}<span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Courier New\'">&nbsp;г.</span></span></span> </span></span></p>

<p align="justify" style="text-align:justify"><span style="text-justify:inter-ideograph"><span style="line-height:116%"><span style="font-family:&quot;Courier New&quot;"><span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">м.п.</span></span> <span style="font-size:12.0000pt"><span style="font-family:\'Courier New\'">м.п.</span></span></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="justify" style="text-align:justify">&nbsp;</p>',
                    'created_at' => '2020-11-01 23:29:45',
                    'updated_at' => '2020-11-02 01:43:29',
                ),
                2 => 
                array (
                    'id' => 5,
                    'document_template_id' => 3,
                    'name' => 'title',
                    'content' => '<p><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">Приложение № </span></span></span></span></b></span></span>{{order.id}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">&nbsp;от </span></span></span></span></b><b><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">&quot;&quot; </span></span></span></span></span></b></span></span>{{order_date}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">г</span></span></span></span></span></b><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">.</span></span></span></span></b></span></span></p>',
                    'created_at' => '2020-11-01 23:35:25',
                    'updated_at' => '2020-11-02 00:41:42',
                ),
                3 => 
                array (
                    'id' => 8,
                    'document_template_id' => 3,
                    'name' => 'content',
                    'content' => '<p align="center" class="MsoHeader" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">Приложение № </span></span></span></span></b></span></span>{{order.id}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">от </span></span></span></span></b><b><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">&quot;&quot; </span></span></span></span></span></b></span></span>{{order_date}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">г</span></span></span></span></span></b><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">.к договору поставки № </span></span></span></span></b></span></span>{{order.id}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">/И от&nbsp;</span></span></span></span></b></span></span>{{order_date}}</p>

<p align="center" class="MsoHeader" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">ПОКУПАТЕЛЬ: &nbsp;&nbsp;</span></span></span></span></b></span></span>{{user.name}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b>&nbsp;&nbsp;</b></span></span></p>

<p align="center" class="MsoHeader" style="text-align:center">&nbsp;</p>

<p><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">1. Поставщик поставляет товар в ассортименте, количестве &nbsp;и в сроки согласно списку:</span></span></span></span></span></p>

<table class="Table" style="border-collapse:collapse; width:550.0000pt; border:1.0000pt solid windowtext; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:125.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="166">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Наименование</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:30.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="40">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Ед. изм.</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:50.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="66">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Кол-во</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="93">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Цена ед.</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="120">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">СУММА</span></span></span></b></span></span></p>
</td>
<td colspan="2" style="border-bottom:1.0000pt solid windowtext; width:115.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="153">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">в т.ч. НДС</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="93">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Срок отгрузки</span></span></span></b></span></span></p>
</td>
</tr>
<tr style="height:4.7000pt">
<td style="border-bottom:1.0000pt solid windowtext; width:25.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="33">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">%</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">cумма</span></span></span></span></b></span></span></p>
</td>
</tr>
{% for order_item in order_items %}
<tr>
<td style="border-bottom:1.0000pt solid windowtext; width:125.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="166">
<p><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">{{order_item.name}}</span></span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:30.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="40">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">{{order_item.attributes.pack_type}}</span></span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:50.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="66">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">{{order_item.attributes.packing}}</span></span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="93">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">{{order_item.attributes.packing}} &nbsp;&nbsp;руб.</span></span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">108&#39;000.00 &nbsp;&nbsp;руб.</span></span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:25.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="33">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">20</span></span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">18&#39;000.00 &nbsp;&nbsp;руб.</span></span></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="93">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:8.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">по согласованию</span></span></span></span></span></p>
</td>
</tr>
{% endfor %}
<tr>
<td colspan="4" style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:275.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="366">
<p><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">ИТОГО</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">1&#39;448&#39;000.00 &nbsp;&nbsp;руб.</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:25.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="33">
<p align="center" style="text-align:center">&nbsp;</p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">241&#39;333.33 &nbsp;&nbsp;руб.</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="93">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<p><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">Список содержит </span></span></span></span>{{order_items_count}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">&nbsp;наименований на общую сумму </span></span></span></span>{{order_total_word}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">. </span></span></span></span></p>

<p><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">2. Покупатель обязуется осуществить оплату за поставленный товар согласно графику:</span></span></span></span></span></p>

<table class="Table" style="border-collapse:collapse; border:1.0000pt solid windowtext; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="200">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Сроки и вид оплаты</span></span></span></b></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="200">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Сумма</span></span></span></b></span></span></span></p>
</td>
</tr>
<tr>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="200">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'">Расчет до&nbsp;</span></span></span></span></span>{{order_date}}</p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="200">
<p align="right" style="text-align:right">{{order.billing_total}}<span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'">&nbsp; руб.</span></span></span></span></span></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<h1 style="text-align:justify"><span style="font-size:11pt"><span style="font-family:&quot;Times New Roman&quot;"><span style="font-weight:bold"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">За и от имени ПРОДАВЦА </span></span></span></b><b> </b><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">За и от имени ПОКУПАТЕЛЯ</span></span></span></b></span></span></span></h1>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">___________________________</span></span> <span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">___________________________</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">Кирющено Татьяна Николаевна</span></span> &nbsp;</span></span></span>{{user.name}}<span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">&nbsp;и должность</span></span></span>&nbsp;</span></span></span></p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">Директор</span></span> </span></span></span></p>

<p align="justify" style="text-align:justify">{{order_date}}<span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">&nbsp;г.</span></span></span> </span></span></span>{{order_date}}<span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">&nbsp;г.</span></span></span><b>&nbsp;</b></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">М.П.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span> <span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">М.П. </span></span></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>',
                    'created_at' => '2020-11-01 21:10:44',
                    'updated_at' => '2020-11-02 02:27:08',
                ),
                4 => 
                array (
                    'id' => 9,
                    'document_template_id' => 5,
                    'name' => 'content',
                    'content' => '<table height="1119" style="border-collapse:collapse; width:588.77pt; border:none" width="785">
<colgroup>
<col style="width:42.00pt" width="56" />
<col style="width:155.25pt" width="207" />
<col style="width:56.25pt" width="75" />
<col style="width:94.50pt" width="126" />
<col style="width:68.25pt" width="91" />
<col style="width:69.75pt" width="93" />
<col style="width:102.75pt" width="137" />
</colgroup>
<tbody>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; width:42.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" width="56">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; width:155.25pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" width="207" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Руководителю компании (</span></span></span></span></span></span>{{user.name_organization}}<span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">) или</span></span></span></span></span></span></td>
<td style="border:none; width:56.25pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" width="75">&nbsp;</td>
<td style="border:none; width:94.50pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" width="126">&nbsp;</td>
<td style="border:none; width:68.25pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" width="91">&nbsp;</td>
<td style="border:none; width:69.75pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" width="93">&nbsp;</td>
<td style="border:none; width:102.75pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" width="137">&nbsp;</td>
</tr>
<tr height="21" style="height:15.75pt">
<td height="21" style="border:none; height:15.75pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Индивидуальному предпринимателю&nbsp;</span></span></span></span></span></span>{{user.name}}</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et5" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:12pt"><span style="color:#000000"><span style="font-weight:700"><span style="font-family:&quot;Times New Roman&quot;"><span style="font-style:normal"><span style="text-decoration:none">ООО &laquo;ЭкоГрин&raquo;</span></span></span></span></span></span></td>
<td class="et6" style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">или </span></span></span></span></span></span>{{user.name}}<span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;физ лица</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et7" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-family:&quot;Times New Roman&quot;"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Российская Федерация</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et7" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-family:&quot;Times New Roman&quot;"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">350051 г. Краснодар,</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et7" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-family:&quot;Times New Roman&quot;"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">ул. Дальняя/Рашпилевская, 11/268</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et7" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-family:&quot;Times New Roman&quot;"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">тел. 8(861)224-75-37&nbsp;</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et8" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap"><span style="font-size:11pt"><span style="color:#0563c1"><span style="text-decoration:underline"><span style="font-weight:400"><span style="font-style:normal"><span style="font-family:Calibri"><a href="http://ecogreen.ru/">http://EcoGreen.ru</a></span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td align="right" class="et9" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="44131">&nbsp;</td>
</tr>
<tr height="19" style="height:14.25pt">
<td class="et10" colspan="7" height="19" style="border:none; height:14.25pt; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:14pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ&nbsp;</span></span></span></span></span></span></td>
</tr>
<tr height="19" style="height:14.25pt">
<td class="et10" colspan="7" height="19" style="border:none; height:14.25pt; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:14pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">на поставку средств защиты растений</span></span></span></span></span></span></td>
</tr>
<tr height="19" style="height:14.25pt">
<td class="et10" height="19" style="border:none; height:14.25pt; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et10" style="border:none; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et10" style="border:none; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et10" style="border:none; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et10" style="border:none; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et10" style="border:none; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et10" style="border:none; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="79" style="height:59.25pt">
<td class="et11" height="79" style="border:none; height:59.25pt; border-width:1pt 0.5pt 1pt 1pt; border-style:solid; border-color:#000000; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">№</span></span></span></span></span></span></td>
<td class="et12" style="border:none; width:155.25pt; border-width:1pt 0.5pt; border-style:solid; border-color:#000000; text-align:center; white-space:normal; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom" width="207" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Наименование</span></span></span></span></span></span></td>
<td class="et12" style="border:none; width:56.25pt; border-width:1pt 0.5pt; border-style:solid; border-color:#000000; text-align:center; white-space:normal; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom" width="75" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">кол-во&nbsp;</span></span></span></span></span></span></td>
<td class="et12" style="border:none; width:94.50pt; border-width:1pt 0.5pt; border-style:solid; border-color:#000000; text-align:center; white-space:normal; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom" width="126" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Цена по прайс-листу, РУБ</span></span></span></span></span></span></td>
<td class="et12" style="border:none; width:68.25pt; border-width:1pt 0.5pt; border-style:solid; border-color:#000000; text-align:center; white-space:normal; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom" width="91" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Скидка, %</span></span></span></span></span></span></td>
<td class="et12" style="border:none; width:69.75pt; border-width:1pt 0.5pt; border-style:solid; border-color:#000000; text-align:center; white-space:normal; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom" width="93" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">цена за л/кг с НДС, РУБ</span></span></span></span></span></span></td>
<td class="et13" style="border:none; width:102.75pt; border-width:1pt 1pt 1pt 0.5pt; border-style:solid; border-color:#000000; text-align:center; white-space:normal; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom" width="137" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Сумма с НДС, РУБ</span></span></span></span></span></span></td>
</tr>
<tr height="20" style="height:15.00pt">
<td align="right" class="et14" height="20" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; height:15.00pt; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="1"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">1</span></span></span></span></span></span></td>
<td class="et15" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Динали</span></span></span></span></span></span></td>
<td align="right" class="et14" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="40"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">40</span></span></span></span></span></span></td>
<td align="right" class="et16" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="10000"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;10,000.00&nbsp;</span></span></span></span></span></span></td>
<td class="et17" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="59"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;59.0&nbsp;</span></span></span></span></span></span></td>
<td align="right" class="et14" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="4100"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">4100</span></span></span></span></span></span></td>
<td align="right" class="et16" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="164000"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;164,000.00&nbsp;</span></span></span></span></span></span></td>
</tr>
<tr height="20" style="height:15.00pt">
<td align="right" class="et18" height="20" style="border:0.5pt solid #000000; background:#ffff00; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="6"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">6</span></span></span></span></span></span></td>
<td class="et19" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:0.5pt solid #000000; border-right:0.5pt solid #000000; border-left:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Свитч</span></span></span></span></span></span></td>
<td class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">НЕТ в НАЛИЧИИ</span></span></span></span></span></span></td>
<td class="et16" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et17" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et16" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td class="et20" height="20" style="border:0.5pt solid #000000; background:#ffff00; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">аналог</span></span></span></span></span></span></td>
<td class="et19" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:0.5pt solid #000000; border-right:0.5pt solid #000000; border-left:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Кантус</span></span></span></span></span></span></td>
<td align="right" class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="80"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">80</span></span></span></span></span></span></td>
<td align="right" class="et16" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="10000"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;10,000.00&nbsp;</span></span></span></span></span></span></td>
<td class="et17" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; text-align:center; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="30"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;30.0&nbsp;</span></span></span></span></span></span></td>
<td align="right" class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="7000"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">7000</span></span></span></span></span></span></td>
<td align="right" class="et16" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:none; border-right:0.5pt solid #000000; border-left:0.5pt solid #000000; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="560000"><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;560,000.00&nbsp;</span></span></span></span></span></span></td>
</tr>
<tr height="20" style="height:15.00pt">
<td class="et18" height="20" style="border:0.5pt solid #000000; background:#ffff00; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et22" style="border:none; border-bottom:0.5pt solid #000000; background:#ffff00; border-top:0.5pt solid #000000; border-right:0.5pt solid #000000; border-left:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Итого:</span></span></span></span></span></span></td>
<td class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et18" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td align="right" class="et23" style="border:0.5pt solid #000000; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:num="1423200"><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">&nbsp;1,423,200.00&nbsp;</span></span></span></span></span></span></td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="21" style="height:15.75pt">
<td height="21" style="border:none; height:15.75pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="21" style="height:15.75pt">
<td height="21" style="border:none; height:15.75pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="21" style="height:15.75pt">
<td height="21" style="border:none; height:15.75pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et24" style="border:none; text-align:justify; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:12pt"><span style="font-weight:700"><span style="font-family:&quot;Times New Roman&quot;"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none">График оплаты:&nbsp;</span></span></span></span></span></span></td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">30% - до 25.07.2020</span></span></span></span></span></span></td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et6" style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="font-weight:700"><span style="color:#000000"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Доставка:</span></span></span></span></span></span></td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">самовывоз</span></span></span></span></span></span></td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="21" style="height:15.75pt">
<td height="21" style="border:none; height:15.75pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et25" style="border:none; text-align:justify; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">70% - до 01.11.2020</span></span></span></span></span></span></td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">или доставка за счет поставщика</span></span></span></span></span></span></td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et26" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">или стоимость доставки</span></span></span></span></span></span></td>
<td class="et4" style="border:none; background:#ffff00; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et27" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et27" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="font-family:&quot;Times New Roman&quot;"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">С уважением и надеждой на сотрудничество,</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td class="et27" style="border:none; vertical-align:middle; padding-top:1px; padding-left:1px; padding-right:1px; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="font-family:&quot;Times New Roman&quot;"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Директор ООО &laquo;ЭкоГрин&raquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">Т.Н. Кирющенко&nbsp;</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">* коммерческое предложение сформировано автоматически и носит ознакомительный характер</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap" x:str=""><span style="font-size:11pt"><span style="color:#000000"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none"><span style="font-family:Calibri">** Срок действия настоящего коммерческого предложения - 3 дня</span></span></span></span></span></span></td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
<tr height="20" style="height:15.00pt">
<td height="20" style="border:none; height:15.00pt; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
<td style="border:none; padding-top:1px; padding-left:1px; padding-right:1px; vertical-align:bottom; white-space:nowrap">&nbsp;</td>
</tr>
</tbody>
</table>',
                    'created_at' => '2020-11-01 22:12:49',
                    'updated_at' => '2020-11-01 22:19:05',
                ),
                5 => 
                array (
                    'id' => 10,
                    'document_template_id' => 3,
                    'name' => 'header',
                    'content' => '<p align="center" class="MsoHeader" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">Приложение № </span></span></span></span></b></span></span>{{order.id}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">от </span></span></span></span></b><b><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">&quot;&quot; </span></span></span></span></span></b></span></span>{{order_date}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">г</span></span></span></span></span></b><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">.к договору поставки № </span></span></span></span></b></span></span>{{order.id}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">/И от&nbsp;</span></span></span></span></b></span></span>{{order_date}}</p>

<p align="center" class="MsoHeader" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="color:#000000"><span style="font-weight:bold">ПОКУПАТЕЛЬ: &nbsp;&nbsp;</span></span></span></span></b></span></span>{{user.name}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><b>&nbsp;&nbsp;</b></span></span></p>

<p align="center" class="MsoHeader" style="text-align:center">&nbsp;</p>

<p><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">1. Поставщик поставляет товар в ассортименте, количестве &nbsp;и в сроки согласно списку:</span></span></span></span></span></p>

<table class="Table" style="border-collapse:collapse; width:550.0000pt; border:1.0000pt solid windowtext; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:125.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="166">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Наименование</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:30.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="40">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Ед. изм.</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:50.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="66">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Кол-во</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="93">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Цена ед.</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="120">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">СУММА</span></span></span></b></span></span></p>
</td>
<td colspan="2" style="border-bottom:1.0000pt solid windowtext; width:115.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="153">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">в т.ч. НДС</span></span></span></b></span></span></p>
</td>
<td rowspan="2" style="border-bottom:1.0000pt solid windowtext; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="93">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Срок отгрузки</span></span></span></b></span></span></p>
</td>
</tr>
<tr style="height:4.7000pt">
<td style="border-bottom:1.0000pt solid windowtext; width:25.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="33">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">%</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">cумма</span></span></span></span></b></span></span></p>
</td>
</tr>
<tr>
<td colspan="4" style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:275.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="366">
<p>&nbsp;</p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">&nbsp;</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:25.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="33">&nbsp;</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">&nbsp;</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="93">&nbsp;</td>
</tr>
</tbody>
</table>',
                    'created_at' => '2020-11-02 02:24:21',
                    'updated_at' => '2020-11-02 02:24:21',
                ),
                6 => 
                array (
                    'id' => 11,
                    'document_template_id' => 3,
                    'name' => 'footer',
                    'content' => '<table class="Table" style="border-collapse:collapse; width:550.0000pt; border:1.0000pt solid windowtext; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr>
<td colspan="4" style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:275.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="366">
<p><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">ИТОГО</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">1&#39;448&#39;000.00 &nbsp;&nbsp;руб.</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:25.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="33">
<p align="center" style="text-align:center">&nbsp;</p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:90.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="120">
<p align="right" style="text-align:right"><span style="font-size:12pt"><span style="font-family:NTHarmonica"><b><span style="font-size:9.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">241&#39;333.33 &nbsp;&nbsp;руб.</span></span></span></span></b></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; background:#7f7f7f; width:70.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="93">
<p align="right" style="text-align:right">&nbsp;</p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<p><span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">Список содержит </span></span></span></span>{{order_items_count}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">&nbsp;наименований на общую сумму </span></span></span></span>{{order_total_word}}<span style="font-size:12pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">. </span></span></span></span></p>

<p><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">2. Покупатель обязуется осуществить оплату за поставленный товар согласно графику:</span></span></span></span></span></p>

<table class="Table" style="border-collapse:collapse; border:1.0000pt solid windowtext; font-family:&quot;Times New Roman&quot;; font-size:10pt">
<tbody>
<tr>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="200">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Сроки и вид оплаты</span></span></span></b></span></span></span></p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:1.0000pt solid windowtext" valign="top" width="200">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><b><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">Сумма</span></span></span></b></span></span></span></p>
</td>
</tr>
<tr>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:1.0000pt solid windowtext; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="200">
<p align="center" style="text-align:center"><span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'">Расчет до&nbsp;</span></span></span></span></span>{{order_date}}</p>
</td>
<td style="border-bottom:1.0000pt solid windowtext; width:150.0000pt; padding:0.0000pt 5.4000pt 0.0000pt 5.4000pt ; border-left:none; border-right:1.0000pt solid windowtext; border-top:none" valign="top" width="200">
<p align="right" style="text-align:right">{{order.billing_total}}<span style="font-size:12pt"><span style="line-height:18.0000pt"><span style="font-family:NTHarmonica"><span style="font-size:10.0000pt"><span style="font-family:\'Times New Roman\'">&nbsp; руб.</span></span></span></span></span></p>
</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<h1 style="text-align:justify"><span style="font-size:11pt"><span style="font-family:&quot;Times New Roman&quot;"><span style="font-weight:bold"><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">За и от имени ПРОДАВЦА </span></span></span></b><b> </b><b><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'"><span style="font-weight:bold">За и от имени ПОКУПАТЕЛЯ</span></span></span></b></span></span></span></h1>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">___________________________</span></span> <span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">___________________________</span></span></span></span></span></p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">Кирющено Татьяна Николаевна</span></span> &nbsp;</span></span></span>{{user.name}}<span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">&nbsp;и должность</span></span></span>&nbsp;</span></span></span></p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">Директор</span></span> </span></span></span></p>

<p align="justify" style="text-align:justify">{{order_date}}<span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">&nbsp;г.</span></span></span> </span></span></span>{{order_date}}<span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="background:#ffff00"><span style="font-family:\'Times New Roman\'">&nbsp;г.</span></span></span><b>&nbsp;</b></span></span></span></p>

<p align="justify" style="text-align:justify">&nbsp;</p>

<p align="justify" style="text-align:justify"><span style="font-size:12pt"><span style="text-justify:inter-ideograph"><span style="font-family:NTHarmonica"><span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">М.П.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></span> <span style="font-size:12.0000pt"><span style="font-family:\'Times New Roman\'">М.П. </span></span></span></span></span></p>',
                    'created_at' => '2020-11-02 02:24:22',
                    'updated_at' => '2020-11-02 02:24:22',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
