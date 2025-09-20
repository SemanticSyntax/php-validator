<?php

/**
 * SemanticSyntax Validator for 8.1+
 *
 * Lightweight, strict-typed validation helpers for modern PHP applications.
 * This library is part of the SemanticSyntax brand: writing code that is both
 * syntactically valid and semantically meaningful.
 *
 * @package    SemanticSyntax\Validation
 * @subpackage Validator
 * @author     SemanticSyntax <https://github.com/SemanticSyntax>
 * @copyright  2025 SemanticSyntax
 * @license    MIT
 */

declare(strict_types=1);

namespace SemanticSyntax\Validation;

final class Validator
{
    /**
     * Validate an email address.
     *
     * @param string $email Email address to validate.
     * @return boolean True if the email is valid, false otherwise.
     */
    public static function email(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Validate an IP address.
     *
     * @param string  $ip    IP address to validate.
     * @param integer $flags Optional validation flags (e.g., FILTER_FLAG_IPV4).
     * @return boolean True if the IP is valid, false otherwise.
     */
    public static function ip(string $ip, int $flags = 0): bool
    {
        return filter_var($ip, FILTER_VALIDATE_IP, $flags) !== false;
    }

    /**
     * Validate an integer within an optional range.
     *
     * @param mixed        $value Value to validate as integer.
     * @param integer|null $min   Minimum allowed value (inclusive).
     * @param integer|null $max   Maximum allowed value (inclusive).
     * @return boolean True if the value is a valid integer in range, false otherwise.
     */
    public static function int(mixed $value, ?int $min = null, ?int $max = null): bool
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
     * Validate a boolean value.
     *
     * Returns true/false if valid, or null if parsing fails.
     *
     * @param mixed $value Value to validate as boolean.
     * @return boolean|null True/false if valid, null if parsing fails.
     */
    public static function bool(mixed $value): ?bool
    {
        /** @var bool|null $result */
        $result = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        return $result;
    }

    /**
     * Validate a URL.
     *
     * @param string  $url   URL to validate.
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
     * @param string                       $name    Input field name.
     * @param integer                      $method  Input type (e.g., INPUT_GET, INPUT_POST).
     * @param integer                      $filter  Filter constant (e.g., FILTER_SANITIZE_STRING).
     * @param array<string, mixed>|integer $options Optional filter options.
     *
     * @return mixed The filtered value, or null/false if not found or invalid.
     */
    public static function input(
        string $name,
        int $method = INPUT_GET,
        int $filter = FILTER_DEFAULT,
        array|int $options = 0
    ): mixed {
        return filter_input($method, $name, $filter, $options);
    }

    /**
     * Validate a date by format.
     *
     * @param string $value  Date string to validate.
     * @param string $format Expected format (default: 'Y-m-d').
     * @return boolean True if the date matches the format, false otherwise.
     */
    public static function date(string $value, string $format = 'Y-m-d'): bool
    {
        $dt = \DateTimeImmutable::createFromFormat($format, $value);
        return $dt !== false && $dt->format($format) === $value;
    }

    /**
     * Validate a time by format.
     *
     * @param string $value  Time string to validate.
     * @param string $format Expected format (default: 'H:i').
     * @return boolean True if the time matches the format, false otherwise.
     */
    public static function time(string $value, string $format = 'H:i'): bool
    {
        $dt = \DateTimeImmutable::createFromFormat($format, $value);
        return $dt !== false && $dt->format($format) === $value;
    }

    /**
     * Validate a full date-time string.
     *
     * @param string $value  Date-time string to validate.
     * @param string $format Expected format (default: DateTimeInterface::ATOM).
     * @return boolean True if the date-time matches the format, false otherwise.
     */
    public static function dateTime(string $value, string $format = \DateTimeInterface::ATOM): bool
    {
        $dt = \DateTimeImmutable::createFromFormat($format, $value);
        return $dt !== false && $dt->format($format) === $value;
    }
}
