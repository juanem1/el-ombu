<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Repositories\ComplexRepository;
use App\Http\Requests\UpdateComplexRequest;
use App\Http\Requests\CreateComplexRequest;

class ComplexController extends Controller
{

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
     * @param $formBuilder FormBuilder
     * @return Response
     */
    public function create(FormBuilder $formBuilder)
    {
        return $this->makeCreate('complex', $formBuilder);
    }

	/**
	 * Store a newly created resource in storage.
	 * @param $request
	 * @return Response
	 */
	public function store(CreateComplexRequest $request)
	{
        $this->repository->create($request->all());
        return redirect()->route('complex.index')->withSuccess(true);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return redirect()->route('complex.edit', $id);
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
        return $this->makeEdit('complex', $model, $formBuilder);
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  $id
     * @param  $request
	 * @return Response
	 */
	public function update($id, UpdateComplexRequest $request)
	{
        $this->repository->find($id)->update($request->all());
        return redirect()->route('complex.index')->withSuccess('El complejo se actualizo correctamente.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->repository->find($id)->delete();
        return redirect()->route('complex.index')->withSuccess('El complejo se elimino correctamente.');
	}

}
