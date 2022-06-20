<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;
use Illuminate\View\View;

class MediaLibrary extends Component
{

    public $model;

    public $table;

    public $route;

    public $collection_name;


    public function __construct(Model $model, $collection_name = 'product')
    {
        $this->model           = $model;
        $this->table           = with(new $model())->getTable();
        $this->route           = Route::currentRouteName();
        $this->collection_name = $collection_name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View
    {
        return view('components.media-library', [
            'model' => $this->model,
            'table' => $this->table,
            'route' => $this->route,
            'collection_name' => $this->collection_name,
        ]);
    }

}
