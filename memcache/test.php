<?php



class Mem
{
	public static $mem = null;
	public static $m = null;

	private function __construct()
	{
		self::$mem = new Memcache;
		self::$mem -> connect('localhost',11211);
	}

	
	
}