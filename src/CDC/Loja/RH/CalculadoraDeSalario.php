<?php

declare(strict_types=1);

namespace CDC\Loja\RH;

class CalculadoraDeSalario
{
    public function calculaSalario(Funcionario $funcionario): float
    {
        if ($funcionario->getCargo() === TabelaCargosEnum::DESENVOLVEDOR) {
            if ($funcionario->getSalario() > 3000) {
                return $funcionario->getSalario() * 0.8;
            }

            return $funcionario->getSalario() * 0.9;
        }

        return $funcionario->getSalario() * 0.85;
    }
}
