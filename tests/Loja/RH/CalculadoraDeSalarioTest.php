<?php

declare(strict_types=1);

namespace tests\Loja\RH;

use tests\TestCase;
use Loja\RH\CalculadoraDeSalario;
use Loja\RH\Funcionario;
use Loja\RH\TabelaCargosEnum;

class CalculadoraDeSalarioTest extends TestCase
{
    public function test_calculo_salario_desenvolvedores_com_salario_abaixo_do_limite(): void
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Andre", 1500.0, TabelaCargosEnum::DESENVOLVEDOR);

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(1500.0 * 0.9, $salario);
    }

    public function test_calculo_salario_desenvolvedores_com_salario_acima_do_limite(): void
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Andre", 4000.0, TabelaCargosEnum::DESENVOLVEDOR);

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(4000.0 * 0.8, $salario);
    }

    public function test_calculo_salario_para_dbas_com_salario_abaixo_do_limite(): void
    {
        $calculadora = new CalculadoraDeSalario();
        $desenvolvedor = new Funcionario("Andre", 500.0, TabelaCargosEnum::DBA);

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(500.0 * 0.85, $salario);
    }
}
