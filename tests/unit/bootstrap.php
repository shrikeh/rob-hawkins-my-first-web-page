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

use Tests\Constants;

require_once dirname(__DIR__) . '/Constants.php';

require Constants::vendorDir() . '/autoload.php';

if (file_exists(Constants::appConfigDir() . '/bootstrap.php')) {
    require Constants::appConfigDir() . '/bootstrap.php';
}
