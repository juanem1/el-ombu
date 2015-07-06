<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use App\Repositories\ImagesRepository;

class ImagesController extends Controller
{

    private $repository;

    public function __construct(ImagesRepository $repo)
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
        $images = $this->repository->all();

        return view('images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new resources
     *
     * @param $formBuilder FormBuilder
	 * @return Response
	 */
	public function create(FormBuilder $formBuilder)
	{
        return $this->makeCreate('images', $formBuilder);
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
        return redirect()->route('image.edit', $id);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
     * @param  $formBuilder
     * @return Response
     */
    public function edit($id, FormBuilder $formBuilder)
    {
        $model = $this->repository->find($id);
        return $this->makeEdit('images', $model, $formBuilder);
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
