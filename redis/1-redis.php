<?php

	//1. 创建对象
	$redis = new Redis;

	//2. 连接
	$res = $redis -> connect('localhost', 6379);

	//3. 判断
	if(!$res){
		echo '连接失败!!!';
		die;
	}

	//4. 设置密码
	$redis -> auth('lamp207');

	//5. 选择数据库   0-15
	$redis -> select(1);

	//6. 操作
	$res = $redis -> set('week','星期三');
	var_dump($res);



