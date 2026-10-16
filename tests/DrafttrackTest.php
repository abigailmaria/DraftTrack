<?php
/**
 * Tests for DraftTrack
 */

use PHPUnit\Framework\TestCase;
use Drafttrack\Drafttrack;

class DrafttrackTest extends TestCase {
    private Drafttrack $instance;

    protected function setUp(): void {
        $this->instance = new Drafttrack(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Drafttrack::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
