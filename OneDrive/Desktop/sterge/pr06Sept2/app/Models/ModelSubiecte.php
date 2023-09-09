<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelSubiecte extends Model
{
    use HasFactory;
    protected $table = "subiecte";
    protected $guarded = [];
    public $timestamps = false;


    public function utilizatori(){
        return $this->belongsToMany(ModelUtilizatori::class, "utilizatorisubiecte", "subiecte_id", "utilizator_id");
    }
}
