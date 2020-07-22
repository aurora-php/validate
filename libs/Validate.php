<?php

/*
 * This file is part of the 'octris/validate' package.
 *
 * (c) Harald Lapp <harald@octris.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octris;

use \Octris\Validate\Schema;

/**
 * Validation base class.
 *
 * @copyright   copyright (c) 2010-present by Harald Lapp
 * @author      Harald Lapp <harald.lapp@gmail.com>
 */
class Validate
{
    /**
     * Schema structure types.
     */
    public const OBJECT = 1;
    public const ARRAY = 2;

    /**
     * Validation types which are directly implemented in schema validator.
     */
    public const CALLBACK = 3;
    public const CHAIN = 4;
}
