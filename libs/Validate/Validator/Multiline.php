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
 * Validator for testing if a string contains only multiline characters.
 *
 * @copyright   copyright (c) 2013-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Multiline extends \Octris\Validate\Validator
{
    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate($value)
    {
        return !preg_match('/[\f]/', $value);
    }
}
