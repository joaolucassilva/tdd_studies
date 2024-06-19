<?php

declare(strict_types=1);

namespace CDC\Loja\Carrinho;

use ArrayObject;
use CDC\Loja\Produto\Produto;

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

    public function maiorValor(): int
    {
        if (count($this->getProdutos()) === 0) {
            return 0;
        }

        $maiorValor = $this->getProdutos()[0]->getValor();
        foreach ($this->getProdutos() as $produto) {
            if ($maiorValor < $produto->getValor()) {
                $maiorValor = $produto->getValor();
            }
        }

        return $maiorValor;
    }

}
