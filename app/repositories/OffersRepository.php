<?php namespace App\Repositories;

use App\Offers;

class OffersRepository
{

    public function getHomeOffers() {
        return $offers = Offers::with('images')->take(8)->get();
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
