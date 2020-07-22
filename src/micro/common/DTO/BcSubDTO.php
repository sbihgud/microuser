<?php


namespace anonymity\micro\common\DTO;


class BcSubDTO
{
    /**
     * @var float
     */
    private $a;

    /**
     * @var float
     */
    private $b;

    /**
     * @return float
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @param float $a
     */
    public function setA(float $a)
    {
        $this->a = $a;
    }

    /**
     * @return float
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @param float $b
     */
    public function setB(float $b)
    {
        $this->b = $b;
    }


}