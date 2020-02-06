<?php
require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$md5Filter = new Twig_SimpleFilter('md5', function($string){
    return md5($string);
});

$twig->addFilter($md5Filter);
$lexer = new Twig_Lexer($twig, array(
    'tag_block' =>array('{','}'),
    'tag_variable'=>array('{{','}}')

));
$twig->setLexer($lexer);
echo $twig->render('helloNew.html', array(
    'name'=>'Pratt',
    'age'=>10,

    'users' => array(
        array('name'=>'Max', 'age'=> 18),
        array('name'=>'Michael', 'age'=>40),
        array('name'=>'James', 'age'=>22)
    )
));

?>