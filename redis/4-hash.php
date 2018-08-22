<?php

	include './common.php';

	//添加
		//
		// $res = $redis -> hset('xiaohigh', 'name', '强');
		// $res = $redis -> hset('xiaohigh', 'height', '180cm');
		// $res = $redis -> hmset('zhifeng', ['name'=>'志峰','age'=>23,'height'=>'175','hasCar'=>true, 'hasMoney' => true]);

	//删除
		// $res = $redis -> hdel('xiaohigh','height');
		// $res = $redis -> del('xiaohigh');

	//修改
		// $res = $redis -> hset('zhifeng','height','176cm');
		// $res = $redis -> hincrby('zhifeng','year', -1);

	//获取 array_keys  array_values
		// $res = $redis -> hget('zhifeng','hasCar');
		// $res = $redis -> hmget('zhifeng', ['name','height','age']);
		// $res = $redis -> hgetall('zhifeng');
		// $res = $redis -> hlen('zhifeng');

		$res = $redis -> hkeys('zhifeng');
		$res2 = $redis -> hvals('zhifeng');

		var_dump($res);
		echo '<hr>';
		var_dump($res2);

