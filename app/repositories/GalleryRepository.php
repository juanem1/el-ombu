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

    /**
     * Show one gallery
     * @param $id Integer
     * @return mixed
     */
    public function find($id)
    {
        return Gallery::find($id);
    }

}
