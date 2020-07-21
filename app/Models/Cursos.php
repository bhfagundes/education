<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cursos
 * @package App\Models
 * @version July 21, 2020, 3:57 am UTC
 *
 */
class Cursos extends Model
{

    public $table = 'cursos';
    



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
