<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    protected $disk;

    public function __construct()
    {
        $this->disk = Storage::disk('uploads');
    }

    public function store(Request $request)
    {
        $folder = uniqid();
        foreach ($request->media ?? [] as $collection_name => $files) {
            try {
                foreach ($files as $file){
                    $file_name = $file->getClientOriginalName();
                    $result[$collection_name] = [
                        'folder' => $folder,
                        'name'   => $file_name,
                    ];
                    $this->disk->putFileAs($folder, $file, $file_name);
                }

            } catch (\Exception $exp) {
                return response()->json($exp->getMessage(), 400);
            }
        }

        return $result ?? [];
    }


}
