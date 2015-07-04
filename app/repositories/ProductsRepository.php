<?php

namespace App\Repositories;

use App\Products;

class ProductsRepository
{

    /**
     * Get One product
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Products::find($id);
    }

    /**
     * Get all products
     * @return mixed
     */
    public function all()
    {
        return Products::all();
    }

    /**
     * Show one product
     * @param $id Integer
     * @return mixed
     */
    public function show($id)
    {
        return Products::find($id);
    }

}
