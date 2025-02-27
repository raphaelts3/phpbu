<?php

namespace phpbu\App\Backup\Restore;

use PHPUnit\Framework\TestCase;

class PlanTest extends TestCase
{
    /**
     * Tests Plan::__construct
     */
    public function testEmptyPlan()
    {
        $plan = new Plan();
        $this->assertCount(0, $plan->getDecryptionCommands());
        $this->assertCount(0, $plan->getDecompressionCommands());
        $this->assertCount(0, $plan->getRestoreCommands());
    }

    /**
     * Tests Plan::add...
     */
    public function testAddCmd()
    {
        $plan = new Plan();
        $plan->addDecryptionCommand('foo');
        $plan->addDecompressionCommand('bar');
        $plan->addRestoreCommand('baz');

        $this->assertCount(1, $plan->getDecryptionCommands());
        $this->assertCount(1, $plan->getDecompressionCommands());
        $this->assertCount(1, $plan->getRestoreCommands());
    }
}
