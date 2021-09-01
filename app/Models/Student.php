<?php

namespace App\Models;

use App\Models\Mark;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'age', 'gender', 'teacher'];

    public function mark() {
        return $this->hasMany(Mark::class,'student_id');
    }    
}
