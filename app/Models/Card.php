<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Card extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $casts = ['effect' => 'array',];
    protected $fillable = ['name', 'mana', 'thumb', 'edition', 'effect', 'description', 'str', 'constitution', 'type'];
}
