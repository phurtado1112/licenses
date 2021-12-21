<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'surname', 'doc_id', 'celular', 'company', 'email', 'user_id'];
}
