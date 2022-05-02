<?php

function createMacroFromClassAToClassB($source,$destination,$number){
    return '/hotbar copy '.$source.' '.$number.' '.$destination.' '.$number;    
}


function isTheMacroStupid($source,$destination){
    if(strcmp($source, $destination)){
        return true;
    }else{
        return false;
    }
}