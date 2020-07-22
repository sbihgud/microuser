<?php

namespace anonymity\micro\interfaces;

interface UserServiceInterFace
{
    /**
     * 加
     * @param int $a
     * @param int $b
     * @return mixed
     */
    public function bcAdds(int $a, int $b);

    /**
     * 减
     * @param int $a
     * @param int $b
     * @return mixed
     */
    public function bcSubs(int $a, int $b);
}