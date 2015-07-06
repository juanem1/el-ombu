<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

    protected $fillable = [
        'title',
        'description'
    ];

    public function images()
    {
        return $this->hasMany('App\Images');
    }

}
