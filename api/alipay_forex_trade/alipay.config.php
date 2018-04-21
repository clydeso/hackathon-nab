<?php

//partner ID,It's a 16-bit string start with "2088".Login in https://globalprod.alipay.com/order/myOrder.htm to see your partner ID.
//Below is a default sandbox account for your reference,pls apply your own sandbox account here:https://global.alipay.com/help/integration/23
$alipay_config['partner']		= '2088621891276675';
 
//MD5 key . The security check code, 32 bit string composed of numbers and letters.See your key at https://globalprod.alipay.com/order/myOrder.htm
$alipay_config['key']			= '6cgz2arb7djrp0ohrcz580a4sl1n0pfz';
 
//Page for receiving asynchronous Notification. It should be accessable from outer net.No custom parameters like '?id=123' permitted.
$alipay_config['notify_url'] = "http://商户网址/create_forex_trade-PHP-UTF-8-MD5-new/notify_url.php";
 
 //Page for synchronous notification.It should be accessable from outer net.No custom parameters like '?id=123' permitted.
$alipay_config['return_url'] = "http://www.alipay.com";
 
//sign_type
$alipay_config['sign_type']    = strtoupper('MD5');
 
// input_charset   gbk and utf-8 are supported now.
$alipay_config['input_charset']= strtolower('utf-8');
 
//The path of ca certificate,used to check ssl of curl in verify_notify
//make sure cacert.pem is at the current working directory
$alipay_config['cacert']    = getcwd().'\\cacert.pem'; 
 
//Access mode,choose https if your server support ssl and use http if not
$alipay_config['transport']    = 'https';
		 
//Service name of the interface.No need to modify.
$alipay_config['service'] = "create_forex_trade"; 
?>