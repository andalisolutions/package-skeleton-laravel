<?php

namespace Andali\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Andali\Skeleton\Skeleton
 */
class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
