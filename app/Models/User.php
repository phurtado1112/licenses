<?php

namespace App\Models;

use App\Models\Catalog\Client;
use App\Models\Catalog\Program;
use App\Models\Process\Assignment;
use App\Models\Process\Invoice;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function clients(): HasMany {
        return $this->hasMany(Client::class);
    }

    public function programs(): HasMany {
        return $this->hasMany(Program::class);
    }

    public function assignment(): HasMany {
        return $this->hasMany(Assignment::class);
    }

    public function invoices(): HasMany {
        return $this->hasMany(Invoice::class);
    }
}
