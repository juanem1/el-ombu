<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model {

    protected $fillable = [
        'gallery_id',
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gallery()
    {
        return $this->hasOne('App\Gallery', 'id', 'gallery_id');
    }

}
