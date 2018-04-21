<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>The best product in the world</title>
</head>
<?php 

require_once("alipay.config.php");
require_once("lib/alipay_submit.class.php");

/**************************请求参数**************************/

        //timestamp
        $timestamp = date('Y-m-d h:i:s');
        //[Time stamp of the merchant server sending request [1456507704121]]

        //body
        $body = $_POST['WIDbody'];
        //[Specific description of the trade [iphone cellphone]]

        //currency
        $currency = $_POST['WIDcurrency'];
        //[Settlement currency [USD]]

        //extend_params
        $extend_params = $_POST['WIDextend_params'];
        //[ Be used for transmitting specific business information of the merchant [{"secondary_merchant_name":"Lotte"
        //notify_url
        $notify_url = $_POST['WIDnotify_url'];
        //[Alipay server takes the initiative to notify merchant of webpage http path designated by website 

        //out_trade_no
        $out_trade_no = $_POST['WIDout_trade_no'];
        //[Unique order ID in Alipay’s merchant website [4363476566647440]]

        //passback_parameters
        $passback_parameters = $_POST['WIDpassback_parameters'];
        //[Alipay will feekback this parameter by the asynchronous notify  [test]]

        //price
        $price = $_POST['WIDprice'];
        //[Unit price of the goods in the order [0.01]]

        //product_code
        $product_code = $_POST['WIDproduct_code'];
        //[Order placement used to distinguish the business type [OVERSEAS_MBARCODE_PAY]]

        //quantity
        $quantity = $_POST['WIDquantity'];
        //[Quantity of the goods in the order [1]]

        //seller_email
        $seller_email = $_POST['WIDseller_email'];
        //[Seller's Alipay account [testoverseas1980@alipay.com]]

        //seller_id
        $seller_id = $_POST['WIDseller_id'];
        //[Unique Alipay user ID corresponding to Seller’s Alipay account 16 numbers beginning with 2088 [2088021966388155]]

        //show_url
        $show_url = $_POST['WIDshow_url'];
        //[Hyperlink for the show of goods on the webpage of checkout counter [http://www.taobao.com/product/113714.html]]

        //subject
        $subject = $_POST['WIDsubject'];
        //[Goods title/trade tile/order subject/order key word etc [Payment by QR-Code]]

        //total_fee
        $total_fee = $_POST['WIDtotal_fee'];
        //[Total fee of this order [0.01]]

        //trans_currency
        $trans_currency = $_POST['WIDtrans_currency'];
        //[Pricing currency for the transaction [USD]]


/************************************************************/
 
$parameter = array(
	"service" => "alipay.acquire.precreate",
	"partner" => trim($alipay_config['partner']),
	"timestamp"	=> $timestamp,
	"body"	=> $body,
	"currency"	=> $currency,
	"extend_params"	=> $extend_params,
	"notify_url"	=> $notify_url,
	"out_trade_no"	=> $out_trade_no,
	"passback_parameters"	=> $passback_parameters,
	"price"	=> $price,
	"product_code"	=> $product_code,
	"quantity"	=> $quantity,
	"seller_email"	=> $seller_email,
	"seller_id"	=> $seller_id,
	"show_url"	=> $show_url,
	"subject"	=> $subject,
	"total_fee"	=> $total_fee,
	"trans_currency"	=> $trans_currency,
	"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
);
 
$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestHttp($parameter); 
$doc = new DOMDocument();
$doc->loadXML($html_text); 

if( ! empty($doc->getElementsByTagName( "alipay" )->item(0)->nodeValue) ) {
	$alipay = $doc->getElementsByTagName( "alipay" )->item(0)->nodeValue;
	echo $alipay;
} 

?>
</body>
</html>