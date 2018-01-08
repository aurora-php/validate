<?php

/*
 * This file is part of the 'octris/validate' package.
 *
 * (c) Harald Lapp <harald@octris.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octris\Validate\Validator;

/**
 * Validator for values containing numeric value.
 *
 * @copyright   copyright (c) 2013-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Numeric extends \Octris\Validate\Validator\Digit
{
    /**
     * Validation pattern.
     *
     * @type    string
     */
    protected $pattern = '/^[+-]?[0-9]+(\.[0-9]+)$/';
    /**/
}
