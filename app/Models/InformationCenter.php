<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationCenter extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'name'];

    public function files()
    {
        return $this->hasMany(InformationCenterFile::class, 'information_id');
    }
}
