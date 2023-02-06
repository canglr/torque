<?php

require_once __DIR__.'/router.php';

get('/', '../controller/index.php');

get('/account/dashboard', '../controller/index.php');

get('/account/login', '../controller/login.php');

post('/account/login', '../controller/login.php');

get('/account/register', '../controller/register.php');

post('/account/register', '../controller/register.php');

post('/account/lostpassword', '../controller/lostpassword.php');

get('/account/password/$shareid', '../controller/password.php');

post('/account/password/$shareid', '../controller/password.php');

get('/account/info', '../controller/accountinfo.php');

post('/account/info', '../controller/accountinfo.php');

get('/account/users', '../controller/users.php');

get('/account/useredit/$userid', '../controller/useredit.php');

post('/account/useredit/$userid', '../controller/useredit.php');

post('/account/newpassword', '../controller/newpassword.php');

get('/account/logs/$userid', '../controller/logs.php');

get('/account/logout', '../controller/logout.php');

any('/404','../controller/404.php');
