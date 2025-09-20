<?php
/**
 * Tests for SemanticSyntax Validator (PHP 8.1+)
 *
 * This suite validates the behavior of the strict-typed Validator class.
 * It ensures API consistency with the PHP 7.4 and legacy PHP 5.6 packages,
 * while taking advantage of modern PHP 8.1+ features.
 * Part of the SemanticSyntax brand: code that makes sense.
 *
 * @package    SemanticSyntax\Validation\Tests
 * @author     SemanticSyntax <https://github.com/SemanticSyntax>
 * @license    MIT
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use SemanticSyntax\Validation\Validator;

final class ValidatorTest extends TestCase
{
    public function testEmail(): void
    {
        self::assertTrue(Validator::email('hi@example.com'));
        self::assertFalse(Validator::email('bad@'));
        self::assertFalse(Validator::email(''));
    }

    public function testIp(): void
    {
        self::assertTrue(Validator::ip('127.0.0.1'));
        self::assertTrue(Validator::ip('::1'));
        self::assertFalse(Validator::ip('999.999.999.999'));
    }

    public function testInt(): void
    {
        self::assertTrue(Validator::int(42, 1, 100));
        self::assertFalse(Validator::int(200, 1, 100));
        self::assertFalse(Validator::int('abc'));
    }

    public function testBool(): void
    {
        self::assertTrue(Validator::bool('yes'));
        self::assertFalse(Validator::bool('no'));
        self::assertNull(Validator::bool('not-a-bool'));
    }

    public function testUrl(): void
    {
        self::assertTrue(Validator::url('https://example.com'));
        self::assertFalse(Validator::url('invalid-url'));
    }

    public function testDate(): void
    {
        self::assertTrue(Validator::date('2025-09-17'));
        self::assertFalse(Validator::date('2025-13-01'));
    }

    public function testTime(): void
    {
        self::assertTrue(Validator::time('23:45'));
        self::assertFalse(Validator::time('25:61'));
    }

    public function testDateTime(): void
    {
        self::assertTrue(Validator::dateTime('2025-09-17T23:45:00+00:00'));
        self::assertFalse(Validator::dateTime('2025-99-99T99:99:99+00:00'));
    }
}
