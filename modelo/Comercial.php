<?php

require_once("IConsumidorEnergia.php");

class Comercial implements IConsumidorEnergia
{
    private $consumo;
    
    public function getValorFatura()
    {
        if ($this->consumo <= 100) 
        {
            return $this->consumo * 1.45;
        }else{
            return $this->consumo * 1.60;
        }
    }

    public function getConsumo()
    {
        return $this->consumo;
    }

    public function setConsumo($consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}