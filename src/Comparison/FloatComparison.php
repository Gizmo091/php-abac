<?php

namespace PhpAbac\Comparison;

class FloatComparison extends NumericComparison
{
	
	/**
	 * @param float $expected
	 * @param float $value
	 *
	 * @return bool
	 */
	public function isEqual($expected, $value)
	{
		return (float) $expected === (float) $value;
	}
	
    /**
     * If strict is set to false, equal values will return true.
     * 
     * @param float  $expected
     * @param float  $value
     * @param bool $strict
     *
     * @return bool
     */
    public function isLesserThan($expected, $value, $strict = true)
    {
    	return parent::isLesserThan((float)$expected,(float)$value,$strict);
    }

    /**
     * If strict is set to false, equal values will return true.
     * 
     * @param float  $expected
     * @param float  $value
     * @param bool $strict
     *
     * @return bool
     */
    public function isGreaterThan($expected, $value, $strict = true)
    {
		return parent::isGreaterThan((float)$expected,(float)$value,$strict);
    }
}
