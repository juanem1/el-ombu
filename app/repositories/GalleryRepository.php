<?php

namespace App\Repositories;

use App\Gallery;

class GalleryRepository
{

    /**
     * Get all products
     * @return mixed
     */
    public function all()
    {
        return Gallery::all();
    }

}
