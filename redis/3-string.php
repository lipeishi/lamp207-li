<?php
	
	include './common.php';

	//写入
		// $res = $redis -> set('nonshalai', '睡觉呢!!!');
		// $res = $redis -> setex('name',20,'xiaohigh');
		// $res = $redis -> mset(['name'=>'xiaohigh','age'=>18,'height'=>'180cm']); // m  => multi
		// $res = $redis -> setnx('pos','昌平');

	//删除
		// $res = $redis -> delete('nonshalai');
		// $res = $redis -> delete(['a','b','c']);

	//修改
		// $res = $redis -> set('age','19');
		// $res = $redis -> incr('age');
		// $res = $redis -> decr('age');
		// $res = $redis -> incrby('age', 3);
		// $res = $redis -> decrby('age', 6);

	//获取 
		// $res = $redis -> get('age');
		// $res = $redis -> mget(['age','pos']);

		var_dump($res);










		//设置声明周期
		// $res = $redis -> expire('name', 20);

