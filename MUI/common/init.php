<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host = "localhost";
$db_name = "root";
$db_pwd = "";
$db = "blog";
$link = mysqli_connect($db_host, $db_name, $db_pwd, $db) or die("fail");
mysqli_set_charset($link, "utf8");

