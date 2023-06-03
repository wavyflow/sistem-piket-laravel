<?php

namespace App\Policies;

use App\Models\User;

class PeriodPolicy
{
    protected User $user;

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function viewAny(): bool {
        return in_array($this->user->role, [
            'admin'
        ]);
    }
}
