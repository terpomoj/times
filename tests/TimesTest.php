<?php

namespace Terpomoj\Times\Tests;

use PHPUnit\Framework\TestCase;
use Terpomoj\Times\Times;

class TimesTest extends TestCase
{
    public function test_it_can_repeat(): void
    {
        $total = 0;

        Times::of(10)->do(function ($i) use (&$total) {
            $total += ($i + 1);
        });

        self::assertEquals(55, $total);
    }
}
