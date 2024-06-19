<?php

declare(strict_types=1);

namespace tests\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\MaiorPreco;
use Tests\CDC\TestCase;

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
