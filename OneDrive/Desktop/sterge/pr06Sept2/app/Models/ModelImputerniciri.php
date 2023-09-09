<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelImputerniciri extends Model
{
    use HasFactory;
    protected $table = "permisiuni";
    protected $guarded = [];
    public $timestamps = false;
    public function utilizatori(){
        return $this->hasMany(ModelUtilizatori::class,  "imputerniciri_id", "id");
    }
}
