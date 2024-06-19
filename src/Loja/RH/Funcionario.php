<?php

declare(strict_types=1);

namespace Loja\RH;

class Funcionario
{
    public function __construct(
        private readonly string $nome,
        private readonly float $salario,
        private readonly TabelaCargosEnum $cargo,
    ) {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getCargo(): TabelaCargosEnum
    {
        return $this->cargo;
    }
}
