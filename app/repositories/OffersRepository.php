<?php namespace App\Repositories;

use App\Offers;

class OffersRepository
{

    /**
     * @return mixed
     */
    public function getHomeOffers() {
        return Offers::with('products')->take(8)->get();
    }

    /**
     * Get One product
     * @param $slug
     * @return mixed
     */
    public function find($slug) {
        return Offers::with('products')->whereSlug($slug)->first();
    }

    /**
     * Get all offers
     * @return mixed
     */
    public function all() {
        return Offers::with('products')->get();
    }

//    /**
//     * Obtiene el inventario general
//     */
//    public function getGeneral()
//    {
//        $raw = DB::raw('SUM(stock) AS stock, SUM(production) AS production');
//        return DB::table('inventories')->select($raw)->get();
//    }
//
//    /**
//     * Obtiene el inventario por producto
//     */
//    public function getAllByProduct()
//    {
//        return Inventory::with('product')->get();
//    }
//
//    /**
//     * Devuelve un listado de los IDs de los productos
//     * que no tienen un inventario asociado
//     */
//    public function getProductList()
//    {
//        $inventoryIds = Inventory::lists('product_id');
//        $productIds = Product::select('id')->whereNotIn('id', $inventoryIds)->get();
//        $products = $productIds->lists('id', 'id');
//
//        // En caso de tener un producto seteado por query string
//        $queryStringId = Input::get('product');
//        if ( ! is_null($queryStringId) && in_array($queryStringId, $products)) {
//            return [$queryStringId];
//        }
//
//        return $products;
//    }



}
