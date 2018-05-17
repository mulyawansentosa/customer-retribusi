<?php namespace Bantenprov\CustomerRetribusi\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\CustomerRetribusi\Facades\CustomerRetribusi;
use Bantenprov\CustomerRetribusi\Models\CustomerRetribusiModel;

/**
 * The CustomerRetribusiController class.
 *
 * @package Bantenprov\CustomerRetribusi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerRetribusiController extends Controller
{
    public function demo()
    {
        return CustomerRetribusi::welcome();
    }
}
