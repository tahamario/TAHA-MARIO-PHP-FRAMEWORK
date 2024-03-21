<?php

namespace Core;

class Container
{
    protected static $bindings = [];

    public static function bind($key, $resolver)
    {
        static::$bindings[$key] = $resolver;
    }

    public static function resolve($key)
    {
        if (!array_key_exists($key, static::$bindings)) {
            throw new \Exception("No matching binding found for {$key}");
        }
        
        $resolver = static::$bindings[$key];

        return call_user_func($resolver);
    }
}
