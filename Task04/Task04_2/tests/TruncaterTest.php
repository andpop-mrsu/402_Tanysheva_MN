<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Truncater;

class TruncaterTest extends TestCase
{
    public function testTrancate()
    {
        $truncater1 = new Truncater();
        $truncater2 = new Truncater(['length' => 6]);
        $this -> assertSame(
            "Длинный...",
            $truncater1 -> truncate("Длинный текст!", ['length' => 4])
        );
        $this -> assertSame(
            "Длинный текст!",
            $truncater1 -> truncate("Длинный текст!")
        );
        $this -> assertSame(
            "Длинный текст!...",
            $truncater2 ->
            truncate("Длинный текст!", ['length' => 10, 'separator' => '...'])
        );
        $this -> assertSame(
            "Длинный те...",
            $truncater2 -> truncate("Длинный текст!")
        );
    }
}
