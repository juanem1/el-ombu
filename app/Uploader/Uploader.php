<?php

namespace App\Uploader;

class Uploader
{

    /**
     * Upload all images
     * @param $images
     * @return String The name of the stored image
     */
    public function upload( $images )
    {
        foreach($images as $file) {
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $name = str_slug($filename) . '.' . $file->getClientOriginalExtension();
            $file->move(
                public_path() . '/img/images/', $name
            );
            return $name;
        }
    }

}