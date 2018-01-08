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

/**
 * Validation base class.
 *
 * @copyright   copyright (c) 2010-2018 by Harald Lapp
 * @author      Harald Lapp <harald.lapp@gmail.com>
 */
class Validate
{
    /**
     * Schema structure types.
     */
    const T_OBJECT = 1;
    const T_ARRAY  = 2;

    /**
     * Validation types which are directly implemented in schema validator.
     *
     * @type    int
     */
    const T_CALLBACK = 3;
    const T_CHAIN    = 4;

    /**
     * Protected constructor and magic clone method to prevent existance of multiple instances.
     */
    protected function __construct()
    {
    }
    protected function __clone()
    {
    }

    /**
     * Test a value if it validates to the specified schema.
     *
     * @param   mixed           $value              Value to test.
     * @param   array           $schema             Validation schema.
     * @param   int             $mode               Optional validation mode.
     * @return  mixed                               Returns true, if valid otherwise an array with error messages.
     */
    public static function validate($value, array $schema, $mode = \Octris\Validate\Schema::T_STRICT)
    {
        $instance = new \Octris\Validate\Schema($schema, $mode);
        $is_valid = $instance->validate($value);

        return ($is_valid === true
                ? $is_valid
                : $instance->getErrors());
    }
}
