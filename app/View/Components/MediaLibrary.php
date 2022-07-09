<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Illuminate\View\View;

class MediaLibrary extends Component {

    public $model;

    public $table;

    public $route;

    public $collection_name;

    public $categories;


    public function __construct( Model $model, $collection_name = 'product' ) {
        $this->model           = $model;
        $this->table           = with( new $model() )->getTable();
        $this->route           = Route::currentRouteName();
        $this->collection_name = $collection_name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View {

        if ( $this->model instanceof Product ) {
            $this->categories = Category::query()
                                        ->where( "id", $this->model->category_id )
                                        ->first( "media_category" );
        }

        return view( 'components.media-library', [
            'model'           => $this->model,
            'table'           => $this->table,
            'route'           => $this->route,
            'collection_name' => $this->collection_name,
            'media_category'  => $this->categories->media_category ?? [],
        ] );
    }

}
