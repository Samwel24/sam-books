<?php

require 'CurlInterface.php';

class Curl Implements CurlInterface{

	public $handler,
			$opt_url,
			$opt_return_transfer,
			$opt_customrequest,
			$opt_postfields,
			$opt_httpheaders,
			$opt_ssl_verifypeer,
			$info_header_size;

	public function __construct($url = "")
	{
		$this->handler = curl_init($url);
		$this->opt_url = CURLOPT_URL;
		$this->opt_return_transfer = CURLOPT_RETURNTRANSFER;
		$this->opt_customrequest =CURLOPT_CUSTOMREQUEST; 
		$this->opt_postfields =  CURLOPT_POSTFIELDS;
		$this->opt_httpheaders = CURLOPT_HTTPHEADER;
		$this->info_header_size = CURLOPT_HTTPHEADER;
        $this->opt_ssl_verifypeer = CURLOPT_SSL_VERIFYPEER;
	}

	public function setOpt($name, $value){
		curl_setopt($this->handler, $name, $value);
		return $this;
	}

	public function setOptArray(Array $array)
	{
		curl_setopt_array($this->handler, $array);
		return $this;
	}

	public function getOpt($name)
	{
		return curl_getinfo($this->handler, $name);
	}

	public function execute()
	{
		return curl_exec($this->handler);
		// return $this;
	}

	public function error()
	{
		return curl_error($this->handler);
	}
	
	public function close(){
		return curl_close($this->handler);
	}

}