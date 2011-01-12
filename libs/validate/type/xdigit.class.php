<?php

namespace org\octris\core\validate\type {
    /**
     * Validator for testing if a string contains only hexadecimal digits.
     *
     * @octdoc      c:type/xdigit
     * @copyright   copyright (c) 2010-2011 by Harald Lapp
     * @author      Harald Lapp <harald@octris.org>
     */
    class xdigit extends \org\octris\core\validate\type
    /**/
    {
        /**
         * Validator implementation.
         *
         * @octdoc  m:xdigit/validate
         * @param   mixed       $value          Value to validate.
         * @return  bool                        Returns true if value is valid.
         */
        public function validate($value)
        /**/
        {
            if (($return = ctype_xdigit($value)) && isset($this->options['length'])) {
                $return = (strlen($value) == $this->options['length']);
            }

            return $return;
        }
    }
}
