<?php
include('config.php');
$combination = array_combine($currency, $rate);
$currencies_list = array();
$file = fopen("data.csv", "r");
while (!feof($file)) {
    $currency_l = fgetcsv($file);
    $currencies_list[] = array(
        'flag' => "assets/img/flags/" . $currency_l[0] . ".png",
        'country_fullname' => $currency_l[1],
        'currency_code' => $currency_l[2],
        'currency_name' => $currency_l[3],
        'country_name' => $currency_l[4],
    );
}
fclose($file);
$half = round(sizeof($currencies_list) / 2);
?>			
<html>
    <head>
        <title>CuCo - Currency Converter</title>
        <meta name="title" content="CuCo Currency Converting Tool">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Marwa El-Manawy <marwa@elmanawy.info>" />
        <meta name="Keywords" content="marwaelmanawy, Marwa El-Manawy, bitcoin, calculator, coco currency converter, conversion, converters, currency converter, Currency Exchange, dollar, exchange rates, live rates, money, transfer, usd, world currency">
        <meta name="description" content="coco is a script that allow you to convert over +158 currencies in the world faster, Your website visitors can convert currencies using latest exchange rates. It supports ads to target the users and earn profit through the website. It is flexible customization and easily integrate in any site working on different platforms">
        <meta property="og:locale" content="en_US"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="CuCo CURRENCY CONVERTER"/>
        <meta property="og:description" content="All actual world currencies live rates, reference information, currency calculator."/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content="CuCo CURRENCY CONVERTER"/>
        <meta property="og:image" content=""/>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="CuCo CURRENCY CONVERTER">
        <meta name="twitter:description" content="CuCo is a script that allow you to convert over +158 currencies in the world faster, Your website visitors can convert currencies using latest exchange rates. It supports ads to target the users and earn profit through the website, It is flexible customization and easily integrate in any site working on different platforms">
        <meta name="twitter:site" content="@xeadesta">
        <meta name="twitter:url" content="">
        <meta name="twitter:creator" content="@xeadesta"/>
        <meta name="twitter:domain" content="">
        <meta name="twitter:image" content="">
        <link rel="icon" type="image/ico" href="favicon.ico">

        <!--CSS Files-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="assets/css/fontawesome.min.css" rel="stylesheet">
        <link href='assets/css/style.css' rel='stylesheet' type='text/css'>
        <link href="assets/css/dark-mode.css" rel="stylesheet" type='text/css'>

        <!--JS Files-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script> 
        <script src="assets/js/bootstrap.min.js"></script> 
        <script src="assets/js/bootstrap-select.min.js"></script> 

    </head>
    <body>
        <div class="switch-mod">
            <label class="switch">
                <input type="checkbox" checked="" id="darkSwitch">
                <div class="slider round"></div> 
                <i class="fas"></i>
            </label> 

        </div>

        <div class="main-content">
            <section class="header">
                <div class="container">
                    <div class="converter">
                        <h1>CuCo Currency Converter</h1>
                        <h2>All actual world currencies live rates, reference information, currency calculator.</h2>
                        <div class="convert-box">
                            <form id="conversion_form">
                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <label class="label">From</label>
                                        <div class="select">
                                            <div class="input-wrap">
                                                <input type="number" class="form-control" name="amount" onkeyup="myFunction()" oninput="myFunction()" value="1">
                                            </div>
                                            <select name="from" id="from" onchange="myFunction()" data-show-subtext="true" class="selectpicker bs-select form-control" data-live-search="true" data-size="8">
                                                <option data-content="<img class='flag' src='assets/img/flags/AE.png'> <span class='currency_code'>AED</span> <span class='currency_name'>United Arab Emirates Dirham</span>" value="0">AED</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AF.png'> <span class='currency_code'>AFN</span> <span class='currency_name'>Afghan Afghani</span>"  value="1">AFN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AL.png'> <span class='currency_code'>ALL</span> <span class='currency_name'>Albanian Lek</span>" value="2">ALL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AM.png'> <span class='currency_code'>AMD</span> <span class='currency_name'>Armenian Dram</span>" value="3">AMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AN.png'> <span class='currency_code'>ANG</span> <span class='currency_name'>Netherlands Antillean Guilder</span>" value="4">ANG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AO.png'> <span class='currency_code'>AOA</span> <span class='currency_name'>Angolan Kwanza</span>"  value="5">AOA</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AR.png'> <span class='currency_code'>ARS</span> <span class='currency_name'>Argentine Peso</span>" value="6">ARS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AU.png'> <span class='currency_code'>AUD</span> <span class='currency_name'>Australian Dollar</span>" value="7">AUD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AW.png'> <span class='currency_code'>AWG</span> <span class='currency_name'>Aruban Florin</span>"  value="8">AWG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AZ.png'> <span class='currency_code'>AZN</span> <span class='currency_name'>Azerbaijanian Manat</span>" value="9">AZN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BA.png'> <span class='currency_code'>BAM</span> <span class='currency_name'>Convertible Mark</span>" value="10">BAM</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BB.png'> <span class='currency_code'>BBD</span> <span class='currency_name'>Barbados Dollar</span>" value="11">BBD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BD.png'> <span class='currency_code'>BDT</span> <span class='currency_name'>Bangladeshi Taka</span>" value="12">BDT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BG.png'> <span class='currency_code'>BGN</span> <span class='currency_name'>Bulgarian Lev</span>" value="13">BGN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BH.png'> <span class='currency_code'>BHD</span> <span class='currency_name'>Bahraini Dinar</span>" value="14">BHD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BI.png'> <span class='currency_code'>BIF</span> <span class='currency_name'>Burundi Franc</span>" value="15">BIF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BM.png'> <span class='currency_code'>BMD</span> <span class='currency_name'>Bermudian Dollar</span>" value="16">BMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BN.png'> <span class='currency_code'>BND</span> <span class='currency_name'>Brunei Dollar</span>" value="17">BND</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BO.png'> <span class='currency_code'>BOB</span> <span class='currency_name'>Boliviano</span>" value="18">BOB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BR.png'> <span class='currency_code'>BRL</span> <span class='currency_name'>Brazilian Real</span>" value="19">BRL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BS.png'> <span class='currency_code'>BSD</span> <span class='currency_name'>Bahamian Dollar</span>" value="20">BSD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BTC.png'> <span class='currency_code'>BTC</span> <span class='currency_name'>Bitcoin</span>" value="21">BTC</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BT.png'> <span class='currency_code'>BTN</span> <span class='currency_name'>Bhutanese Ngultrum</span>" value="22">BTN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BW.png'> <span class='currency_code'>BWP</span> <span class='currency_name'>Botswana Pula</span>" value="23">BWP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BY.png'> <span class='currency_code'>BYN</span> <span class='currency_name'>Belarussian Ruble</span>" value="24">BYN</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>BYR</span> <span class='currency_name'>Belarusian Ruble</span>" value="25">BYR</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/BZ.png'> <span class='currency_code'>BZD</span> <span class='currency_name'>Belize Dollar</span>" value="25">BZD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CA.png'> <span class='currency_code'>CAD</span> <span class='currency_name'>Canadian Dollar</span>" value="26">CAD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CD.png'> <span class='currency_code'>CDF</span> <span class='currenzcy_name'>Congolese Franc</span>" value="27">CDF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CH.png'> <span class='currency_code'>CHF</span> <span class='currency_name'>Swiss Franc</span>" value="28">CHF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>CLF</span> <span class='currency_name'>Chilean Unit of Account</span>" value="29">CLF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CL.png'> <span class='currency_code'>CLP</span> <span class='currency_name'>Chilean Peso</span>" value="30">CLP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CN.png'> <span class='currency_code'>CNY</span> <span class='currency_name'>Chinese Yuan</span>" value="32">CNY</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CO.png'> <span class='currency_code'>COP</span> <span class='currency_name'>Colombian Peso</span>" value="33">COP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CR.png'> <span class='currency_code'>CRC</span> <span class='currency_name'>Costa Rican Colon</span>" value="34">CRC</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>CUC</span> <span class='currency_name'>Cuban peso</span>" value="35">CUC</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CU.png'> <span class='currency_code'>CUP</span> <span class='currency_name'>Cuban Peso</span>" value="36">CUP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CV.png'> <span class='currency_code'>CVE</span> <span class='currency_name'>Cabo Verde Escudo</span>" value="37">CVE</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CZ.png'> <span class='currency_code'>CZK</span> <span class='currency_name'>Czech Koruna</span>" value="38">CZK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DJ.png'> <span class='currency_code'>DJF</span> <span class='currency_name'>Djibouti Franc</span>" value="39">DJF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DK.png'> <span class='currency_code'>DKK</span> <span class='currency_name'>Danish Krone</span>" value="40">DKK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DO.png'> <span class='currency_code'>DOP</span> <span class='currency_name'>Dominican Peso</span>" value="41">DOP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DZ.png'> <span class='currency_code'>DZD</span> <span class='currency_name'>Algerian Dinar</span>" value="42">DZD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/EG.png'> <span class='currency_code'>EGP</span> <span class='currency_name'>Egyptian Pound</span>" value="43">EGP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ER.png'> <span class='currency_code'>ERN</span> <span class='currency_name'>Eritrean Nakfa</span>" value="44">ERN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ET.png'> <span class='currency_code'>ETB</span> <span class='currency_name'>Ethiopian Birr</span>" value="45">ETB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/EU.png'> <span class='currency_code'>EUR</span> <span class='currency_name'>Euro</span>" value="46">EUR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/FJ.png'> <span class='currency_code'>FJD</span> <span class='currency_name'>Fiji Dollar</span>" value="47">FJD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/FK.png'> <span class='currency_code'>FKP</span> <span class='currency_name'>Falkland Islands Pound</span>" value="48">FKP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GB.png'> <span class='currency_code'>GBP</span> <span class='currency_name'>British Pound</span>" value="49">GBP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GE.png'> <span class='currency_code'>GEL</span> <span class='currency_name'>Georgian Lari</span>" value="50">GEL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GG.png'> <span class='currency_code'>GGP</span> <span class='currency_name'>Guernsey Pound</span>" value="51">GGP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GH.png'> <span class='currency_code'>GHS</span> <span class='currency_name'>Ghana Cedi</span>" value="52">GHS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GI.png'> <span class='currency_code'>GIP</span> <span class='currency_name'>Gibraltar Pound</span>" value="53">GIP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GM.png'> <span class='currency_code'>GMD</span> <span class='currency_name'>Gambian Dalasi</span>" value="54">GMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GN.png'> <span class='currency_code'>GNF</span> <span class='currency_name'>Guinea Franc</span>" value="55">GNF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GT.png'> <span class='currency_code'>GTQ</span> <span class='currency_name'>Guatemalan Quetzal</span>" value="56">GTQ</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GY.png'> <span class='currency_code'>GYD</span> <span class='currency_name'>Guyana Dollar</span>" value="57">GYD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HK.png'> <span class='currency_code'>HKD</span> <span class='currency_name'>Hong Kong Dollar</span>" value="58">HKD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HN.png'> <span class='currency_code'>HNL</span> <span class='currency_name'>Honduran Lempira</span>" value="59">HNL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HR.png'> <span class='currency_code'>HRK</span> <span class='currency_name'>Croatian Kuna</span>" value="60">HRK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HT.png'> <span class='currency_code'>HTG</span> <span class='currency_name'>Haitian Gourde</span>" value="61">HTG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HU.png'> <span class='currency_code'>HUF</span> <span class='currency_name'>Hungarian Forint</span>" value="62">HUF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ID.png'> <span class='currency_code'>IDR</span> <span class='currency_name'>Indonesian Rupiah</span>" value="63">IDR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IL.png'> <span class='currency_code'>ILS</span> <span class='currency_name'>Israeli Shekel</span>" value="64">ILS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>IMP</span> <span class='currency_name'>Isle of Man Pounds</span>" value="65">IMP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IN.png'> <span class='currency_code'>INR</span> <span class='currency_name'>Indian Rupee</span>" value="66">INR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IQ.png'> <span class='currency_code'>IQD</span> <span class='currency_name'>Iraqi Dinar</span>" value="67">IQD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IR.png'> <span class='currency_code'>IRR</span> <span class='currency_name'>Iranian Rial</span>" value="68">IRR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IS.png'> <span class='currency_code'>ISK</span> <span class='currency_name'>Iceland Krona</span>" value="69">ISK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JE.png'> <span class='currency_code'>JEP</span> <span class='currency_name'>Jersey Pound</span>" value="70">JEP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JM.png'> <span class='currency_code'>JMD</span> <span class='currency_name'>Jamaican Dollar</span>" value="71">JMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JO.png'> <span class='currency_code'>JOD</span> <span class='currency_name'>Jordanian Dinar</span>" value="72">JOD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JP.png'> <span class='currency_code'>JPY</span> <span class='currency_name'>Japanese Yen</span>" value="73">JPY</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KE.png'> <span class='currency_code'>KES</span> <span class='currency_name'>Kenyan Shilling</span>" value="74">KES</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KG.png'> <span class='currency_code'>KGS</span> <span class='currency_name'>Kyrgyzstani Som</span>" value="75">KGS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KH.png'> <span class='currency_code'>KHR</span> <span class='currency_name'>Cambodian Riel</span>" value="76">KHR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KM.png'> <span class='currency_code'>KMF</span> <span class='currency_name'>Comoro Franc</span>" value="77">KMF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KP.png'> <span class='currency_code'>KPW</span> <span class='currency_name'>North Korean Won</span>" value="78">KPW</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KR.png'> <span class='currency_code'>KRW</span> <span class='currency_name'>South Korean Won</span>" value="79">KRW</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KW.png'> <span class='currency_code'>KWD</span> <span class='currency_name'>Kuwaiti Dinar</span>" value="80">KWD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KY.png'> <span class='currency_code'>KYD</span> <span class='currency_name'>Cayman Islands Dollar</span>" value="81">KYD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KZ.png'> <span class='currency_code'>KZT</span> <span class='currency_name'>Kazakhstani Tenge</span>" value="82">KZT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LA.png'> <span class='currency_code'>LAK</span> <span class='currency_name'>Lao Kip</span>" value="83">LAK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LB.png'> <span class='currency_code'>LBP</span> <span class='currency_name'>Lebanese Pound</span>" value="84">LBP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LK.png'> <span class='currency_code'>LKR</span> <span class='currency_name'>Sri Lanka Rupee</span>"  value="85">LKR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LR.png'> <span class='currency_code'>LRD</span> <span class='currency_name'>Liberian Dollar</span>" value="86">LRD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LS.png'> <span class='currency_code'>LSL</span> <span class='currency_name'>Lithuanian litas</span>" value="87">LSL</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>LTL</span> <span class='currency_name'>Lesotho Loti</span>" value="88">LTL</option>-->
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>LVL</span> <span class='currency_name'>Latvian lats</span>" value="89">LVL</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/LY.png'> <span class='currency_code'>LYD</span> <span class='currency_name'>Libyan Dinar</span>" value="88">LYD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MA.png'> <span class='currency_code'>MAD</span> <span class='currency_name'>Moroccan Dirham</span>" value="89">MAD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MD.png'> <span class='currency_code'>MDL</span> <span class='currency_name'>Moldovan Leu</span>"  value="90">MDL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MG.png'> <span class='currency_code'>MGA</span> <span class='currency_name'>Malagasy Ariary</span>" value="91">MGA</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MK.png'> <span class='currency_code'>MKD</span> <span class='currency_name'>Macedonian Denar</span>" value="92">MKD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MM.png'> <span class='currency_code'>MMK</span> <span class='currency_name'>Myanmar Kyat</span>" value="93">MMK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MN.png'> <span class='currency_code'>MNT</span> <span class='currency_name'>Mongolian Tugrik</span>" value="94">MNT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MO.png'> <span class='currency_code'>MOP</span> <span class='currency_name'>Macanese Pataca</span>" value="95">MOP</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/MR.png'> <span class='currency_code'>MRO</span> <span class='currency_name'>Mauritanian Ouguiya</span>" value="96">MRO</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/MU.png'> <span class='currency_code'>MUR</span> <span class='currency_name'>Mauritius Rupee</span>" value="97">MUR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MV.png'> <span class='currency_code'>MVR</span> <span class='currency_name'>Maldivian Rufiyaa</span>" value="98">MVR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MW.png'> <span class='currency_code'>MWK</span> <span class='currency_name'>Malawian Kwacha</span>" value="99">MWK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MX.png'> <span class='currency_code'>MXN</span> <span class='currency_name'>Mexican Peso</span>" value="100">MXN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MY.png'> <span class='currency_code'>MYR</span> <span class='currency_name'>Malaysian Ringgit</span>" value="101">MYR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MZ.png'> <span class='currency_code'>MZN</span> <span class='currency_name'>Mozambique Metical</span>" value="102">MZN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NA.png'> <span class='currency_code'>NAD</span> <span class='currency_name'>Namibia Dollar</span>" value="103">NAD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NG.png'> <span class='currency_code'>NGN</span> <span class='currency_name'>Nigerian Naira</span>" value="104">NGN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NI.png'> <span class='currency_code'>NIO</span> <span class='currency_name'>Cordoba Oro</span>" value="105">NIO</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NO.png'> <span class='currency_code'>NOK</span> <span class='currency_name'>Norwegian Krone</span>" value="106">NOK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NP.png'> <span class='currency_code'>NPR</span> <span class='currency_name'>Nepalese Rupee</span>" value="107">NPR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NZ.png'> <span class='currency_code'>NZD</span> <span class='currency_name'>New Zealand Dollar</span>" value="108">NZD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/OM.png'> <span class='currency_code'>OMR</span> <span class='currency_name'>Rial Omani</span>" value="109">OMR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PA.png'> <span class='currency_code'>PAB</span> <span class='currency_name'>Panamanian Balboa</span>" value="110">PAB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PE.png'> <span class='currency_code'>PEN</span> <span class='currency_name'>Peruvian Sol</span>" value="111">PEN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PG.png'> <span class='currency_code'>PGK</span> <span class='currency_name'>Papua New Guinean Kina</span>" value="112">PGK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PH.png'> <span class='currency_code'>PHP</span> <span class='currency_name'>Philippine Peso</span>" value="113">PHP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PK.png'> <span class='currency_code'>PKR</span> <span class='currency_name'>Pakistani Rupee</span>" value="114">PKR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PL.png'> <span class='currency_code'>PLN</span> <span class='currency_name'>Polish Zloty</span>" value="115">PLN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PY.png'> <span class='currency_code'>PYG</span> <span class='currency_name'>Paraguayan Guarani</span>" value="116">PYG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/QA.png'> <span class='currency_code'>QAR</span> <span class='currency_name'>Qatari Rial</span>" value="117">QAR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RO.png'> <span class='currency_code'>RON</span> <span class='currency_name'>Romanian Leu</span>" value="118">RON</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RS.png'> <span class='currency_code'>RSD</span> <span class='currency_name'>Serbian Dinar</span>" value="119">RSD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RU.png'> <span class='currency_code'>RUB</span> <span class='currency_name'>Russian Ruble</span>" value="120">RUB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RW.png'> <span class='currency_code'>RWF</span> <span class='currency_name'>Rwanda Franc</span>" value="121">RWF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SA.png'> <span class='currency_code'>SAR</span> <span class='currency_name'>Saudi Riyal</span>" value="122">SAR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SB.png'> <span class='currency_code'>SBD</span> <span class='currency_name'>Solomon Islands Dollar</span>" value="123">SBD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SC.png'> <span class='currency_code'>SCR</span> <span class='currency_name'>Seychelles Rupee</span>" value="124">SCR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SD.png'> <span class='currency_code'>SDG</span> <span class='currency_name'>Sudanese Pound</span>" value="125">SDG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SE.png'> <span class='currency_code'>SEK</span> <span class='currency_name'>Swedish Krona</span>" value="126">SEK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SG.png'> <span class='currency_code'>SGD</span> <span class='currency_name'>Singapore Dollar</span>" value="127">SGD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SH.png'> <span class='currency_code'>SHP</span> <span class='currency_name'>Saint Helena Pound</span>" value="128">SHP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>SLE</span> <span class='currency_name'>Sierra Leonean leone</span>" value="129">SLE</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SL.png'> <span class='currency_code'>SLL</span> <span class='currency_name'>Sierra Leonean Leone</span>" value="130">SLL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SO.png'> <span class='currency_code'>SOS</span> <span class='currency_name'>Somali Shilling</span>" value="131">SOS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SR.png'> <span class='currency_code'>SRD</span> <span class='currency_name'>Surinam Dollar</span>" value="132">SRD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ST.png'> <span class='currency_code'>STD</span> <span class='currency_name'>Sao Tomean Dobra</span>" value="134">STD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SY.png'> <span class='currency_code'>SYP</span> <span class='currency_name'>Syrian Pound</span>" value="137">SYP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SZ.png'> <span class='currency_code'>SZL</span> <span class='currency_name'>Swazi Lilangeni</span>" value="138">SZL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TH.png'> <span class='currency_code'>THB</span> <span class='currency_name'>Thai Baht</span>" value="139">THB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TJ.png'> <span class='currency_code'>TJS</span> <span class='currency_name'>Tajikistani Somoni</span>" value="140">TJS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TM.png'> <span class='currency_code'>TMT</span> <span class='currency_name'>Turkmenistan New Manat</span>" value="141">TMT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TN.png'> <span class='currency_code'>TND</span> <span class='currency_name'>Tunisian Dinar</span>" value="142">TND</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TO.png'> <span class='currency_code'>TOP</span> <span class='currency_name'>Tongan Pa'anga</span>" value="143">TOP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TR.png'> <span class='currency_code'>TRY</span> <span class='currency_name'>Turkish Lira</span>" value="144">TRY</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TT.png'> <span class='currency_code'>TTD</span> <span class='currency_name'>Trinidad and Tobago Dollar</span>" value="145">TTD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TW.png'> <span class='currency_code'>TWD</span> <span class='currency_name'>New Taiwan Dollar</span>" value="146">TWD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TZ.png'> <span class='currency_code'>TZS</span> <span class='currency_name'>Tanzanian Shilling</span>" value="147">TZS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UA.png'> <span class='currency_code'>UAH</span> <span class='currency_name'>Ukrainian Hryvnia</span>" value="148">UAH</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UG.png'> <span class='currency_code'>UGX</span> <span class='currency_name'>Uganda Shilling</span>" value="149">UGX</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/US.png'> <span class='currency_code'>USD</span> <span class='currency_name'>United States Dollar</span>" value="150" selected>USD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UY.png'> <span class='currency_code'>UYU</span> <span class='currency_name'>Peso Uruguayo</span>" value="151">UYU</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UZ.png'> <span class='currency_code'>UZS</span> <span class='currency_name'>Uzbekistan Sum</span>" value="152">UZS</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/VE.png'> <span class='currency_code'>VEF</span> <span class='currency_name'>Venezuelan Bolivar</span>" value="152">VEF</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>VES</span> <span class='currency_name'>VES</span>" value="153">VES</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/VN.png'> <span class='currency_code'>VND</span> <span class='currency_name'>Vietnamese Dong</span>" value="154">VND</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/VU.png'> <span class='currency_code'>VUV</span> <span class='currency_name'>Vanuatu Vatu</span>" value="155">VUV</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/WS.png'> <span class='currency_code'>WST</span> <span class='currency_name'>Samoan Tala</span>" value="156">WST</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CF.png'> <span class='currency_code'>XAF</span> <span class='currency_name'>CFA Franc BEAC</span>" value="157">XAF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XAG</span> <span class='currency_name'>Silver Ounces</span>" value="158">XAG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XAU</span> <span class='currency_name'>Gold Ounces</span>" value="159">XAU</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XCD</span> <span class='currency_name'>East Caribbean Dollar</span>" value="160">XCD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XDR</span> <span class='currency_name'>Special drawing rights</span>" value="162">XDR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XOF</span> <span class='currency_name'>CFA Franc BCEAO</span>" value="163">XOF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XPF</span> <span class='currency_name'>CFP Franc</span>" value="165">XPF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/YE.png'> <span class='currency_code'>YER</span> <span class='currency_name'>Yemeni Rial</span>" value="167">YER</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ZA.png'> <span class='currency_code'>ZAR</span> <span class='currency_name'>South African Rand</span>" value="168">ZAR</option>
<!--                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>ZMK</span> <span class='currency_name'>Zambian Kwacha</span>" value="167">ZMK</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/ZM.png'> <span class='currency_code'>ZMW</span> <span class='currency_name'>Zambian Kwacha</span>" value="169">ZMW</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ZW.png'> <span class='currency_code'>ZWL</span> <span class='currency_name'>Zimbabwean Dollar</span>" value="171">ZWL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-12 col-xs-12">
                                        <label class="label"><br /></label>
                                        <div class="select text-center">
                                            <button type="button" class="exchange-btn"><i class="fas fa-exchange-alt"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <label class="label">To</label>
                                        <div class="select">
                                            <div class="input-wrap">
                                                <p id="output" class="form-control"></p>
                                                <!--<input type="text" class="form-control" name="output" id="output" value="" pattern="/^-?\d*[.,]?\d{0,2}$/">-->
                                            </div>
                                            <select name="to" id="to" onchange="myFunction()" data-show-subtext="true" class="selectpicker bs-select form-control" data-live-search="true" data-size="8">
                                                <option data-content="<img class='flag' src='assets/img/flags/AE.png'> <span class='currency_code'>AED</span> <span class='currency_name'>United Arab Emirates Dirham</span>" value="0">AED</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AF.png'> <span class='currency_code'>AFN</span> <span class='currency_name'>Afghan Afghani</span>"  value="1">AFN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AL.png'> <span class='currency_code'>ALL</span> <span class='currency_name'>Albanian Lek</span>" value="2">ALL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AM.png'> <span class='currency_code'>AMD</span> <span class='currency_name'>Armenian Dram</span>" value="3">AMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AN.png'> <span class='currency_code'>ANG</span> <span class='currency_name'>Netherlands Antillean Guilder</span>" value="4">ANG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AO.png'> <span class='currency_code'>AOA</span> <span class='currency_name'>Angolan Kwanza</span>"  value="5">AOA</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AR.png'> <span class='currency_code'>ARS</span> <span class='currency_name'>Argentine Peso</span>" value="6">ARS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AU.png'> <span class='currency_code'>AUD</span> <span class='currency_name'>Australian Dollar</span>" value="7">AUD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AW.png'> <span class='currency_code'>AWG</span> <span class='currency_name'>Aruban Florin</span>"  value="8">AWG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/AZ.png'> <span class='currency_code'>AZN</span> <span class='currency_name'>Azerbaijanian Manat</span>" value="9">AZN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BA.png'> <span class='currency_code'>BAM</span> <span class='currency_name'>Convertible Mark</span>" value="10">BAM</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BB.png'> <span class='currency_code'>BBD</span> <span class='currency_name'>Barbados Dollar</span>" value="11">BBD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BD.png'> <span class='currency_code'>BDT</span> <span class='currency_name'>Bangladeshi Taka</span>" value="12">BDT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BG.png'> <span class='currency_code'>BGN</span> <span class='currency_name'>Bulgarian Lev</span>" value="13">BGN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BH.png'> <span class='currency_code'>BHD</span> <span class='currency_name'>Bahraini Dinar</span>" value="14">BHD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BI.png'> <span class='currency_code'>BIF</span> <span class='currency_name'>Burundi Franc</span>" value="15">BIF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BM.png'> <span class='currency_code'>BMD</span> <span class='currency_name'>Bermudian Dollar</span>" value="16">BMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BN.png'> <span class='currency_code'>BND</span> <span class='currency_name'>Brunei Dollar</span>" value="17">BND</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BO.png'> <span class='currency_code'>BOB</span> <span class='currency_name'>Boliviano</span>" value="18">BOB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BR.png'> <span class='currency_code'>BRL</span> <span class='currency_name'>Brazilian Real</span>" value="19">BRL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BS.png'> <span class='currency_code'>BSD</span> <span class='currency_name'>Bahamian Dollar</span>" value="20">BSD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BTC.png'> <span class='currency_code'>BTC</span> <span class='currency_name'>Bitcoin</span>" value="21">BTC</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BT.png'> <span class='currency_code'>BTN</span> <span class='currency_name'>Bhutanese Ngultrum</span>" value="22">BTN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BW.png'> <span class='currency_code'>BWP</span> <span class='currency_name'>Botswana Pula</span>" value="23">BWP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/BY.png'> <span class='currency_code'>BYN</span> <span class='currency_name'>Belarussian Ruble</span>" value="24">BYN</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>BYR</span> <span class='currency_name'>Belarusian Ruble</span>" value="25">BYR</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/BZ.png'> <span class='currency_code'>BZD</span> <span class='currency_name'>Belize Dollar</span>" value="25">BZD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CA.png'> <span class='currency_code'>CAD</span> <span class='currency_name'>Canadian Dollar</span>" value="26">CAD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CD.png'> <span class='currency_code'>CDF</span> <span class='currenzcy_name'>Congolese Franc</span>" value="27">CDF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CH.png'> <span class='currency_code'>CHF</span> <span class='currency_name'>Swiss Franc</span>" value="28">CHF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>CLF</span> <span class='currency_name'>Chilean Unit of Account</span>" value="29">CLF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CL.png'> <span class='currency_code'>CLP</span> <span class='currency_name'>Chilean Peso</span>" value="30">CLP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CN.png'> <span class='currency_code'>CNY</span> <span class='currency_name'>Chinese Yuan</span>" value="32">CNY</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CO.png'> <span class='currency_code'>COP</span> <span class='currency_name'>Colombian Peso</span>" value="33">COP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CR.png'> <span class='currency_code'>CRC</span> <span class='currency_name'>Costa Rican Colon</span>" value="34">CRC</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>CUC</span> <span class='currency_name'>Cuban peso</span>" value="35">CUC</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CU.png'> <span class='currency_code'>CUP</span> <span class='currency_name'>Cuban Peso</span>" value="36">CUP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CV.png'> <span class='currency_code'>CVE</span> <span class='currency_name'>Cabo Verde Escudo</span>" value="37">CVE</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CZ.png'> <span class='currency_code'>CZK</span> <span class='currency_name'>Czech Koruna</span>" value="38">CZK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DJ.png'> <span class='currency_code'>DJF</span> <span class='currency_name'>Djibouti Franc</span>" value="39">DJF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DK.png'> <span class='currency_code'>DKK</span> <span class='currency_name'>Danish Krone</span>" value="40">DKK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DO.png'> <span class='currency_code'>DOP</span> <span class='currency_name'>Dominican Peso</span>" value="41">DOP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/DZ.png'> <span class='currency_code'>DZD</span> <span class='currency_name'>Algerian Dinar</span>" value="42">DZD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/EG.png'> <span class='currency_code'>EGP</span> <span class='currency_name'>Egyptian Pound</span>" value="43">EGP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ER.png'> <span class='currency_code'>ERN</span> <span class='currency_name'>Eritrean Nakfa</span>" value="44">ERN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ET.png'> <span class='currency_code'>ETB</span> <span class='currency_name'>Ethiopian Birr</span>" value="45">ETB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/EU.png'> <span class='currency_code'>EUR</span> <span class='currency_name'>Euro</span>" value="46" selected>EUR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/FJ.png'> <span class='currency_code'>FJD</span> <span class='currency_name'>Fiji Dollar</span>" value="47">FJD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/FK.png'> <span class='currency_code'>FKP</span> <span class='currency_name'>Falkland Islands Pound</span>" value="48">FKP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GB.png'> <span class='currency_code'>GBP</span> <span class='currency_name'>British Pound</span>" value="49">GBP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GE.png'> <span class='currency_code'>GEL</span> <span class='currency_name'>Georgian Lari</span>" value="50">GEL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GG.png'> <span class='currency_code'>GGP</span> <span class='currency_name'>Guernsey Pound</span>" value="51">GGP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GH.png'> <span class='currency_code'>GHS</span> <span class='currency_name'>Ghana Cedi</span>" value="52">GHS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GI.png'> <span class='currency_code'>GIP</span> <span class='currency_name'>Gibraltar Pound</span>" value="53">GIP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GM.png'> <span class='currency_code'>GMD</span> <span class='currency_name'>Gambian Dalasi</span>" value="54">GMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GN.png'> <span class='currency_code'>GNF</span> <span class='currency_name'>Guinea Franc</span>" value="55">GNF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GT.png'> <span class='currency_code'>GTQ</span> <span class='currency_name'>Guatemalan Quetzal</span>" value="56">GTQ</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/GY.png'> <span class='currency_code'>GYD</span> <span class='currency_name'>Guyana Dollar</span>" value="57">GYD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HK.png'> <span class='currency_code'>HKD</span> <span class='currency_name'>Hong Kong Dollar</span>" value="58">HKD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HN.png'> <span class='currency_code'>HNL</span> <span class='currency_name'>Honduran Lempira</span>" value="59">HNL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HR.png'> <span class='currency_code'>HRK</span> <span class='currency_name'>Croatian Kuna</span>" value="60">HRK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HT.png'> <span class='currency_code'>HTG</span> <span class='currency_name'>Haitian Gourde</span>" value="61">HTG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/HU.png'> <span class='currency_code'>HUF</span> <span class='currency_name'>Hungarian Forint</span>" value="62">HUF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ID.png'> <span class='currency_code'>IDR</span> <span class='currency_name'>Indonesian Rupiah</span>" value="63">IDR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IL.png'> <span class='currency_code'>ILS</span> <span class='currency_name'>Israeli Shekel</span>" value="64">ILS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>IMP</span> <span class='currency_name'>Isle of Man Pounds</span>" value="65">IMP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IN.png'> <span class='currency_code'>INR</span> <span class='currency_name'>Indian Rupee</span>" value="66">INR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IQ.png'> <span class='currency_code'>IQD</span> <span class='currency_name'>Iraqi Dinar</span>" value="67">IQD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IR.png'> <span class='currency_code'>IRR</span> <span class='currency_name'>Iranian Rial</span>" value="68">IRR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/IS.png'> <span class='currency_code'>ISK</span> <span class='currency_name'>Iceland Krona</span>" value="69">ISK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JE.png'> <span class='currency_code'>JEP</span> <span class='currency_name'>Jersey Pound</span>" value="70">JEP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JM.png'> <span class='currency_code'>JMD</span> <span class='currency_name'>Jamaican Dollar</span>" value="71">JMD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JO.png'> <span class='currency_code'>JOD</span> <span class='currency_name'>Jordanian Dinar</span>" value="72">JOD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/JP.png'> <span class='currency_code'>JPY</span> <span class='currency_name'>Japanese Yen</span>" value="73">JPY</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KE.png'> <span class='currency_code'>KES</span> <span class='currency_name'>Kenyan Shilling</span>" value="74">KES</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KG.png'> <span class='currency_code'>KGS</span> <span class='currency_name'>Kyrgyzstani Som</span>" value="75">KGS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KH.png'> <span class='currency_code'>KHR</span> <span class='currency_name'>Cambodian Riel</span>" value="76">KHR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KM.png'> <span class='currency_code'>KMF</span> <span class='currency_name'>Comoro Franc</span>" value="77">KMF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KP.png'> <span class='currency_code'>KPW</span> <span class='currency_name'>North Korean Won</span>" value="78">KPW</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KR.png'> <span class='currency_code'>KRW</span> <span class='currency_name'>South Korean Won</span>" value="79">KRW</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KW.png'> <span class='currency_code'>KWD</span> <span class='currency_name'>Kuwaiti Dinar</span>" value="80">KWD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KY.png'> <span class='currency_code'>KYD</span> <span class='currency_name'>Cayman Islands Dollar</span>" value="81">KYD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/KZ.png'> <span class='currency_code'>KZT</span> <span class='currency_name'>Kazakhstani Tenge</span>" value="82">KZT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LA.png'> <span class='currency_code'>LAK</span> <span class='currency_name'>Lao Kip</span>" value="83">LAK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LB.png'> <span class='currency_code'>LBP</span> <span class='currency_name'>Lebanese Pound</span>" value="84">LBP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LK.png'> <span class='currency_code'>LKR</span> <span class='currency_name'>Sri Lanka Rupee</span>"  value="85">LKR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LR.png'> <span class='currency_code'>LRD</span> <span class='currency_name'>Liberian Dollar</span>" value="86">LRD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/LS.png'> <span class='currency_code'>LSL</span> <span class='currency_name'>Lithuanian litas</span>" value="87">LSL</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>LTL</span> <span class='currency_name'>Lesotho Loti</span>" value="88">LTL</option>-->
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>LVL</span> <span class='currency_name'>Latvian lats</span>" value="89">LVL</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/LY.png'> <span class='currency_code'>LYD</span> <span class='currency_name'>Libyan Dinar</span>" value="88">LYD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MA.png'> <span class='currency_code'>MAD</span> <span class='currency_name'>Moroccan Dirham</span>" value="89">MAD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MD.png'> <span class='currency_code'>MDL</span> <span class='currency_name'>Moldovan Leu</span>"  value="90">MDL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MG.png'> <span class='currency_code'>MGA</span> <span class='currency_name'>Malagasy Ariary</span>" value="91">MGA</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MK.png'> <span class='currency_code'>MKD</span> <span class='currency_name'>Macedonian Denar</span>" value="92">MKD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MM.png'> <span class='currency_code'>MMK</span> <span class='currency_name'>Myanmar Kyat</span>" value="93">MMK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MN.png'> <span class='currency_code'>MNT</span> <span class='currency_name'>Mongolian Tugrik</span>" value="94">MNT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MO.png'> <span class='currency_code'>MOP</span> <span class='currency_name'>Macanese Pataca</span>" value="95">MOP</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/MR.png'> <span class='currency_code'>MRO</span> <span class='currency_name'>Mauritanian Ouguiya</span>" value="96">MRO</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/MU.png'> <span class='currency_code'>MUR</span> <span class='currency_name'>Mauritius Rupee</span>" value="97">MUR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MV.png'> <span class='currency_code'>MVR</span> <span class='currency_name'>Maldivian Rufiyaa</span>" value="98">MVR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MW.png'> <span class='currency_code'>MWK</span> <span class='currency_name'>Malawian Kwacha</span>" value="99">MWK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MX.png'> <span class='currency_code'>MXN</span> <span class='currency_name'>Mexican Peso</span>" value="100">MXN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MY.png'> <span class='currency_code'>MYR</span> <span class='currency_name'>Malaysian Ringgit</span>" value="101">MYR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/MZ.png'> <span class='currency_code'>MZN</span> <span class='currency_name'>Mozambique Metical</span>" value="102">MZN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NA.png'> <span class='currency_code'>NAD</span> <span class='currency_name'>Namibia Dollar</span>" value="103">NAD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NG.png'> <span class='currency_code'>NGN</span> <span class='currency_name'>Nigerian Naira</span>" value="104">NGN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NI.png'> <span class='currency_code'>NIO</span> <span class='currency_name'>Cordoba Oro</span>" value="105">NIO</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NO.png'> <span class='currency_code'>NOK</span> <span class='currency_name'>Norwegian Krone</span>" value="106">NOK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NP.png'> <span class='currency_code'>NPR</span> <span class='currency_name'>Nepalese Rupee</span>" value="107">NPR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/NZ.png'> <span class='currency_code'>NZD</span> <span class='currency_name'>New Zealand Dollar</span>" value="108">NZD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/OM.png'> <span class='currency_code'>OMR</span> <span class='currency_name'>Rial Omani</span>" value="109">OMR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PA.png'> <span class='currency_code'>PAB</span> <span class='currency_name'>Panamanian Balboa</span>" value="110">PAB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PE.png'> <span class='currency_code'>PEN</span> <span class='currency_name'>Peruvian Sol</span>" value="111">PEN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PG.png'> <span class='currency_code'>PGK</span> <span class='currency_name'>Papua New Guinean Kina</span>" value="112">PGK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PH.png'> <span class='currency_code'>PHP</span> <span class='currency_name'>Philippine Peso</span>" value="113">PHP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PK.png'> <span class='currency_code'>PKR</span> <span class='currency_name'>Pakistani Rupee</span>" value="114">PKR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PL.png'> <span class='currency_code'>PLN</span> <span class='currency_name'>Polish Zloty</span>" value="115">PLN</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/PY.png'> <span class='currency_code'>PYG</span> <span class='currency_name'>Paraguayan Guarani</span>" value="116">PYG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/QA.png'> <span class='currency_code'>QAR</span> <span class='currency_name'>Qatari Rial</span>" value="117">QAR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RO.png'> <span class='currency_code'>RON</span> <span class='currency_name'>Romanian Leu</span>" value="118">RON</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RS.png'> <span class='currency_code'>RSD</span> <span class='currency_name'>Serbian Dinar</span>" value="119">RSD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RU.png'> <span class='currency_code'>RUB</span> <span class='currency_name'>Russian Ruble</span>" value="120">RUB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/RW.png'> <span class='currency_code'>RWF</span> <span class='currency_name'>Rwanda Franc</span>" value="121">RWF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SA.png'> <span class='currency_code'>SAR</span> <span class='currency_name'>Saudi Riyal</span>" value="122">SAR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SB.png'> <span class='currency_code'>SBD</span> <span class='currency_name'>Solomon Islands Dollar</span>" value="123">SBD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SC.png'> <span class='currency_code'>SCR</span> <span class='currency_name'>Seychelles Rupee</span>" value="124">SCR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SD.png'> <span class='currency_code'>SDG</span> <span class='currency_name'>Sudanese Pound</span>" value="125">SDG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SE.png'> <span class='currency_code'>SEK</span> <span class='currency_name'>Swedish Krona</span>" value="126">SEK</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SG.png'> <span class='currency_code'>SGD</span> <span class='currency_name'>Singapore Dollar</span>" value="127">SGD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SH.png'> <span class='currency_code'>SHP</span> <span class='currency_name'>Saint Helena Pound</span>" value="128">SHP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>SLE</span> <span class='currency_name'>Sierra Leonean leone</span>" value="129">SLE</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SL.png'> <span class='currency_code'>SLL</span> <span class='currency_name'>Sierra Leonean Leone</span>" value="130">SLL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SO.png'> <span class='currency_code'>SOS</span> <span class='currency_name'>Somali Shilling</span>" value="131">SOS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SR.png'> <span class='currency_code'>SRD</span> <span class='currency_name'>Surinam Dollar</span>" value="132">SRD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ST.png'> <span class='currency_code'>STD</span> <span class='currency_name'>Sao Tomean Dobra</span>" value="134">STD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SY.png'> <span class='currency_code'>SYP</span> <span class='currency_name'>Syrian Pound</span>" value="137">SYP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/SZ.png'> <span class='currency_code'>SZL</span> <span class='currency_name'>Swazi Lilangeni</span>" value="138">SZL</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TH.png'> <span class='currency_code'>THB</span> <span class='currency_name'>Thai Baht</span>" value="139">THB</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TJ.png'> <span class='currency_code'>TJS</span> <span class='currency_name'>Tajikistani Somoni</span>" value="140">TJS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TM.png'> <span class='currency_code'>TMT</span> <span class='currency_name'>Turkmenistan New Manat</span>" value="141">TMT</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TN.png'> <span class='currency_code'>TND</span> <span class='currency_name'>Tunisian Dinar</span>" value="142">TND</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TO.png'> <span class='currency_code'>TOP</span> <span class='currency_name'>Tongan Pa'anga</span>" value="143">TOP</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TR.png'> <span class='currency_code'>TRY</span> <span class='currency_name'>Turkish Lira</span>" value="144">TRY</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TT.png'> <span class='currency_code'>TTD</span> <span class='currency_name'>Trinidad and Tobago Dollar</span>" value="145">TTD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TW.png'> <span class='currency_code'>TWD</span> <span class='currency_name'>New Taiwan Dollar</span>" value="146">TWD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/TZ.png'> <span class='currency_code'>TZS</span> <span class='currency_name'>Tanzanian Shilling</span>" value="147">TZS</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UA.png'> <span class='currency_code'>UAH</span> <span class='currency_name'>Ukrainian Hryvnia</span>" value="148">UAH</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UG.png'> <span class='currency_code'>UGX</span> <span class='currency_name'>Uganda Shilling</span>" value="149">UGX</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/US.png'> <span class='currency_code'>USD</span> <span class='currency_name'>United States Dollar</span>" value="150">USD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UY.png'> <span class='currency_code'>UYU</span> <span class='currency_name'>Peso Uruguayo</span>" value="151">UYU</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/UZ.png'> <span class='currency_code'>UZS</span> <span class='currency_name'>Uzbekistan Sum</span>" value="152">UZS</option>
                                                <!--<option data-content="<img class='flag' src='assets/img/flags/VE.png'> <span class='currency_code'>VEF</span> <span class='currency_name'>Venezuelan Bolivar</span>" value="152">VEF</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>VES</span> <span class='currency_name'>VES</span>" value="153">VES</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/VN.png'> <span class='currency_code'>VND</span> <span class='currency_name'>Vietnamese Dong</span>" value="154">VND</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/VU.png'> <span class='currency_code'>VUV</span> <span class='currency_name'>Vanuatu Vatu</span>" value="155">VUV</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/WS.png'> <span class='currency_code'>WST</span> <span class='currency_name'>Samoan Tala</span>" value="156">WST</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/CF.png'> <span class='currency_code'>XAF</span> <span class='currency_name'>CFA Franc BEAC</span>" value="157">XAF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XAG</span> <span class='currency_name'>Silver Ounces</span>" value="158">XAG</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XAU</span> <span class='currency_name'>Gold Ounces</span>" value="159">XAU</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XCD</span> <span class='currency_name'>East Caribbean Dollar</span>" value="160">XCD</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XDR</span> <span class='currency_name'>Special drawing rights</span>" value="162">XDR</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XOF</span> <span class='currency_name'>CFA Franc BCEAO</span>" value="163">XOF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>XPF</span> <span class='currency_name'>CFP Franc</span>" value="165">XPF</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/YE.png'> <span class='currency_code'>YER</span> <span class='currency_name'>Yemeni Rial</span>" value="167">YER</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ZA.png'> <span class='currency_code'>ZAR</span> <span class='currency_name'>South African Rand</span>" value="168">ZAR</option>
