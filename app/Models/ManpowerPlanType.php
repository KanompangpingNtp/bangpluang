<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManpowerPlanType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    public function files() {
        return $this->hasMany(ManpowerPlanFile::class, 'type_id');
    }
}
