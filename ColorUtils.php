<?php

class ColorUtils {
    static function darkBrownColor(){
        return static::getColor(101, 67, 33);
    }

    static function whiteColor(){
        return static::getColor(255, 255, 255);
    }
    
    static function redColor(){
        return static::getColor(255, 0, 0);
    }
    
    static function lightBlueColor(){
        return static::getColor(135, 206, 235);
    }
    
    static function lightPinkColor(){
        return static::getColor(255, 182, 193);
    }
    
    static function getColor($r, $g, $b) {
        return imagecolorallocate(imagecreatetruecolor(1,1), $r, $g, $b);
    }
}
