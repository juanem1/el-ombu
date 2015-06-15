<?php namespace App\Http\Controllers;

use App\Repositories\OffersRepository;

class HomeController extends Controller {

    protected $repository;

	public function __construct(OffersRepository $repo)
	{
		//$this->middleware('auth');
        $this->repository = $repo;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $offers = $this->repository->getHomeOffers();
        return view('home.index', ['offers' => $offers]);
	}

}
