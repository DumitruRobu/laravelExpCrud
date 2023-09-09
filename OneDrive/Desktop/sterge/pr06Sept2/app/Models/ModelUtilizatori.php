<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelUtilizatori extends Model
{
    use HasFactory;
    protected $table = "utilizatori";
    protected $fillable = ["nume", "imagine", "gen", "imputerniciri_id"];
    public $timestamps = false;

    use SoftDeletes;

    public function subiecte(){
        return $this->belongsToMany(ModelSubiecte::class, "utilizatorisubiecte", "utilizator_id", "subiecte_id");
    }

    public function permisiuni(){
        return $this->belongsTo(ModelImputerniciri::class,  "imputerniciri_id", "id");
    }
}
