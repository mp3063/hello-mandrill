<?php

namespace Stripsus\LaravelMandrillMail;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stripsus\LaravelMandrillMail\Skeleton\SkeletonClass
 */
class LaravelMandrillMailFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-mandrill-mail';
    }
}
