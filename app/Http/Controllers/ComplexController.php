<?php namespace App\Http\Controllers;

use App\Complex;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Images;
use App\Repositories\ComplexRepository;
use Illuminate\Http\Request;

class ComplexController extends Controller {

    private $repository;

    public function __construct(ComplexRepository $repo)
    {
        $this->middleware('auth');
        $this->repository = $repo;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $complexes = $this->repository->all();

        return view('complex.index', compact('complexes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return $this->repository->show($id);
	}

    /**
     * Display the specified from its slug
     *
     * @param  String $slug
     * @return Response
     */
    public function view($slug)
    {
        $complex = Complex::whereSlug($slug)->first();
        $images = Images::where('gallery_id', $complex->gallery_id)->get()->toArray();
        //dd($images);
        return view('complex.view', compact('complex', 'images'));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
