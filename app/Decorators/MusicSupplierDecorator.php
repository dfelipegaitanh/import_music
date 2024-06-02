<?php

namespace App\Decorators;

use App\Interfaces\MusicSupplier;
use Illuminate\Support\Collection;

class MusicSupplierDecorator implements MusicSupplier
{


    /**
     * @var \App\Interfaces\MusicSupplier
     */
    private MusicSupplier $musicSupplier;


    public function __construct(MusicSupplier $musicSupplier)
    {
        $this->musicSupplier = $musicSupplier;
    }

    public function get(): Collection
    {
        $get = $this->musicSupplier->get();

        return collect($get)
            ->toCollection();
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->musicSupplier, $method], $args);
    }

}
