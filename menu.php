<?php
ini_set('display_errors',1); 
error_reporting(E_ERROR );

include ("settings.php");
include ("helper.php");
include ("base.php");
include ("restHttpCaller.php");
include ("BinNumberInquiryRequest.php");
include ("BankCardInquiryRequest.php");
include ("ApiPaymentRequest.php");
include ("BankCardCreateRequest.php");
include ("BankCardDeleteRequest.php");
include ("PaymentInquiryRequest.php");

?>

<html>
    <head>
          <title>iPara Developer Portal</title>
        <link href="../Content/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../Content/Site.css" rel="stylesheet" type="text/css"/>
        
    </head>

    <body>
     
          <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">

                <img src="../Content/iPara_disi-01.png" width="100" height="100" />
                <ul class="nav navbar-nav">
                   <li><a href="index.php">3d Ödeme</a></li>
                   <li><a href="ApiPayment.php">(Non-3d) Ödeme</a></li>
                   <li><a href="PaymentInquiry.php">Ödeme Sorgulama</a></li>
                   <li><a href="binInquiry.php">Bin Sorgulama</a></li>
                   <li><a href="AddCardToWallet.php">Cüzdana Kart Ekle </a></li>
                   <li><a href="GetCardFromWallet.php">Cüzdandaki Kartları Listele</a></li>
                   <li><a href="DeleteCardFromWallet.php">Cüzdandan Kart Sil</a></li>
                   <li><a href="ApiPaymentWithWallet.php">Cüzdandaki Kart (Tek Tıkla) İle Ödeme</a></li>
              
                </ul>
            </div>
        </div>
    </div>
<div class="container body-content">

    <br />
    <br />
    <br />