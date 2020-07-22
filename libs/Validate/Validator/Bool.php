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
 * Validator for bool values.
 *
 * @copyright   copyright (c) 2011-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Bool extends \Octris\Validate\AbstractValidator
{
    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate($value)
    {
        return (is_bool($value) || preg_match('/^(-|\+)?(0|1)$/', $value));
    }
}
