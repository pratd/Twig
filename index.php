<?php
require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$md5Filter = new Twig_SimpleFilter('md5', function($string){
    return md5($string);
});

// $twig->addFilter($md5Filter);
// $lexer = new Twig_Lexer($twig, array(
//     'tag_block' =>array('{','}'),
//     'tag_variable'=>array('{{','}}')

// ));
// $twig->setLexer($lexer);
// echo $twig->render('helloNew.html', array(
//     'name'=>'Pratt',
//     'age'=>10,

//     'users' => array(
//         array('name'=>'Max', 'age'=> 18),
//         array('name'=>'Michael', 'age'=>40),
//         array('name'=>'James', 'age'=>22)
//     )
// ));
echo $twig->render('home.html.twig', array(
    'title'=>'Today\'s News',
    'content'=>'Lorem ipsum dolor sit amet,
    consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation
    ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate
    velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum.
    ',
    'news'=>array(
        array('title'=>'abcd', 'status'=>'publish', 'content'=>'Lorem ipsum dolor sit amet,
        consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation
        ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit in voluptate 
        velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.
        ', 'date'=>date('l jS \of F Y h:i:s A')),
        array('title'=>'def', 'status'=>'publish', 'content'=>'Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, sed do eiusmod 
        tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate 
        velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.
        ', 'date'=>date('l jS \of F Y h:i:s A')),
        array('title'=>'ijkl', 'status'=>'review', 'content'=>'Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, sed do eiusmod 
        tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate 
        velit esse cillum dolore eu fugiat nulla pariatur. 
        Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.
        ', 'date'=>date('l jS \of F Y h:i:s A')),
        array('title'=>'', 'status'=>'review', 'content'=>'', 
        'date'=>'')

    )
));
$template = $twig->loadTemplate('home.html.twig');
?>