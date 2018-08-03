<?php

require 'Curl.php';

class Main {
	public function test(){
		// echo 1;
	}

	public function checkdonate(){
		if(!isset($_GET['id'])){
			header('Location: index');
		}
	}

	public function securepayment(Array $source, $item)
	{
		$source['ref'] = 'SMM-'.time();
		$_SESSION['payment'] = $source;

		header('Location: secure?id='.$item);
	}

	public function proceedpayment(){

		$customer_email 		= $_SESSION['payment']['email'];
		$amount 				= $_SESSION['payment']['amount'];  
		$currency 				= $_SESSION['payment']['currency'];
		$txref 					= $_SESSION['payment']['ref']; 
		$PBFPubKey 				= "FLWPUBK-586b1977e70cc193d69115924abebf96-X";
		$redirect_url 			= "http://results.net.ng/flutterwave-project/sam-books/report";
		$api 					= "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/hosted/pay";
		
		$curl = new Curl();

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
		if($error){
			die('CURL ERROR'. $error);
		}

		$transaction = json_decode($response);

		if(!$transaction->data && !$transaction->data->link){
			  // there was an error from the API
			die('API returned error: ' . $transaction->message);
		}
		
		header('Location: ' . $transaction->data->link);
	}


	public function returnedUrl($txref)
	{
		$query = array(
	            "SECKEY" => "FLWSECK-695ecab991fa2c281c4a99b0086b53c8-X",
	            "txref" => $txref,
	            "include_payment_entity" => "1"
	            
	        );
        $amount = $_SESSION['payment']['amount']; 
        $currency = $_SESSION['payment']['currency'];;  
	    $data_string = json_encode($query);

	    $curl = new Curl();
	    $curl->setOpt($curl->opt_url, "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/xrequery");
	    $curl->setOpt($curl->opt_customrequest, "POST");
        $curl->setOpt($curl->opt_postfields, $data_string);                                      
        $curl->setOpt($curl->opt_return_transfer, true);
        $curl->setOpt($curl->opt_ssl_verifypeer, false);
        $curl->setOpt($curl->opt_httpheaders, array('Content-Type: application/json'));

        $response = $curl->execute();

        $header_size = $curl->getOpt($curl->info_header_size);

        $header = substr($response, 0, $header_size);

        $body = substr($response, $header_size);

        $curl->close();

        $resp = json_decode($response, true);


        
        
        $paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];

        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
          return true;
        } else {
            header('Location: failed');
        }
	}
}
