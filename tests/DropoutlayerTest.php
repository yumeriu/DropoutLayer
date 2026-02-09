<?php
/**
 * Tests for DropoutLayer
 */

use PHPUnit\Framework\TestCase;
use Dropoutlayer\Dropoutlayer;

class DropoutlayerTest extends TestCase {
    private Dropoutlayer $instance;

    protected function setUp(): void {
        $this->instance = new Dropoutlayer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dropoutlayer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
