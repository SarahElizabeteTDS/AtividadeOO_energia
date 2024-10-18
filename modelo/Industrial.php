<?php

require_once("IConsumidorEnergia.php");

class Industrial implements IConsumidorEnergia
{
    private $consumo;
    
    public function getValorFatura()
    {
        if ($this->consumo <= 500) 
        {
            return $this->consumo * 1.80;
        }else{
            return $this->consumo * 2.30;
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