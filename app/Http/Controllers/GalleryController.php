<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\GalleryRepository;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Requests\CreateGalleryRequest;

class GalleryController extends Controller
{

    private $repository;

    public function __construct(GalleryRepository $repo)
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
        $galleries = $this->repository->all();

        return view('gallery.index', compact('galleries'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @param $formBuilder FormBuilder
	 * @return Response
	 */
	public function create(FormBuilder $formBuilder)
	{
        return $this->makeCreate('gallery', $formBuilder);
	}

	/**
	 * Store a newly created resource in storage.
	 * @param $request
	 * @return Response
	 */
	public function store(CreateGalleryRequest $request)
	{
        $this->repository->create($request->all());
        return redirect()->route('gallery.index')->withSuccess('La galeria se creo con éxito.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return redirect()->route('gallery.edit', $id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  $id Integer
	 * @param  $formBuilder FormBuilder
	 * @return Response
	 */
	public function edit($id, FormBuilder $formBuilder)
	{
        $model = $this->repository->find($id);
        return $this->makeEdit('gallery', $model, $formBuilder);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  $id
     * @param  $request
	 * @return Response
	 */
	public function update($id, UpdateGalleryRequest $request)
	{
        $this->repository->find($id)->update($request->all());
        return redirect()->route('gallery.index')->withSuccess('La galeria se actualizo correctamente.');
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
        return redirect()->route('gallery.index')->withSuccess('La galeria se elimino correctamente.');
	}

}
