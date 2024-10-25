<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function fileUpload($file, $model, $storageType='local'): array
    {
        try {
            if($storageType == 'local'){
                $extension = $file->getClientOriginalExtension();
                $filename = $model->id.'_'.time().'.'.$extension;

                $path = 'images'.'/'.$model->getTable().'/';

                $folder = public_path('/storage/'.$path);
                if (!File::exists($folder)) {
                File::makeDirectory($folder, 0775, true, true);
                }

                $file->move($folder, $filename);
                $image = url('/storage/' . $path . $filename);

                $datas = [
                'filename' => $filename,
                'filepath' =>'/storage/'.$path.$filename,
                'url'=> $image,
                'original_name'=> $file->getClientOriginalName(),
                'filetype' =>  $file->getClientMimeType(),
                'created_by' => auth()->user()->id,
                ];
                return $datas;
            }
            else{
                return [];
            }
        } catch (Exception $e) {
            return [];
        }
    }
}
