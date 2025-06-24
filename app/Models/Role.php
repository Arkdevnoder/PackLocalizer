<?php

namespace App\Models;

use App\Traits\RoleDefiner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use RoleDefiner;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
