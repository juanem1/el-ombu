<?php

namespace App\Repositories;

use App\Images;

class ImagesRepository
{

    /**
     * Get all products
     * @return mixed
     */
    public function all()
    {
        return Images::all();
    }

}