<!--                                                <option data-content="<img class='flag' src='assets/img/flags/_unknown.png'> <span class='currency_code'>ZMK</span> <span class='currency_name'>Zambian Kwacha</span>" value="167">ZMK</option>-->
                                                <option data-content="<img class='flag' src='assets/img/flags/ZM.png'> <span class='currency_code'>ZMW</span> <span class='currency_name'>Zambian Kwacha</span>" value="169">ZMW</option>
                                                <option data-content="<img class='flag' src='assets/img/flags/ZW.png'> <span class='currency_code'>ZWL</span> <span class='currency_name'>Zimbabwean Dollar</span>" value="171">ZWL</option>
                                            </select>
                                        </div>
                                    </div>	
                                </div>
                            </form>
                            <div id="reverse"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="list-currencies">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="section-ads" class="text-center">
                            <!-- <a href="https://elmanawy.info" target="_blank">
                                <img src="assets/img/ads.png"> -->
                            </a>
                        </div>
                    </div>
                </div>			
                <h2 class="text-center">World currencies</h2>			
                <div class="row">		
                    <div class="col-md-6">
                        <div class="section-currencies-table">
                            <div class="table-responsive">
                                <table class="table table-striped custab table-hover">
                                    <thead>
                                        <tr>
                                            <th class="caption-col">Flag</th>
                                            <th class="caption-col">Code</th>
                                            <th class="caption-col">Currency name</th>
                                            <th class="caption-col">Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        for ($i = 0; $i < ($half); $i++) {
                                            ?>
                                            <tr>
                                                <td class="flag"><img src="<?php echo $currencies_list[$i]['flag']; ?>" width="24"  alt="National flag of <?php echo $currencies_list[$i]['country_fullname']; ?>"></td>
                                                <td><?php echo $currencies_list[$i]['currency_code']; ?></td>
                                                <td><?php echo $currencies_list[$i]['currency_name']; ?></td>
                                                <td><?php echo $currencies_list[$i]['country_name']; ?></td>										
                                            </tr>
                                            <?php
                                        }
                                        ?>								
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-currencies-table">
                            <div class="table-responsive">
                                <table class="table table-striped custab table-hover">
                                    <thead>
                                        <tr>
                                            <th class="caption-col">Flag</th>
                                            <th class="caption-col">Code</th>
                                            <th class="caption-col">Currency name</th>
                                            <th class="caption-col">Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        for ($i = $half; $i < sizeof($currencies_list); $i++) {
                                            ?>
                                            <tr>
                                                <td class="flag"><img src="<?php echo $currencies_list[$i]['flag']; ?>" width="24"  alt="National flag of <?php echo $currencies_list[$i]['country_fullname']; ?>"></td>
                                                <td><?php echo $currencies_list[$i]['currency_code']; ?></td>
                                                <td><?php echo $currencies_list[$i]['currency_name']; ?></td>
                                                <td><?php echo $currencies_list[$i]['country_name']; ?></td>										
                                            </tr>
                                            <?php
                                        }
                                        ?>	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="section-ads" class="text-center">
                            <!-- <a href="https://elmanawy.info" target="_blank">
                                <img src="assets/img/ads.png">
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>	
        </section>		
        <footer>
            <div class="container">	
                <div class="footer text-center">
                    <p class="copyright ">
                        Copyright &copy <?php echo date('Y'); ?> CuCo - Currency Converter <br>
                        Created With <i class="fa fa-heart"></i>
                    </p>
                    <ul class="footer-social">
                        <li><a href="https://www.instagram.com/xeadesta" target="_blank"> <i class="fab fa-instagram"></i> </a> </li>
                        <li><a href="https://www.linkedin.com/in/jonathan-natannael-zefanya-212b9b25a/" target="_blank"> <i class="fab fa-linkedin"></i> </a> </li>
                    </ul>
                </div>

            </div>
        </footer>
        <script type="text/javascript">
            function myFunction() {
                var amount = $('input[name=amount]').val();
                var from = $('select[name=from]').val();
                var to = $('select[name=to]').val();
                var array =<?php print_r(json_encode($combination)); ?>;
                var currency =<?php print_r(json_encode($currency)); ?>;
                var from_currency = currency[from];
                var to_currency = currency[to];
                var result = array[to_currency] / array[from_currency];
                var output = result * amount;
                $('#output').html(parseFloat(output).toFixed(3));
            }
            $(document).ready(function () {
                $('.exchange-btn,select[name=from],select[name=to],input[name=amount],input[name=output]').on('change', function (event) {
                    myFunction(event.currentTarget.id);
                });

                $(".exchange-btn").click(function (event) {
                    var from = $('select[name=from]').val();
                    var to = $('select[name=to]').val();
                    $('select[name=to]').val(from);
                    $('select[name=from]').val(to);
                    $('.selectpicker').selectpicker('refresh');
                    setTimeout(function () {
                        myFunction(event.currentTarget.id);
                    }, 100);
                });
                myFunction();
            });
            $('#from').selectpicker();
            $('#to').selectpicker();
        </script>
        <script src="assets/js/dark-mode-switch.min.js"></script> 
    </body>
</html>