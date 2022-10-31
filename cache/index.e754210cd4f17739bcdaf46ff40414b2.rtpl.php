<?php if(!class_exists('Rain\Tpl')){exit;}?>&lt;?php

require_once("vendor/autoload.php");
use \Classes\Page;

$app = new \Slim\Slim();



$app->get('/',function(){
    $page = new Page();
    $page->setTpl("index",true);
    
    
});




?&gt;