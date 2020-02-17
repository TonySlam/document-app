<?php
/**
 * Created by PhpStorm.
 * User: Slamtony
 * Date: 2019/11/22
 * Time: 3:14 PM
 */

namespace App\Helpers;


class ImageUploadHelpers
{
    /**
     * This function allows to upload image file and insert into public directory
     * @param  $directory
     * @param $input
     * @return mixed
     */
    public static function imageUpload($directory, $input)
    {
        $image = $input;
        $new_name = "uploaded_".rand().'.'.$image->getClientOriginalExtension();
        $upload = $image->move(public_path(). $directory, $new_name);
        return $upload;

    }
}