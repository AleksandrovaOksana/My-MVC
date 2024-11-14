<?php


$title = 'My Blog :: Home';

$posts = $db->query("SELECT * FROM posts order by id desc")->findAll();
$recent_posts = $db->query("SELECT * FROM posts order by id desc limit 3")->findAll();

require_once VIEWS . '/index.tpl.php';