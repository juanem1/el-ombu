<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {

    protected $fillable = [
        'title',
        'subTitle',
        'shortDescription',
        'longDescription',
        'price',
        'gallery_id',
        'style_id'
    ];

	public function images() {
        return $this->hasMany('App\Images', 'gallery_id', 'gallery_id');
    }

    public function style() {
        return $this->hasOne('App\Styles', 'id', 'style_id');
    }

}
