<?php
namespace Tuntron\SMS\Facades;

use Illuminate\Support\Facades\Facade;

class YunpianSMS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(){
        return 'YunpianSMSService';
    }
}