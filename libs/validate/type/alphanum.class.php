<?php

namespace org\octris\core\validate\type
    /**
     * Validator for strings containing letters and numbers as characters (a-zA-Z0-9).
     *
     * @octdoc      c:type/alphanum
     * @copyright   copyright (c) 2010-2011 by Harald Lapp
     * @author      Harald Lapp <harald@octris.org>
     */
    class alphanum extends \org\octris\core\validate\type
    /**/
    {
        /**
         * Validator implementation.
         *
         * @octdoc  m:alphanum/validate
         * @param   mixed       $value          Value to validate.
         * @return  bool                        Returns true if value is valid.
         */
        public function validate($value)
        /**/
        {
            return ctype_alnum($value);
        }
    }
}
