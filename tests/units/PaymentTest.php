<?php
require __DIR__.'/../../app/Curl.php';

class PaymentTest extends PHPUnit\Framework\TestCase
{
	/**
	 * This method would help check if curl class exists
	 * then test what the api url returns, e.g
	 * the redirect url
	 * the message
	 */
	
	public function test(){
		$check = class_exists('Curl');
		$this->assertTrue($check);

		//now we check if the api call return an error
		$curl = new Curl;
		$customer_email 		= 'odili.i@yahoo.com';
		$amount 				= 1000;  
		$currency 				= "NGN";
		$txref 					= 'SMM-132456'; 
		$PBFPubKey 				= "FLWPUBK-3085ae75e9f93f17fcdf30955946e01c-X";
		$redirect_url 			= "http://results.net.ng/flutterwave-project/sam-books/report";
		$api 					= "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/hosted/pay";
		
		

		$arr = array(
			$curl->opt_url 				=> $api,
			$curl->opt_return_transfer 	=> true,
			$curl->opt_customrequest 	=> "POST",
			$curl->opt_postfields 	=> json_encode([

			    'amount'			=>$amount,
			    'customer_email'	=>$customer_email,
			    'currency'			=>$currency,
			    'txref'				=>$txref,
			    'PBFPubKey'			=>$PBFPubKey,
			    'redirect_url'		=>$redirect_url

			]),
			$curl->opt_httpheaders => [
				"content-type: application/json",
			    "cache-control: no-cache"
			]
		);

		$curl->setOptArray($arr);
		$response = $curl->execute();
		$error    = $curl->error();
		

		//here I am testing if we are gettin any error
		$this->assertFalse($error);

		$transaction = json_decode($response);

		//the we check to make sure this isnt returning true
		$this->assertFalse(!$transaction->data && !$transaction->data->link);
		
		
	}
}