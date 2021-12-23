<?php

namespace App\Models\Process;

use App\Models\Catalog\Client;
use App\Models\Catalog\Program;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'client_id', 'program_id', 'invoice_date', 'payment_date'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function client(): BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public function program(): BelongsTo {
        return $this->belongsTo(Program::class);
    }
}
