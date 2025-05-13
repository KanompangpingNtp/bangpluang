<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationCenterFile extends Model
{
    use HasFactory;

    protected $fillable = ['information_id', 'file_path', 'file_type'];

    public function information()
    {
        return $this->belongsTo(InformationCenter::class, 'information_id');
    }
}
