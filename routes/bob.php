<?php

/**
 * This file is part of the Lasalle Software Laravel Application package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  (c) 2019-2020 The South LaSalle Trading Corporation
 * @license    http://opensource.org/licenses/MIT
 * @author     Bob Bloom
 * @email      bob.bloom@lasallesoftware.ca
 *
 * @see        https://lasallesoftware.ca
 * @see       https://packagist.org/packages/lasallesoftware/ls-laravelapp-pkg
 * @see       https://github.com/LaSalleSoftware/ls-laravelapp-pkg
 */

// Laravel facade 
use Illuminate\Support\Facades\Route;

Route::get('/children/jeb',  function () {
    echo "<br> __DIR = " . __DIR__;
    return "<br><br>hello from laravelapp !!";
});