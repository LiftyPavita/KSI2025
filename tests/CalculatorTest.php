<?php
use PHPUnit\Framework\TestCase;

// Sesuaikan path ke Calculator.php
require_once __DIR__ . '/../Calculator.php';

class CalculatorTest extends TestCase {

    public function testAdd() {
        $calc = new Calculator();
        $this->assertEquals(5, $calc->add(2, 3));
    }

    public function testSubtract() {
        $calc = new Calculator();
        $this->assertEquals(1, $calc->subtract(3, 2));
    }
}
?>
