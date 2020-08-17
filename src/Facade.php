<?php
namespace Balazsbencs\LaravelAcl;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'laravolt.acl';
    }
}