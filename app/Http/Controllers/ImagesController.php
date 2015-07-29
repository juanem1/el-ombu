<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Repositories\ImagesRepository;
use App\Http\Requests\UpdateImagesRequest;
use App\Http\Requests\CreateImagesRequest;
use App\Uploader\Uploader;

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
	 * @param $request
	 * @param $uploader
	 * @return Response
	 */
	public function store(CreateImagesRequest $request, Uploader $uploader)
	{
        $params = $request->all();
        if ($request->hasFile('name')) {
            $params['name'] = $uploader->upload($request->file());
        }
        $this->repository->create($params);
        return redirect()->route('images.index')->withSuccess(true);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return redirect()->route('images.edit', $id);
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
	 * @param  $id
	 * @param  $request
	 * @param  $uploader
	 * @return Response
	 */
	public function update($id, UpdateImagesRequest $request, Uploader $uploader)
	{
        $params = $request->all();
        if ($request->hasFile('name')) {
            $params['name'] = $uploader->upload($request->file());
        }
        $this->repository->find($id)->update($params);
        return redirect()->route('images.index')->withSuccess('La imagen se actualizo correctamente.');
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
        return redirect()->route('images.index')->withSuccess('La imagen se elimino correctamente.');
	}

}
