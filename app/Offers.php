<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model {

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gallery()
    {
        return $this->hasOne('App\Gallery', 'id', 'gallery_id');
    }

    public function images()
    {
        return $this->hasMany('App\Images', 'gallery_id', 'gallery_id');
    }

}
