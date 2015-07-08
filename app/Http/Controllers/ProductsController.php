<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\ProductsRepository;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\UpdateProductsRequest;
use App\Http\Requests\CreateProductsRequest;

class ProductsController extends Controller
{

    private $repository;

    public function __construct(ProductsRepository $repo)
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
        $products = $this->repository->all();

        return view('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
     *
	 * @param $formBuilder
	 * @return Response
	 */
	public function create(FormBuilder $formBuilder)
	{
        $form = $formBuilder->create('App\Forms\Products', [
            'method' => 'POST',
            'url' => route('products.store'),
        ]);

        return view('products.create', compact('form'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param $request
	 * @return Response
	 */
	public function store(CreateProductsRequest $request)
	{
		$this->repository->create($request->all());
        return redirect()->route('products.index')->withSuccess(true);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return redirect()->route('products.edit', $id);
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
        return $this->makeEdit('products', $model, $formBuilder);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  $id
	 * @param  $request
	 * @return Response
	 */
	public function update($id, UpdateProductsRequest $request)
	{
        $this->repository->find($id)->update($request->all());
        return redirect()->route('products.index')->withSuccess(true);
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
