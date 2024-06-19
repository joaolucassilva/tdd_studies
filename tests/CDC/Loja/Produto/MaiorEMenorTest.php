<?php

declare(strict_types=1);

namespace tests\Loja\Produto;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\MaiorEMenor;
use CDC\Loja\Produto\Produto;
use PHPUnit\Framework\TestCase;

class MaiorEMenorTest extends TestCase
{
    public function test_ordem_decrescente(): void
    {
        $carrinho = new CarrinhoDeCompras();
        $geladeira = new Produto('Geladeira', 450.00);
        $carrinho->adiciona($geladeira);
        $liquidificador = new Produto('Liquidificador', 250.00);
        $carrinho->adiciona($liquidificador);
        $jogoDeProdutos = new Produto('Jogo de Pratos', 70.00);
        $carrinho->adiciona($jogoDeProdutos);

        $maiorEMenor = new MaiorEMenor();
        $maiorEMenor->encontra($carrinho);

        $this->assertEquals("Jogo de Pratos", $maiorEMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorEMenor->getMaior()->getNome());
    }

    public function test_apenas_um_produto(): void
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto('Geladeira', 450.00));

        $maiorEMenor = new MaiorEMenor();
        $maiorEMenor->encontra($carrinho);

        $this->assertInstanceOf(Produto::class, $maiorEMenor->getMenor());
        $this->assertEquals("Geladeira", $maiorEMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorEMenor->getMaior()->getNome());
    }

}
