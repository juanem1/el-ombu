<?php namespace App\Http\Controllers;

use App\Complex;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
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
     * @param $formBuilder FormBuilder
     * @return Response
     */
    public function create(FormBuilder $formBuilder)
    {
        return $this->makeCreate('complex', $formBuilder);
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
