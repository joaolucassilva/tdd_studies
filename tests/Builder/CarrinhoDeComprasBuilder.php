<?php

declare(strict_types=1);

namespace Tests\Builder;

use Loja\Carrinho\CarrinhoDeCompras;
use Loja\Produto\Produto;

class CarrinhoDeComprasBuilder
{
    public function __construct(
        public CarrinhoDeCompras $carrinho
    ) {
    }

    public function comItens(): self
    {
        $valores = func_get_args();
        foreach ($valores as $valor) {
            $this->carrinho->adiciona(new Produto("Item", $valor, 1));
        }
        return $this;
    }

    public function cria(): CarrinhoDeCompras
    {
        return $this->carrinho;
    }
}
