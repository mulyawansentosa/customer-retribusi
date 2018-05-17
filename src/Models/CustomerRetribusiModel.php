<?php namespace Bantenprov\CustomerRetribusi\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The CustomerRetribusiModel class.
 *
 * @package Bantenprov\CustomerRetribusi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerRetribusiModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'customer_retribusi';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
