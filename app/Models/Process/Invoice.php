<?php

namespace App\Models\Process;

use App\Models\Catalog\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'client_id', 'assignment_id', 'quantity', 'price', 'total'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function client(): BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public function assignment(): BelongsTo {
        return $this->belongsTo(Assignment::class);
    }
}
