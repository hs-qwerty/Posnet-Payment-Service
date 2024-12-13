<?php

namespace Slvler\Tmdb;

class Tmdb
{
    public static function client(): string
    {
        return self::factory()
            ->make();
    }
    public static function factory(): Factory
    {
        return new Factory;
    }
}