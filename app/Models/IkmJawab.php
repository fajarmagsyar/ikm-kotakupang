<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IkmJawab extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'ikm_jawab_id';
    protected $table = 'ikm_jawab';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['ikm_jawab_id'];

    static public function countJawaban($id)
    {
        return IkmJawab::where('opd_id', $id)->count();
    }
}
