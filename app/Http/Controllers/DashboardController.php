<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
	 * Show main admin dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('dashboard.index');
	}

}
