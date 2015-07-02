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

}
