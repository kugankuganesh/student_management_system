<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Course;
class Batch extends Model
{
    protected $table ='batches';
    protected $fillable =['name','course_id','start_date','batch_id'];
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
