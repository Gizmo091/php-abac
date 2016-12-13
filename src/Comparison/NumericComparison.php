<?php

namespace PhpAbac\Comparison;

class NumericComparison extends AbstractComparison
{
    /**
     * @param int $expected
     * @param int $value
     *
     * @return bool
     */
    public function isEqual($expected, $value)
    {
        return (int) $expected === (int) $value;
    }
	
	/**
	 * @param $excepted
	 * @param $value
	 *
	 * @return bool
	 */
    public function isNotEqual($excepted,$value)
	{
		return !$this->isEqual($excepted,$value);
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
    public function isLesserThan($expected, $value, $strict = true)
    {
        return
            ($strict === true)
            ? $expected > $value
            : $expected >= $value
        ;
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
        return
            ($strict === true)
            ? $expected < $value
            : $expected <= $value
        ;
    }
}
