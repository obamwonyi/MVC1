<?php 

$request_method = $_SERVER["REQUEST_METHOD"] ?? "GET";
$request_path = $_SERVER["REQUEST_URI"] ?? $_SERVER["HTTP_HOST"]."/MVC1";



if($request_method === "GET" && $request_path === $_SERVER["HTTP_HOST"]."/MVC1/") 
{
    print("This page is working ");
}
elseif($request_path === $_SERVER["HTTP_HOST"] ."/old-home") 
{
    header("Location: ".$_SERVER["HTTP_HOST"]."/MVC1", $replace = true, $code = 301) ;
}
else
{
    include(__DIR__. "/404.php");
}


