<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryObserver
{
    public function updating(Category $category)
    {
        $media_categories = $category->getOriginal('media_category');
        foreach ($media_categories as $index => $media_category){
            DB::table('media')->where('collection_name', $media_category)
                ->update(['collection_name' => $category->media_category[$index]]);
        }

    }
}
