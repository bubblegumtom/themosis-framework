<?php

namespace Themosis\Support\Facades;

use Themosis\Core\Bus\PendingChain;
use function array_shift;
use function func_get_args;
use function is_array;

class Bus extends \Illuminate\Support\Facades\Bus
{
    /**
     * Dispatch the given chain of jobs.
     * @param array|mixed $jobs
     * @return \Themosis\Core\Bus\PendingDispatch
     */
    public static function dispatchChain($jobs)
    {
        $jobs = is_array($jobs) ? $jobs : func_get_args();

        return (new PendingChain(array_shift($jobs), $jobs))
            ->dispatch();
    }
}