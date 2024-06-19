<?php

declare(strict_types=1);

namespace CDC\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras;

class MaiorEMenor
{
    private Produto $menor;
    private Produto $maior;


    public function encontra(CarrinhoDeCompras $carrinho): void
    {
        /**
         * @var Produto $produto
         */
        foreach ($carrinho->getProdutos() as $produto) {
            if (empty($this->menor) || $produto->getValorUnitario() < $this->menor->getValorUnitario()) {
                $this->menor = $produto;
            }
            if (empty($this->maior) || $produto->getValorUnitario() > $this->maior->getValorUnitario()) {
                $this->maior = $produto;
            }
        }
    }

    public function getMenor(): Produto
    {
        return $this->menor;
    }

    public function getMaior(): Produto
    {
        return $this->maior;
    }
}
