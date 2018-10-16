<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
if($gateway_error)
	echo $gateway_error;

$eticsoft_paynet_url = plugins_url() . '/eticsoft_paynet';
echo $form;

if(!$gateway_error){
?>

<script type="text/javascript">
jQuery( document ).ready(function() {
    jQuery(window).load(function() {
		jQuery(".paynetj-button").click();
	});
});
</script>
<?php } ?>