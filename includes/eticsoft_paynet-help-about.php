<?php
/*
Plugin Name: Eticsoft PAYNET Ödeme Kuruluşu A.Ş. Payment Gateway
Plugin URI:  https://eticsoft.com/shop/tr/odeme-modulleri/58-ucretsiz-prestashop-paynet-entegrasyon-modulu.html
Description: PAYNET Ödeme Kuruluşu A.Ş. provides 6 populer bank gateways in one service. Now you can use this plugin with woocommerence
Version:     1.0
Author:      eticsoft.com
Author URI:  EticSoft R&D Lab
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$eticsoft_paynet_url = plugins_url() . '/eticsoft_paynet/';
?>
<hr/>
<br/>
    <div class="panel">
	<br/>
        <div class="row">
            <div class="col-md-2 text-center">
				<img src="<?php echo $eticsoft_paynet_url ?>img/paynet_logo.png" class="img-responsive" />
			</div>
            <div class="col-md-2 text-center">
			</div>
            <div class="col-md-3 text-center" align="center">
                <a href="https://paynet.com" class="btn button-primary" id="create-account-btn">Paynet SanalPOS'a başvurun</a><br />veya<br/> 
                <a class="btn button-primary" href="https://pos.paynet.com"> Hesabınıza giriş yapın</a>
            </div>
        </div>
        <hr />    
            <p align="center" style="font-size:1.2em"> Bu plugin için teknik destek işlemleri Paynet Ödeme A.Ş. adına <a href="https://eticsoft.com">EticSoft</a> tarafından <b>ÜCRETSİZ</b> sağlanmaktadır</p>
    </div>

    <div class="panel">
        <div class="row">   
        </div>
        <div class="row">
           <div class="col-sm-6 text-center " style="background-image:url(<?php echo $eticsoft_paynet_url ?>img/help2.png);" id="help-container">            
                <h1>Yardıma mı <br/>ihtiyacınız var? <br/> Hemen <br/> EticSoft'u <br/> çağırın !</h1>
            </div>
            <div class="col-md-6 text-center" style="text-align:center">
                <h1><b style="text-color:#a00">ÜCRETSİZ</b> Destek Sistemi</h1><hr/>
                <a class="button-primary" href="https://eticsoft.com/support/submitticket.php?step=2&deptid=11"><i class="icon icon-ambulance"> </i> Ticket destek sistemi</a> <hr/>
                <a href="tel:0242 241 59 85"><img src="https://eticsoft.com/wp-content/uploads/2014/12/destek-hatti-1.png" width="150px" /></a><br/>
				0242 241 59 85

            </div>

            <hr/>
        </div>

        <div class="panel">
            <div class="col-sm-12 text-center">
                <a href="https://www.facebook.com/EticSoft/"><img src="<?php echo $eticsoft_paynet_url ?>img/icons/facebook.png" width="48px" /></a>
                <a href="https://twitter.com/eticsoft"><img src="<?php echo $eticsoft_paynet_url ?>img/icons/twitter.png" width="48px" /></a>
                <a href="https://www.youtube.com/user/EticSoft"><img src="<?php echo $eticsoft_paynet_url ?>img/icons/youtube.png" width="48px" /></a>
                <a href="https://www.linkedin.com/company/eticsoft-yaz%C4%B1l%C4%B1m"><img src="<?php echo $eticsoft_paynet_url ?>img/icons/linkedin.png" width="48px" /></a>
                <a href="https://www.instagram.com/eticsoft/"><img src="<?php echo $eticsoft_paynet_url ?>img/icons/instagram.png" width="48px" /></a>
                <a href="https://wordpress.org/support/users/eticsoft-lab/"><img src="<?php echo $eticsoft_paynet_url ?>img/icons/wordpress.png" width="48px" /></a>
                <a href="https://github.com/eticsoft/"><img src="<?php echo $eticsoft_paynet_url ?>img/icons/github.png" width="48px" /></a>
            </div>
            <hr/>
        </div>
    </div>