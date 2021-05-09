<?php
class Config
{
    //by default null, in order to verify if my $path config exists
    public static function get($path=null)
    {
        if ($path) {
            $config = $GLOBALS ['config'];
            $path = explode('/', $path);
        
            // to see if we have access to our host 127.0.0.1
            foreach ($path as $bit) {
                if (isset($config[$bit])) {
                    $config = $config[$bit];
                }
            }
            return $config;
        }
    return false;
    }
}
