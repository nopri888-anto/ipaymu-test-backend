<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Biodata extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'biodatas';
    protected $fillable = ['nama', 'pekerjaan', 'tanggal_lahir'];
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;
}
