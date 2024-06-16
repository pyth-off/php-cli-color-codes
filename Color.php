<?php

class Color
{

    // Set up shell colors
    const FOREGROUND_BLACK = '0;30';
    const FOREGROUND_DARK_GRAY = '1;30';
    const FOREGROUND_BLUE = '0;34';
    const FOREGROUND_LIGHT_BLUE = '1;34';
    const FOREGROUND_GREEN = '0;32';
    const FOREGROUND_LIGHT_GREEN = '1;32';
    const FOREGROUND_CYAN = '0;36';
    const FOREGROUND_LIGHT_CYAN = '1;36';
    const FOREGROUND_RED = '0;31';
    const FOREGROUND_LIGHT_RED = '1;31';
    const FOREGROUND_PURPLE = '0;35';
    const FOREGROUND_LIGHT_PURPLE = '1;35';
    const FOREGROUND_BROWN = '0;33';
    const FOREGROUND_YELLOW = '1;33';
    const FOREGROUND_LIGHT_GRAY = '0;37';
    const FOREGROUND_WHITE = '1;37';

    const BACKGROUND_BLACK = '40';
    const BACKGROUND_RED = '41';
    const BACKGROUND_GREEN = '42';
    const BACKGROUND_YELLOW = '43';
    const BACKGROUND_BLUE = '44';
    const BACKGROUND_MAGENTA = '45';
    const BACKGROUND_CYAN = '46';
    const BACKGROUND_LIGHT_GRAY = '47';


    // Returns colored string
    public static function output($string, $fColor = null, $bColor = null)
    {
        $str = "\033[{$fColor}m";
        $str .= "\033[{$bColor}m";
        $str .= "$string\033[0m";
        return $str;
    }
}
