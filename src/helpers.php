<?php

if (!function_exists('number_to_word')) {
    /**
     * Convert number to English word.
     *
     * @param int $number
     *
     * @return string
     */
    function number_to_word($number)
    {
        return app('NumConvert')->word($number);
    }
}

if (!function_exists('number_to_roman')) {
    /**
     * Convert number to roman numerals.
     *
     * @param int $number
     *
     * @return string
     */
    function number_to_roman($number)
    {
        return app('NumConvert')->roman($number);
    }
}

if (!function_exists('number_with_ordinal_suffix')) {
    /**
     * Convert number to number + ordinal suffix.
     *
     * @param int $number
     *
     * @return string
     */
    function number_with_ordinal_suffix($number)
    {
        return app('NumConvert')->numberOrdinal($number);
    }
}

if (!function_exists('number_to_word_ordinal')) {
    /**
     * Convert number to worded ordinal.
     *
     * @param int $number
     *
     * @return string
     */
    function number_to_word_ordinal($number)
    {
        return app('NumConvert')->wordOrdinal($number);
    }
}
