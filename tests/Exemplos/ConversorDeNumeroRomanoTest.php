<?php

declare(strict_types=1);

namespace Tests\Exemplos;

use PHPUnit\Framework\Attributes\DataProvider;
use Exemplos\ConversorDeNumeroRomano;
use tests\TestCase;

class ConversorDeNumeroRomanoTest extends TestCase
{
    public static function numeroRomanoProvider(): array
    {
        return [
            [1, "I"],
            [5, "V"],
            [2, "II"],
            [22, "XXII"],
            [4, "IV"],
            [9, "IX"],
            [24, "XXIV"],
        ];
    }

    #[DataProvider('numeroRomanoProvider')]
    public function test_deve_entender_o_simbolo_I(int $expect, string $numeroRomano): void
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte($numeroRomano);

        $this->assertEquals($expect, $numero);
    }
}
