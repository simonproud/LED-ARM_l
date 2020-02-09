<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
    </head>
    <style>
     	body { font-family: DejaVu Sans, sans-serif;
                font-size:10px;
                font-weight: 100;
             }
         th{
            text-align: left;
            vertical-align: top;
        }
        td {
            border-bottom: 1px solid #ddd; 
             text-align: left;
            vertical-align: top;
        }
    </style>
    <body>
        <div style="padding:20px">
            <b>{{ $cp->legal_company_name }}</b>
            <br/><br/>
            <b>Адрес: {{ $cp->post_address }}, тел. {{$cp->phone}}, факс: {{$cp->fax}}</b>
            <br/><br/>
             <table border="1" cellpadding="4" cellspacing="0" width="100%">
               <tr>
                <th colspan="1">ИНН {{ $cp->inn}}</th>
                <th colspan="1">КПП {{ $cp->kpp }}</th>
                <th rowspan="2" width="10%">Сч. №</th>
                <td colspan="1" rowspan="2">{{ $cp->сhecking_account}}</td>
               </tr>
               <tr>
                <th colspan="2">Получатель<br/> {{ $cp->legal_company_name }}</th>
               </tr>
               <tr align="center">
                <td colspan="2" rowspan="2">Банк получателя<br>{{ $cp->bank_name }}</td>
                <td width="10%">БИК</td><td>{{ $cp->bik }}</td>
               </tr>
               <tr>
                   <td width="10%">Сч. №</td><td>{{ $cp->correspondent_account }}</td>
               </tr>
              </table>
              <h1>Счёт № {{$cp->countnumber}} от {{$date}} г.</h1>
              Плательщик: {{$uc->legal_company_name}}.<br/>
              Грузополучатель: ------------.<br/><br/>

              <table border="0" style="border-top: 1px solid #333; border-right: 1px solid #333;" cellpadding="4" cellspacing="0" width="100%">
               <tr border="1"  style="border: 1px solid #333;">
                <th colspan="1" style="border: 1px solid #333;">№</th>
                <th colspan="1" style="border: 1px solid #333;">Наименование товара</th>
                <th colspan="1" style="border: 1px solid #333;">Единица измерения</th>
                <th colspan="1" style="border: 1px solid #333;">Количество</th>
                <th colspan="1" style="border: 1px solid #333;">Цена</th>
                <th colspan="1" style="border: 1px solid #333;">Сумма</th>
               </tr>
               <tr border="1">
                <th colspan="1" style="border: 1px solid #333;">1</th>
                <th colspan="1" style="border: 1px solid #333;">Оплата согласно дог № {{$cp->contract_number}} от {{$cp->contract_date}}</th>
                <th colspan="1" style="border: 1px solid #333;">шт</th>
                <th colspan="1" style="border: 1px solid #333;">1</th>
                <th colspan="1" style="border: 1px solid #333;">{{money_format ( '%.2n', $request['summ'] )}} ({{$cp->currency->code_literal_iso_4217}})</th>
                <th colspan="1" style="border: 1px solid #333;">{{money_format ( '%.2n', $request['summ'] )}} ({{$cp->currency->code_literal_iso_4217}})</th>
               </tr>
               <tr border="0" style="border-left: 0px;">
                <th colspan="5" rowspan="1" style="border:0px solid; text-align: right;">Итого:</th>
                 
                  
                <th colspan="1" style="border: 1px solid #333;">{{money_format ( '%.2n', $request['summ'] )}} ({{$cp->currency->code_literal_iso_4217}})</th>
               </tr>
               <tr border="0" style="border-left: 0px;"><th colspan="5" rowspan="1" style="border:0px solid; text-align: right;">Без налога (НДС):</th><th colspan="1" style="border: 1px solid #333;">{{money_format ( '%.2n', $request['summ'] )}} ({{$cp->currency->code_literal_iso_4217}})</th></tr>
               <tr border="0" style="border-left: 0px; border-bottom: 0px;"><th colspan="5" rowspan="1" style="border:0px solid; text-align: right;">Всего к оплате:</th><th colspan="1"  style="border: 1px solid #333;">{{money_format ( '%.2n', $request['summ'] )}} ({{$cp->currency->code_literal_iso_4217}})</th></tr>
              </table>
              Всего наименований: 1, на сумму {{money_format ( '%.2n', $request['summ'] )}} ({{$cp->currency->code_literal_iso_4217}})<br/>
              <h3><b>{{digit_text($request['summ'], $request['lang'], $request['curr'])}}</b></h3><br><br>
              Руководитель предприятия____________________ ({{$cp->third_name}} {{$cp->first_name}}.{{$cp->second_name}}.) <br/><br/><br/>
              Главный бухгалтер___________________________ (_________________)
        </div>
    </body>
</html> 
