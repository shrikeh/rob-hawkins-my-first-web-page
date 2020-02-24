<?php

/*
 * This file is part of the Diving Site package.
 *
 * (c) Barney Hanlon <barney@shrikeh.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types=1);

namespace Tests;

final class Constants
{
    /**
     * @return string
     */
    public static function rootDir(): string
    {
        return dirname(__DIR__);
    }

    /**
     * @return string
     */
    public static function vendorDir(): string
    {
        return self::rootDir() . '/vendor';
    }

    /**
     * @return string
     */
    public static function appDir(): string
    {
        return self::rootDir() . '/src';
    }

    /**
     * @return string
     */
    public static function testsDir(): string
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    public static function fixturesDir(): string
    {
        return self::testsDir() . '/fixtures';
    }

    /**
     * @return string
     */
    public static function appConfigDir(): string
    {
        return self::rootDir() . '/config';
    }
}
