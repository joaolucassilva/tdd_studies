<?php

declare(strict_types=1);

namespace CDC\Loja\RH;

enum TabelaCargosEnum: int
{
    case DESENVOLVEDOR = 1;
    case DBA = 2;
    case TESTADOR = 3;
}
