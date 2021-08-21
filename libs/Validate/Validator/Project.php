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
 * Validator for project names. A qualified project name is:
 *
 * <vendor-name>/<package-name>
 *
 * e.g.: octris/core
 *
 * The string must match the pattern:
 *
 * [A-Za-z0-9][A-Za-z0-9_]*\/[A-Za-z0-9][A-Za-z0-9_]*
 *
 * @copyright   copyright (c) 2011-present by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Project extends \Octris\Validate\AbstractValidator
{
    /**
     * Validator implementation.
     *
     * @param   mixed       $value          Value to validate.
     * @return  bool                        Returns true if value is valid.
     */
    public function validate(mixed $value): bool
    {
        return !!preg_match(
            '/^[A-Za-z0-9][A-Za-z0-9_]*\/[A-Za-z0-9][A-Za-z0-9_]*$/',
            $value
        );
    }
}
