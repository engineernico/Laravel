<?php

namespace App\Traits;

Trait  ImageMethod
{
    public function upload_image($photo, $folder)
    {

        $file_extension = $photo->getClientOriginalExtension();  // jpg
        $image_name = time() . '.' . $file_extension; // 201925364532154.jpg
        $path = $folder;                            // aimages/form
        $photo->move($image_name, $path);
        return $image_name;  // 201925364532154.jpg

    }
}
