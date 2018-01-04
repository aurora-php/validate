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
 * octdoc       c:core/validate
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
     * Available validation types.
     */
    const T_ALPHA     = '\Octris\Validate\Type\Alpha';
    const T_ALPHANUM  = '\Octris\Validate\Type\Alphanum';
    const T_BASE64    = '\Octris\Validate\Type\Base64';
    const T_BOOL      = '\Octris\Validate\Type\Bool';
    const T_DIGIT     = '\Octris\Validate\Type\Digit';
    const T_EMAIL     = '\Octris\Validate\Type\Email';
    const T_FILE      = '\Octris\Validate\Type\File';
    const T_GENDER    = '\Octris\Validate\Type\Gender';
    const T_MULTILINE = '\Octris\Validate\Type\Multiline';
    const T_NUMERIC   = '\Octris\Validate\Type\Numeric';
    const T_PATH      = '\Octris\Validate\Type\Path';
    const T_PATTERN   = '\Octris\Validate\Type\Pattern';
    const T_PRINTABLE = '\Octris\Validate\Type\Printable';
    const T_PROJECT   = '\Octris\Validate\Type\Project';
    const T_URL       = '\Octris\Validate\Type\Url';
    const T_XDIGIT    = '\Octris\Validate\Type\Xdigit';

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
