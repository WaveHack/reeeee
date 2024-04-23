<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use RuntimeException;

class ReeeeeTest extends TestCase
{
    protected int $amountOfEes = 15;

    public function testR(): void
    {
        $this->markAsRisky();
    }

    /**
     * @dataProvider eeeeeProvider
     */
    public function testBunchOfEes(): void
    {
        throw new RuntimeException('REEEEEEE!!');
    }

    public function eeeeeProvider(): array
    {
        return array_fill(0, $this->amountOfEes, []);
    }

    /**
     * End the sentence with a period because we're civilized.
     */
    public function testDot(): void
    {
        $this->assertTrue(true);
    }
}
