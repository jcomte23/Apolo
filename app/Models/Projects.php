<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

         /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'projects';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // public $incrementing = false;
    // protected $keyType = 'string';
    // protected $connection = 'connection-name';
    // protected $guarded = [];
    // protected $fillable = [
    //     'campo',
    // ];
    // protected $attributes = [
    //     'name' => 'hola',
    // ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function unionTblCities()
    {
        return $this->belongsTo(Cities::class, 'cities_id');
    }

    public function unionTblCompanies()
    {
        return $this->belongsTo(Companies::class, 'companies_id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
