<?php

namespace App\Models;
use App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'marks';

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
    protected $fillable = ['student_id', 'maths_mark','science_mark', 'history_mark', 'term'];

    public function student() {
        return $this->belongsTo(Student::class,'student_id');
    }

}
