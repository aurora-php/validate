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
 * Validates character encoding.
 *
 * @copyright   copyright (c) 2010-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Encoding extends \Octris\Validate\AbstractValidator
{
    /**
     * The character encoding to use for validation can be either specified
     * as option 'charset'. If no option is specified, the php.ini setting
     * 'default_charset' will be used.
     *
     * @param   array       $options        Options required by validator.
     */
    public function __construct(array $options)
    {
        if (!isset($options['charset'])) {
            $options['charset'] = ini_get('default_charset');
        }

        parent::__construct($options);
    }

    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate($value)
    {
        return mb_check_encoding($value, $this->options['charset']);
    }
}
