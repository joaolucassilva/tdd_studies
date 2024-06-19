<?php

declare(strict_types=1);

namespace Loja\Produto;

class Produto
{
    public function __construct(
        private readonly string $nome,
        private readonly float $valorUnitario,
        private readonly int $quantidade = 1,
    ) {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function getValorTotal(): float
    {
        return $this->valorUnitario * $this->quantidade;
    }
}
