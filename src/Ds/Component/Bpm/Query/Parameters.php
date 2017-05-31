<?php

namespace Ds\Component\Bpm\Query;

/**
 * Interface Parameters
 */
interface Parameters
{
    /**
     * Cast parameters to array
     *
     * @param boolean $minimal
     * @return \stdClass
     */
    public function toObject($minimal = false);
}
