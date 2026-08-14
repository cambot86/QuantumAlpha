<?php
/**
 * Tests for QuantumAlpha
 */

use PHPUnit\Framework\TestCase;
use Quantumalpha\Quantumalpha;

class QuantumalphaTest extends TestCase {
    private Quantumalpha $instance;

    protected function setUp(): void {
        $this->instance = new Quantumalpha(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Quantumalpha::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
