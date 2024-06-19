<?php

declare(strict_types=1);

namespace tests\Loja\Produto;

use Loja\Carrinho\CarrinhoDeCompras;
use Loja\Produto\MaiorPreco;
use tests\TestCase;

class MaiorPrecoTest extends TestCase
{
    public function test_deve_retornar_zero_se_carrinho_vazio(): void
    {
        $carrinho = new CarrinhoDeCompras();

        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);

        $this->assertEquals(0, $valor);
    }

}
