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
 * Validator for testing if a string matches a custom regular expression pattern.
 *
 * @copyright   copyright (c) 2010-present by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Pattern extends \Octris\Validate\AbstractValidator
{
    /**
     * Constructor.
     *
     * @param   array       $options        Options required by validator.
     */
    public function __construct(array $options)
    {
        if (!isset($options['pattern'])) {
            throw new \InvalidArgumentException('no pattern provided');
        }

        parent::__construct($options);
    }

    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate(mixed $value): bool
    {
        return preg_match($this->options['pattern'], $value);
    }
}
