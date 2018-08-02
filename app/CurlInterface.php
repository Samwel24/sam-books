<?php

interface CurlInterface {

	public function setOpt($name, $value);

	public function setOptArray(Array $array);

	public function getOpt($name);

	public function execute();

	public function error();

	public function close();

}
