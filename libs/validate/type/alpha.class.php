<?php

namespace org\octris\core\validate\type {
    /**
     * Validator for strings containing only letters as characters (a-zA-Z).
     *
     * @octdoc      c:type/alpha
     * @copyright   copyright (c) 2010-2011 by Harald Lapp
     * @author      Harald Lapp <harald@octris.org>
     */
    class alpha extends \org\octris\core\validate\type
    /**/
    {
        /**
         * Validator implementation.
         *
         * @octdoc  m:alpha/validate
         * @param   mixed       $value          Value to validate.
         * @return  bool                        Returns true if value is valid.
         */
        public function validate($value)
        /**/
        {
            return ctype_alpha($value);
        }
    }
}
