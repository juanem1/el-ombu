<?php

namespace App\Repositories;

use App\Complex;

class ComplexRepository
{

    /**
     * Get all products
     * @return mixed
     */
    public function all()
    {
        return Complex::all();
    }

    /**
     * Show one complex
     * @param $id Integer
     * @return mixed
     */
    public function show($id)
    {
        return Complex::find($id);
    }

}
