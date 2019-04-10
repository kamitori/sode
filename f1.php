<?php

/**
 * @Author: Nguyễn Minh Trí
 * @Date:   2019-04-10 14:14:01
 * @Last Modified by:   Admin
 * @Last Modified time: 2019-04-10 15:47:06
 */
// $content = include_once('view/home.phtml');
include_once('global.php');
$list = [
	'test 1','test 2','test 3','test 4','test 5'
];
$content = get_include_contents('view/f1.phtml',['list' => $list]);
include_once('view/index.phtml');