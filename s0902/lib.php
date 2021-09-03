<?php

function dump($value){
    echo "<div class ='dump' style = 'display:inline-block; width:50%;' >";
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    echo "</div>";
}