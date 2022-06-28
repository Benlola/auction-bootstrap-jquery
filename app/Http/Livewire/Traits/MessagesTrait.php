<?php

namespace App\Http\Livewire\Traits;

trait MessagesTrait
{

    public function message($message, $status = 'success')
    {
        $this->emit('notify', [
            'status'  => $status,
            'message' => $message,
        ]);
    }

    public function confirm($id, $message, $method)
    {
        $this->emit("confirm", [
            'message' => $message,
            'method'  => $method,
            'param'   => $id,
        ]);
    }

}
