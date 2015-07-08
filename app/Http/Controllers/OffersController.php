<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\OffersRepository;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\UpdateOffersRequest;
use App\Http\Requests\CreateOffersRequest;

class OffersController extends Controller {

    private $repository;

    public function __construct(OffersRepository $repo)
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
        $offers = $this->repository->all();
		return view('offers.index', compact('offers'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @param $formBuilder
     * @return Response
     */
    public function create(FormBuilder $formBuilder)
    {
        return $this->makeCreate('offers', $formBuilder);
    }

	/**
	 * Store a newly created resource in storage.
	 * @param $request
	 * @return Response
	 */
	public function store(CreateOffersRequest $request)
	{
        $this->repository->create($request->all());
        return redirect()->route('offers.index')->withSuccess(true);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return redirect()->route('offers.edit', $id);
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
        return $this->makeEdit('offers', $model, $formBuilder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param UpdateOffersRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
	public function update($id, UpdateOffersRequest $request)
	{
        $this->repository->find($id)->update($request->all());
        return redirect()->route('offers.index')->withSuccess(true);
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
