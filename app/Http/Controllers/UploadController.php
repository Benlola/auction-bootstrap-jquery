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
        foreach ($request->media ?? [] as $index => $media) {
            try {
                $file_name = $media->getClientOriginalName();
                $files[$index] = [
                    'folder' => $folder,
                    'name'   => $media->getClientOriginalName(),
                ];
                $this->disk->putFileAs($folder, $media, $file_name);
            } catch (\Exception $exp) {
                return response()->json($exp->getMessage(), 400);
            }
        }

        return $files ?? [];
    }


}
