<?php
require_once CORE. '/classes/Validator.php';
/**
 * @var Db $db
 */

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $fillable=['title', 'content', 'excerpt'];
    $data=load($fillable);

    //validations
    $validator = new Validator();
    $validation=$validator->validate($data, [
        'title' => [
            'required' => true,
            'min' => 5,
            'max' => 190,
        ],
        'excerpt' => [
            'required' => true,
            'min' => 10,
            'max' => 190,
        ],
        'content' => [
            'required' => true,
            'min' => 100,
        ],
    ]);

    if($validation->hasErrors()){
    } else {
        echo 'SUCCESS';
    }        print_arr($validation->getErrors());

    die;

//    if(empty($data['title'])){
//        $errors['title']="Title is required";
//    }
//    if(empty($data['content'])){
//        $errors['content']="Content is required";
//    }
//    if(empty($data['excerpt'])){
//        $errors['excerpt']="Excerpt is required";
//    }

    if(empty($errors)){
        if($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)){
            echo 'OK';
        } else {
            echo 'Db ERROR';
        }
//        redirect('/posts/create');
    }
}

$title = "My Blog :: New post";
require_once VIEWS . '/post-create.tpl.php';