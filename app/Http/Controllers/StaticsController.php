<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticsController extends Controller {

	public function ficha()
	{
        return view('statics.ficha-tecnica');
	}

	public function vivienda()
	{
        return view('statics.vivienda');
	}

	public function empresa()
	{
        return view('statics.la-empresa');
	}

    public function formasDePago()
    {
        return view('statics.formas-de-pagos');
    }
}
