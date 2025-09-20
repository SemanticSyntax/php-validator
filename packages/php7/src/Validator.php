<?php

/**
 * SemanticSyntax Validator for PHP 7.4
 *
 * Strict-typed validation helpers for modern PHP 7.4 applications.
 * This library is part of the SemanticSyntax brand: writing code that is both
 * syntactically valid and semantically meaningful.
 *
 * @package   SemanticSyntax\Validation
 * @subpackage Validator
 * @author    SemanticSyntax <https://github.com/SemanticSyntax>
 * @copyright 2025 SemanticSyntax
 * @license   MIT
 */

declare(strict_types=1);

namespace SemanticSyntax\Validation;

final class Validator
{
    /**
     * Validate email address.
     *
     * @param string $email Email address to validate.
     * @return boolean True if the email is valid, false otherwise.
     */
    public static function email(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Validate IP address.
     *
     * @param string  $ip    The IP address to validate.
     * @param integer $flags Optional validation flags (e.g., FILTER_FLAG_IPV4).
     * @return boolean True if the IP is valid, false otherwise.
     */
    public static function ip(string $ip, int $flags = 0): bool
    {
        return filter_var($ip, FILTER_VALIDATE_IP, $flags) !== false;
    }

    /**
     * Validate integer within an optional range.
     *
     * @param mixed        $value Value to validate as integer.
     * @param integer|null $min   Minimum allowed value (inclusive).
     * @param integer|null $max   Maximum allowed value (inclusive).
     * @return boolean True if the value is a valid integer in range, false otherwise.
     */
    public static function int($value, ?int $min = null, ?int $max = null): bool
    {
        $options = ['options' => []];
        if ($min !== null) {
            $options['options']['min_range'] = $min;
        }
        if ($max !== null) {
            $options['options']['max_range'] = $max;
        }

        return filter_var($value, FILTER_VALIDATE_INT, $options) !== false;
    }

    /**
     * Validate boolean value.
     * Returns true/false, or null if parsing fails.
     *
     * @param mixed $value Value to validate as boolean.
     * @return boolean|null True/false if valid, null if parsing fails.
     */
    public static function bool($value): ?bool
    {
        /** @var bool|null $result */
        $result = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        return $result;
    }

    /**
     * Validate URL.
     *
     * @param string  $url   The URL to validate.
     * @param integer $flags Optional validation flags (e.g., FILTER_FLAG_PATH_REQUIRED).
     * @return boolean True if the URL is valid, false otherwise.
     */
    public static function url(string $url, int $flags = 0): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL, $flags) !== false;
    }

    /**
     * Get input value by name and method.
     *
     * @param string        $name    Input field name.
     * @param integer       $method  Input type (e.g., INPUT_GET, INPUT_POST).
     * @param integer       $filter  Filter constant (e.g., FILTER_SANITIZE_STRING).
     * @param array|integer $options Optional filter options.
     * @phpstan-param array<string, mixed>|int $options
     * @return mixed The filtered value, or null/false if not found or invalid.
     */
    public static function input(
        string $name,
        int $method = INPUT_GET,
        int $filter = FILTER_DEFAULT,
        $options = 0
    ) {
        return filter_input($method, $name, $filter, $options);
    }

    /**
     * Validate date by format.
     *
     * @param string $value  The date string to validate.
     * @param string $format Expected format (default: 'Y-m-d').
     * @return boolean True if the date is valid, false otherwise.
     */
    public static function date(string $value, string $format = 'Y-m-d'): bool
    {
        $dt = \DateTime::createFromFormat($format, $value);
        return $dt !== false && $dt->format($format) === $value;
    }

    /**
     * Validate time by format.
     *
     * @param string $value  The time string to validate.
     * @param string $format Expected format (default: 'H:i').
     * @return boolean True if the time is valid, false otherwise.
     */
    public static function time(string $value, string $format = 'H:i'): bool
    {
        $dt = \DateTime::createFromFormat($format, $value);
        return $dt !== false && $dt->format($format) === $value;
    }

    /**
     * Validate full date-time string.
     *
     * @param string $value  The date-time string to validate.
     * @param string $format Expected format (default: DateTime::ATOM).
     * @return boolean True if the date-time is valid, false otherwise.
     */
    public static function dateTime(string $value, string $format = \DateTime::ATOM): bool
    {
        $dt = \DateTime::createFromFormat($format, $value);
        return $dt !== false && $dt->format($format) === $value;
    }
}
