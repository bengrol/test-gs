<?php

namespace App\Dto;

class CalculateDTO
{

    public float $value_1;
    public float $value_2;


    /**
     * @return float
     */
    public function getValue1(): float
    {
        return $this->value_1;
    }

    /**
     * @param float $value_1
     */
    public function setValue1(float $value_1): void
    {
        $this->value_1 = $value_1;
    }

    /**
     * @return float
     */
    public function getValue2(): float
    {
        return $this->value_2;
    }

    /**
     * @param float $value_2
     */
    public function setValue2(float $value_2): void
    {
        $this->value_2 = $value_2;
    }



}
