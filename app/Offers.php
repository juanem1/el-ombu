<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model {

    protected $fillable = [
        'title',
        'price',
        'product_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function products()
    {
        return $this->hasOne('App\Products', 'id', 'product_id');
    }

}
