<?php

namespace Alura\DesignPattern\estruturais\decorators;

use Alura\DesignPattern\comportamentais\strategy\Impostos\Icms;
use Alura\DesignPattern\comportamentais\strategy\Impostos\Imposto;
use Alura\DesignPattern\comportamentais\strategy\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

class IcmsComIss implements Imposto
{
	public function calculaImposto(Orcamento $orcamento): float
	{
		return (new Icms())->calculaImposto($orcamento) + (new Iss())->calculaImposto($orcamento);
	}
}
