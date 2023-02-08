<?php

require_once (__DIR__.'/router.php');
/* require_once("{$_SERVER['DOCUMENT_ROOT']}/phprouter/router.php"); */
/*  nama folder */


/* MYSQLI */
get('/', 'mysqli/home.php');
get('/crud', 'mysqli/home.php');
get('/tambah', 'mysqli/tambah.php');
post('/tambah-proses', 'mysqli/tambah-proses.php');
get('/edit/$id', 'mysqli/edit.php');
post('/edit-proses', 'mysqli/edit-proses.php');
get('/hapus/$id', 'mysqli/hapus.php');

post('/users', 'bridges/create-user.php');
delete('/users/$id', 'bridges/delete-user.php');

any('/404','views/404.php');
