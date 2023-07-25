<?php

namespace App;

class DB
{
    public static ?DB $instance = null;

    private function __construct(public array $config)
    {
        echo 'instance created';
    }

    /**
     * Get the static value of config
     */
    public static function getInstance(array $config): DB
    {
        if (DB::$instance === null) {
            DB::$instance = new DB($config);
        }
        return DB::$instance;
    }
}
