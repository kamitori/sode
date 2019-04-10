<?php

/**
 * @Author: Nguyễn Minh Trí
 * @Date:   2019-04-10 14:14:01
 * @Last Modified by:   Admin
 * @Last Modified time: 2019-04-10 15:42:07
 */
// $content = include_once('view/home.phtml');
include_once('global.php');
$content = get_include_contents('view/home.phtml',[]);
include_once('view/index.phtml');