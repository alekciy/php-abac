<?php

namespace PhpAbac\Comparison;

class StringComparison extends AbstractComparison
{
    /**
     * @param string $expected
     * @param string $value
     *
     * @return bool
     */
    public function isEqual($expected, $value)
    {
        return $expected === $value;
    }

    /**
     * @param string $expected
     * @param string $value
     *
     * @return bool
     */
    public function isNotEqual($expected, $value)
    {
        return !$this->isEqual($expected, $value);
    }

    /**
     * @param string $expected The pattern to search for, as a string.
     * @param string $value The input string.
     *
     * @return bool
     */
    public function isMatch($expected, $value)
    {
        return boolval(preg_match($expected, $value));
    }
}
