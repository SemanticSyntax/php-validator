<?php
/**
 * Tests for SemanticSyntax Validator (PHP 5.6)
 *
 * This suite validates the behavior of the legacy-compatible Validator class.
 * It ensures consistent API behavior with newer versions (PHP 7.4, 8.1+),
 * while remaining compatible with PHP 5.6.
 *
 * @package    SemanticSyntax\Validation\Tests
 * @author     SemanticSyntax <https://github.com/SemanticSyntax>
 * @license    MIT
 */

require_once __DIR__ . '/../vendor/autoload.php';

use SemanticSyntax\Validation\Validator;

class ValidatorTest extends PHPUnit_Framework_TestCase
{
    public function testEmail()
    {
        $this->assertTrue(Validator::email('hi@example.com'));
        $this->assertFalse(Validator::email('bad@'));
        $this->assertFalse(Validator::email(''));
    }

    public function testIp()
    {
        $this->assertTrue(Validator::ip('192.168.0.1'));
        $this->assertFalse(Validator::ip('999.999.999.999'));
    }

    public function testInt()
    {
        $this->assertTrue(Validator::int('42', 1, 100));
        $this->assertFalse(Validator::int('200', 1, 100));
        $this->assertFalse(Validator::int('abc'));
    }

    public function testBool()
    {
        $this->assertTrue(Validator::bool('yes'));
        $this->assertFalse(Validator::bool('no'));
        $this->assertNull(Validator::bool('not-a-bool'));
    }

    public function testUrl()
    {
        $this->assertTrue(Validator::url('https://example.com'));
        $this->assertFalse(Validator::url('not-a-url'));
    }

    public function testDate()
    {
        $this->assertTrue(Validator::date('2025-09-17'));
        $this->assertFalse(Validator::date('2025-13-01'));
    }

    public function testTime()
    {
        $this->assertTrue(Validator::time('23:45'));
        $this->assertFalse(Validator::time('25:61'));
    }

    public function testDateTime()
    {
        $this->assertTrue(Validator::dateTime('2025-09-17T23:45:00+00:00'));
        $this->assertFalse(Validator::dateTime('2025-99-99T99:99:99+00:00'));
    }
}
