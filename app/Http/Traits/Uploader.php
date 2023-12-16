<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait Uploader
{
    public function upload($file, $fileUrl, $oldImag = null)
    {
        try{
            $path = $file->storePublicly($fileUrl, 's3');
            Storage::disk('s3')->url($path);
            $file = explode('/', $path);
            $fileName = $file[array_key_last($file)];

            if(!is_null($oldImag)) {

                if (Storage::disk('s3')->exists($fileUrl . DIRECTORY_SEPARATOR . $oldImag)) {
                    Storage::disk('s3')->delete($fileUrl . DIRECTORY_SEPARATOR . $oldImag);
                }
            }
            return $fileName;

        }catch (\Exception $e)
        {
            if(\env('APP_ENV') == 'local')
            {
                return $e->getMessage();
            }

            return abort(401);
        }

    }

    public function deleteFile($fileUrl)
    {
        if (Storage::disk('s3')->exists($fileUrl)) {
            Storage::disk('s3')->delete($fileUrl);
        }
        return true;
    }
}
