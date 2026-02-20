<?php
/**
 * Tests for PangolinDex
 */

use PHPUnit\Framework\TestCase;
use Pangolindex\Pangolindex;

class PangolindexTest extends TestCase {
    private Pangolindex $instance;

    protected function setUp(): void {
        $this->instance = new Pangolindex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pangolindex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
