<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikm extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'ikm_id';
    protected $table = 'ikm';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['ikm_id'];
}
