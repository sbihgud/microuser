<?php

namespace anonymity\micro\interfaces;

use anonymity\micro\common\DTO\BcSubDTO;

interface UserServiceInterFace
{
    /**
     * 加
     * @param BcSubDTO $subDTO
     * @return mixed
     */
    public function bcAdds(BcSubDTO $subDTO);

    /**
     * 减
     * @param BcSubDTO $subDTO
     * @return mixed
     */
    public function bcSubs(BcSubDTO $subDTO);
}