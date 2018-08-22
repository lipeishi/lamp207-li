<?php

	$redis = new Redis;

	$res = $redis -> connect('localhost', 6379);

	$redis-> auth('lamp207');
	//
	$redis -> select(1);