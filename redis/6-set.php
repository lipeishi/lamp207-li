<?php
	include './common.php';


	//插入
		// $res = $redis -> sadd('lamp207', '慧之');
		// $res = $redis -> sadd('lamp207', '世显');
		// $res = $redis -> sadd('lamp207', '广森');
		// $res = $redis -> sadd('lamp207', '李志');
		// $res = $redis -> sadd('lamp207', '田佳');
		// $res = $redis -> sadd('lamp207', '樊锰');
		// func_get_args
		// $res = $redis -> sadd('fruit','apple','pear','banana','liulian','orange');

	//删除
		// $res = $redis -> srem('fruit','liulian');

	//移动
		// $res = $redis -> smove('fruit','lamp207','apple');

	//获取
		// $res = $redis -> smembers('lamp207');
		// $res = $redis -> ssize('lamp207');

		//交集
		// $res = $redis -> sinter('lamp207','fruit');

		//并集
		// $res = $redis -> sunion('lamp207','fruit');

		//差集
		$res = $redis -> sdiff('lamp207','fruit');

		var_dump($res);