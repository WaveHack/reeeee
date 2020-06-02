<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestResult;
use PHPUnit\TextUI\DefaultResultPrinter;

/** @noinspection PhpUnused */
class ReeeeePrinter extends DefaultResultPrinter
{
    protected function printRisky(TestResult $result): void
    {
    }

    protected function printErrors(TestResult $result): void
    {
    }

    protected function printFooter(TestResult $result): void
    {
    }
}
