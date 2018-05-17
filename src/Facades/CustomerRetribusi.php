<?php namespace Bantenprov\CustomerRetribusi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The CustomerRetribusi facade.
 *
 * @package Bantenprov\CustomerRetribusi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerRetribusi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'customer-retribusi';
    }
}
