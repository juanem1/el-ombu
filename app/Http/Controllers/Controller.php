<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    /**
     * @param $name
     * @param $formBuilder
     * @return \Illuminate\View\View
     */
    public function makeCreate($name, $formBuilder)
    {
        $formPath = 'App\\Forms\\' . ucfirst($name);

        $form = $formBuilder->create($formPath, [
            'method' => 'POST',
            'url' => route("$name.store")
        ]);

        return view("$name.create", compact('form'));
    }

    /**
     * @param $name
     * @param $model
     * @param $formBuilder
     * @return \Illuminate\View\View
     */
    public function makeEdit($name, $model, $formBuilder)
    {
        $formPath = 'App\\Forms\\' . ucfirst($name);

        $form = $formBuilder->create($formPath, [
            'method' => 'PATCH',
            'url' => route("$name.update", $model->id),
            'model' => $model
        ]);

        return view("$name.edit", compact('form'));
    }

}
