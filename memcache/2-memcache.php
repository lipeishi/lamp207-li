<?php

	/**
	类名: Mem
		1. 写入数据
			方法名: set
			参数:   键名
					键值
					生命周期时间(单位是 s)
			返回值
				成功   true
				失败   false

		2. 读取数据
			方法名: get
			参数:   键名
			返回值  成功 返回 键值
					失败 返回 false

		3. 删除数据
			方法名: delete
			参数:   键名
			返回值  成功 返回 true
					失败 返回 false

		4. 检测是否存在
			方法名: exists
			参数:   键名
			返回值  成功 返回 true
					失败 返回 false
	*/
	class Mem
	{
		public static $mem = null;
		public static $m = null;

		private function __construct()
		{
			self::$mem = new Memcache;
			self::$mem -> connect('localhost',11211);
		}

		/**
		 * 写入数据
		 */
		public function set($key, $value, $time)
		{
			return self::$mem -> set($key, $value, MEMCACHE_COMPRESSED, $time);
		}

		/**
		 * 读取数据
		 */
		public function get($key)
		{
			return self::$mem -> get($key);
		}

		/**
		 * 创建mem对象
		 */
		public static function getInstance()
		{
			if(self::$m == null){
				//连接memcache
				self::$m = new Mem;
			}
			return self::$m;
		}

		/**
		 * 删除数据
		 */
		public function delete($key)
		{
			return self::$mem -> delete($key);
		}

		/**
		 * 检测
		 */
		public function exists($key)
		{
			return self::$mem -> get($key) ? true : false;
		}
	}

	//写入数据
	// $res = Mem::set('height',180,2000);
	// $res = Mem::getInstance() -> set('name', 'lamp207', 200);
	
	//读取数据
	// $res = Mem::getInstance() -> get('name');

	//删除数据
	// $res = Mem::getInstance()->delete('name');

	//检测
	// $res = Mem::getInstance()->exists('height');

	// var_dump($res);