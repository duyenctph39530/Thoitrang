<?php
const PATH_ROOT =__DIR__.'/';
if(!function_exists('asset')){
    function asset($path){
        return $_ENV['BASE_URL'].$path;
    }
}
