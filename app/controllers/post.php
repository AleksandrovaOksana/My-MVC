<?php
/**
 * @var Db $db
 */

$id = (int)$_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM posts where id=? limit 1", [$id])->findOrFail();
//if(!$post){
//    abort();
//}

$title = "My Blog :: {$post['title']}";
require_once VIEWS . '/post.tpl.php';