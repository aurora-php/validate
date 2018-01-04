<?php

/*
 * This file is part of the 'octris/validate' package.
 *
 * (c) Harald Lapp <harald@octris.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octris\Validate\Type;

/**
 * Validator for gender validation.
 *
 * @copyright   copyright (c) 2014-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Gender extends \Octris\Validate\Type
{
    /**
     * Validation pattern.
     *
     * @type    string
     */
    protected $pattern = '/^[MF]$/';

    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate($value)
    {
        return preg_match($this->pattern, $value);
    }
}
