<?php

namespace App\Traits;

trait ImporterGetterSetterTrait
{

    private string $user = '';

    public function setUser(string $user = null): void
    {
        $this->user = $user ?? config('lastfm.user');
    }

    public function getUserName(): string
    {
        return $this->user;
    }

}
