<?php

declare(strict_types=1);

namespace Tests\Loja\Carrinho;

use Loja\Carrinho\CarrinhoDeCompras;
use Loja\Produto\Produto;
use Tests\TestCase;

class CarrinhoDeComprasTest extends TestCase
{
    private CarrinhoDeCompras $carrinho;

    protected function setUp(): void
    {
        $this->carrinho = new CarrinhoDeCompras();
        parent::setUp();
    }

    public function test_lista_de_produtos(): void
    {
        $lista = (new CarrinhoDeCompras())
            ->adiciona(new Produto('Jogo de Jantar', 200.00, 1))
            ->adiciona(new Produto('Jogo de Pratos', 100.00, 1));

        $this->assertCount(2, $lista->getProdutos());
        $this->assertSame('Jogo de Jantar', $lista->getProdutos()[0]->getNome());
        $this->assertSame(200.00, $lista->getProdutos()[0]->getValorUnitario());
        $this->assertSame(1, $lista->getProdutos()[0]->getQuantidade());

        $this->assertSame('Jogo de Pratos', $lista->getProdutos()[1]->getNome());
        $this->assertSame(100.00, $lista->getProdutos()[1]->getValorUnitario());
        $this->assertSame(1, $lista->getProdutos()[1]->getQuantidade());
    }

    public function test_deve_retornar_zero_se_carrinho_vazio(): void
    {
        $this->assertEquals(0, $this->carrinho->maiorValor());
    }

    public function test_deve_retornar_valor_do_item_se_carrinho_com_1_elemento(): void
    {
        $this->carrinho->adiciona(new Produto("Geladeira", 900.00, 1));

        $this->assertEquals(900.00, $this->carrinho->maiorValor());
    }

    public function test_deve_retornar_maior_valor_se_carrinho_com_muitos_elementos(): void
    {
        $this->carrinho->adiciona(new Produto("Geladeira", 900.00, 1));
        $this->carrinho->adiciona(new Produto('Fogao', 1500.00, 1));
        $this->carrinho->adiciona(new Produto('Maquina de lavar', 750.00, 1));

        $this->assertEquals(1500.00, $this->carrinho->maiorValor());
    }
}
