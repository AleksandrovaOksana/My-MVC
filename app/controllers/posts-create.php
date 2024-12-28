<?php
require_once CORE. '/classes/Validator.php';
use myfrm\Validator;
/**
 * @var \myfrm\Db $db
 */

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $fillable=['title', 'content', 'excerpt'];
    $data=load($fillable);

    /**
     * [
     * 'title'=> 'Explicado Enim corp',
     * 'content'=> 'Expl',
     * 'excerpt'=> 'Explicado Enim corp',
     * 'email'=>'Expl@mail.ru',
     * ]
    */

    //validations
    $validator = new Validator();
//    $validation=$validator->validate(
//        [
//            'title'=> 'Explicado Enim corp',
//            'content'=> 'Expl',
//            'excerpt'=> 'Explicado Enim corp',
//            'email'=>'Expl@mail.ru',
//            'password'=>'123456',
//            'repassword'=>'123456',
//        ],
//        [
//        'title' => [
//            'required' => true,
//            'min' => 5,
//            'max' => 190,
//        ],
//        'excerpt' => [
//            'required' => true,
//            'min' => 10,
//            'max' => 190,
//        ],
//        'content' => [
//            'required' => true,
//            'min' => 100,
//        ],
//        'email' => [
//            'email' => true,
//        ],
//            'password' => [
//                'required' => true,
//                'min' => 6,
//            ],
//            'repassword' => [
//                'math' => 'password',
//            ]
//
//    ]);
//
//    print_arr($validation->getErrors());
//    die;

    $validation=$validator->validate(
        $data,
        [
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
            'email' => [
                'email' => true,
            ],
            'password' => [
                'required' => true,
                'min' => 6,
            ],
            'repassword' => [
                'math' => 'password',
            ]

        ]);


    if(!$validation->hasErrors()){
        if($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)){
            $_SESSION['success']= 'OK';
        } else {
            $_SESSION['error'] = 'DB Error';
    }
        redirect();
//        redirect('/posts/create');
    }
}

$title = "My Blog :: New post";
require_once VIEWS . '/post-create.tpl.php';