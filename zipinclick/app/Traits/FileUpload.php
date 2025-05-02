<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

trait FileUpload
{

    public function uploadFile(UploadedFile $file, string $dir='uploads', string $disk='public'): ?string
    {
        // Validate Disk Type
        if (!in_array($disk,['public','local'])) {
            throw new \Exception("Invalid Disk Type. Only 'public' and 'local' are allowed.");
        }

        //Handle File Upload
       try {
            $fileName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs($dir, $fileName, $disk);
            $filePath = $file->storeAs($dir, $fileName, $disk);
            return "$dir/$fileName";
        } catch (\Throwable $th) {

            throw $th;
        }

        return null;
    }


    public function deleteFile(string $filePath, string $disk='public') : bool
    {
        if (!in_array($disk,['public','local'])) {
            throw new \Exception("Invalid Disk Type. Only 'public' and 'local' are allowed.");
        }
        if($disk == "public"){
            if(File::exists(public_path($filePath))){
                File::delete(public_path($filePath));
                return true;
            }else{
                if(File::exists(storage_path("app/$filePath"))){
                    File::delete(storage_path("app/$filePath"));
                    return true;
                }
            }
        }
        return false;
    }


}

