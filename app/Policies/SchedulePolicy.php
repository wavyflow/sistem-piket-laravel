<?php

namespace App\Policies;

use App\Models\User;

class SchedulePolicy
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
            'admin', 'pimpinan'
        ]);
    }

    public function create(): bool {
        return $this->user->role === 'admin';
    }

    public function update(): bool {
        return in_array($this->user->role, [
            'admin',
            'pimpinan'
        ]);
    }

    public function deleteAny(): bool {
        return $this->user->role === 'admin';
    }
}
