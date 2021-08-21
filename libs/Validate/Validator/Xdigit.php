<?php

declare(strict_types=1);

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
 * Validator for testing if a string contains only hexadecimal digits.
 *
 * @copyright   copyright (c) 2010-present by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Xdigit extends \Octris\Validate\AbstractValidator
{
    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate(mixed $value): bool
    {
        if (($return = ctype_xdigit($value)) && isset($this->options['length'])) {
            $return = (strlen($value) == $this->options['length']);
        }

        return $return;
    }
}
