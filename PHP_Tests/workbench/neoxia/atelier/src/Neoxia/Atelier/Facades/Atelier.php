<?php
/**
 * Created at 2 sept. 2013
 * @package
 */

/**
 * Atelier
 * @package
 * @author c.larcher
 * @copyright (c) 2013
 * @version 1.0
 */
namespace Neoxia\Atelier\Facades;
use Illuminate\Support\Facades\Facade;

class Atelier extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'atelier';
    }
}