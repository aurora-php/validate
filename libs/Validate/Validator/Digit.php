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
 * Validator for values containing only digits.
 *
 * @copyright   copyright (c) 2011-present by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Digit extends \Octris\Validate\AbstractValidator
{
    /**
     * Validation pattern.
     *
     * @type    string
     */
    protected $pattern = '/^[0-9]+$/';

    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate(mixed $value): bool
    {
        if (($return = preg_match($this->pattern, $value))) {
            $return = (isset($this->options['min'])
                        ? ($value >= $this->options['min'])
                        : true);

            $return = ($return
                        ? (isset($this->options['max'])
                            ? ($value <= $this->options['max'])
                            : true)
                        : false);
        }

        return $return;
    }
}
