<?php
	
	include './2-memcache.php';

	//如果缓存存在
	if(Mem::getInstance()->exists('mvs')){
		$mvs = Mem::getInstance() -> get('mvs');
		echo 'memcache';
	}else{
		$pdo = new PDO('mysql:host=localhost;dbname=db;charset=utf8','root','123456');
		// 读取 50 条数据
		$mvs = $pdo -> query('select * from mvs limit 50');
		$mvs = $mvs->fetchAll(PDO::FETCH_ASSOC);
		//写入缓存
		Mem::getInstance()->set('mvs', $mvs, 10);
		echo 'mysql';
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mv列表</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.bootcss.com/holder/2.9.4/holder.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>MV 列表</h2>
		<hr>
		<?php foreach ($mvs as $key => $value): ?>
		<div class="col-md-3">
			<img src="<?= $value['image'] ?>" alt="">
			<h5><?= mb_substr($value['title'],0,10) ?></h5>
		</div>
		<?php endforeach ?>
	</div>
</body>
</html>