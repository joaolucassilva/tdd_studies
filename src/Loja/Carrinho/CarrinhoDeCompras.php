<?php

declare(strict_types=1);

namespace Loja\Carrinho;

use ArrayObject;
use Loja\Produto\Produto;

class CarrinhoDeCompras
{
    public function __construct(
        private readonly ArrayObject $produtos = new ArrayObject(),
    ) {
    }

    public function adiciona(Produto $produto): self
    {
        $this->produtos->append($produto);
        return $this;
    }

    public function getProdutos(): ArrayObject
    {
        return $this->produtos;
    }

    public function maiorValor(): float
    {
        if (count($this->getProdutos()) === 0) {
            return 0;
        }

        $maiorValor = $this->getProdutos()[0]->getValorUnitario();
        foreach ($this->getProdutos() as $produto) {
            if ($maiorValor < $produto->getValorUnitario()) {
                $maiorValor = $produto->getValorUnitario();
            }
        }

        return $maiorValor;
    }

}
