<?php

namespace algiadesign\tradalgia;

class TradalgiaAPI
{
    private static $instance;

    public static function getInstance(): TradalgiaAPI
    {
        if (!isset(self::$instance)) {
            self::$instance = new TradalgiaAPI();
        }

        return self::$instance;
    }

    private function __construct()
    {
    }
}
