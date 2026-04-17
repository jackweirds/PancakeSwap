<?php
/**
 * Tests for PancakeSwap
 */

use PHPUnit\Framework\TestCase;
use Pancakeswap\Pancakeswap;

class PancakeswapTest extends TestCase {
    private Pancakeswap $instance;

    protected function setUp(): void {
        $this->instance = new Pancakeswap(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pancakeswap::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
