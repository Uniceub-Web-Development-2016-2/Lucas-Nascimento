<?php


		private $protocol;
		private $ip;
		private $resource;
		private $parameters;
		private $method;
		
public function __construct($protocol, $ip, $resource, $parameters, $method){
			$this->protocol = $protocol;
			$this->ip = $ip;
			$this->resource = $resource;
			$this->parameters = $parameters;
			$this->method = $method;
		}
		
		public function getprotocol()
		{
			return $this->protocol;
		}

		public function setprotocol($protocol)
		{
			$this->protocol = $protocol;
		}

		public function getip()
		{
			return $this->ip;
		}

		public function setip($ip)
		{
			$this->ip = $ip;
		}

		public function getresource()
		{
			return $this->resource;
		}

		public function setresource($resource_path)
		{
			$this->resource = $resource;
		}

		public function getparameters()
		{
			return $this->parameters;
		}

		public function setparameters($parameters)
		{
			$this->parameters = $parameters;
		}

		public function getmethod()
		{
			return $this->method;
		}

		public function setmethod($method)
		{
			$this->method = $method;
		}

		public function toString(){
		$url = $this->protocol."://".$this->server_ip."/".$this->resource_path."?";
			return $url + parameters;
		}
