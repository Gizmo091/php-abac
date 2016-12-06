<?php

namespace PhpAbac\Comparison;

class IntegerComparison extends NumericComparison
{
    /**
     * If strict is set to false, equal values will return true.
     * 
     * @param int  $expected
     * @param int  $value
     * @param bool $strict
     *
     * @return bool
     */
    public function isLesserThan($expected, $value, $strict = true)
    {
    	return parent::isLesserThan((int)$expected,(int)$value,$strict);
    }

    /**
     * If strict is set to false, equal values will return true.
     * 
     * @param int  $expected
     * @param int  $value
     * @param bool $strict
     *
     * @return bool
     */
    public function isGreaterThan($expected, $value, $strict = true)
    {
		return parent::isGreaterThan((int)$expected,(int)$value,$strict);
    }
}
