<?php
/**
 * Tests for APIBridgePlus
 */

use PHPUnit\Framework\TestCase;
use Apibridgeplus\Apibridgeplus;

class ApibridgeplusTest extends TestCase {
    private Apibridgeplus $instance;

    protected function setUp(): void {
        $this->instance = new Apibridgeplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apibridgeplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
