<?php

declare(strict_types=1);

namespace Exemplos;

class ConversorDeNumeroRomano
{
    protected array $tabela = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    public function converte(string $numeroRomano): int
    {
        $acumulador = 0;
        $ultimoVizinhoDaDireita = 0;
        for ($i = strlen($numeroRomano) - 1; $i >= 0; $i--) {
            $atual = 0;
            $numCorrente = $numeroRomano[$i];
            if (array_key_exists($numCorrente, $this->tabela)) {
                $atual += $this->tabela[$numCorrente];
            }

            $multiplicador = 1;
            if ($atual < $ultimoVizinhoDaDireita) {
                $multiplicador = -1;
            }

            $acumulador += ($atual * $multiplicador);
            $ultimoVizinhoDaDireita = $atual;
        }
        return $acumulador;
    }
}
