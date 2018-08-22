<?php
	include './common.php';

	//写入
		// $res = $redis -> lpush('yewu', '岳岳');
		// $res = $redis -> lpush('yewu', '王剑');
		// $res = $redis -> lpush('yewu', '贾旭');
		// $res = $redis -> lpush('yewu', '长军');
		// $res = $redis -> lpush('yewu', '李阔');
		// $res = $redis -> lpush('yewu', '丁博');

		// $res = $redis -> rpush('yewu','杨洋');

	//删除
		// $res = $redis -> rpop('yewu');
		// $res = $redis -> lpop('yewu');
		// $res = $redis -> lrem('yewu','长军');

	//修改
		// $res = $redis -> lset('yewu',2, '王剑小弟');
		// $res = $redis -> rpoplpush('yewu','error');

	//获取
		// $res = $redis -> lindex('yewu', 1);
		// $res = $redis -> lrange('yewu', 0, 2);
		$res = $redis -> lsize('yewu');

		var_dump($res);
