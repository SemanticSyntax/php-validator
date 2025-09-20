<?php

/**
 * SemanticSyntax Validator for PHP 5.6
 *
 * Legacy-compatible validation helpers — no strict types, no scalar type hints, no return types.
 * This library is part of the SemanticSyntax brand: writing code that is both syntactically valid
 * and semantically meaningful, even in legacy projects.
 *
 * @package    SemanticSyntax\Validation
 * @author     SemanticSyntax <https://github.com/SemanticSyntax>
 * @license    MIT
 */

namespace SemanticSyntax\Validation;

class Validator
{
    /**
     * Validate email address.
     *
     * @param mixed $email
     * @return bool
     */
    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Validate IP address.
     *
     * @param mixed $ip
     * @param int   $flags
     * @return bool
     */
    public static function ip($ip, $flags = 0)
    {
        return filter_var($ip, FILTER_VALIDATE_IP, $flags) !== false;
    }

    /**
     * Validate integer within optional range.
     *
     * @param mixed    $value
     * @param int|null $min
     * @param int|null $max
     * @return bool
     */
    public static function int($value, $min = null, $max = null)
    {
        $options = array('options' => array());
        if ($min !== null) {
            $options['options']['min_range'] = (int) $min;
        }
        if ($max !== null) {
            $options['options']['max_range'] = (int) $max;
        }

        return filter_var($value, FILTER_VALIDATE_INT, $options) !== false;
    }

    /**
     * Validate boolean value.
     * Returns true/false or null if parsing fails.
     *
     * @param mixed $value
     * @return bool|null
     */
    public static function bool($value)
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }

    /**
     * Validate URL.
     *
     * @param mixed $url
     * @param int   $flags
     * @return bool
     */
    public static function url($url, $flags = 0)
    {
        return filter_var($url, FILTER_VALIDATE_URL, $flags) !== false;
    }

    /**
     * Get input value by name and method.
     *
     * @param string $name
     * @param int    $method
     * @param int    $filter
     * @param mixed  $options
     * @return mixed
     */
    public static function input($name, $method = INPUT_GET, $filter = FILTER_DEFAULT, $options = 0)
    {
        return filter_input($method, $name, $filter, $options);
    }

    /**
     * Validate date by format.
     *
     * @param string $value
     * @param string $format
     * @return bool
     */
    public static function date($value, $format = 'Y-m-d')
    {
        $dt = \DateTime::createFromFormat($format, $value);
        return $dt instanceof \DateTime && $dt->format($format) === $value;
    }

    /**
     * Validate time by format.
     *
     * @param string $value
     * @param string $format
     * @return bool
     */
    public static function time($value, $format = 'H:i')
    {
        $dt = \DateTime::createFromFormat($format, $value);
        return $dt instanceof \DateTime && $dt->format($format) === $value;
    }

    /**
     * Validate full date-time string.
     *
     * @param string $value
     * @param string $format
     * @return bool
     */
    public static function dateTime($value, $format = \DateTime::ATOM)
    {
        $dt = \DateTime::createFromFormat($format, $value);
        return $dt instanceof \DateTime && $dt->format($format) === $value;
    }
}
