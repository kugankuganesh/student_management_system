<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Batch;
use App\models\Student;


class Entrollment extends Model
{
    protected $table ='entrollments';
    protected $fillable =['entroll_no','batch_id','student_id','join_date','fee'];
    use HasFactory;

    public function batch(){
        return $this->belongsTo(Batch::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
