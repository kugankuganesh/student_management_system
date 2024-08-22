<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Entrollment;

class Payment extends Model
{
    protected $table ='payments';
    protected $fillable =['entrollment_id','paid_date','amount'];
    use HasFactory;

    public function entrollment(){
        return $this->belongsTo(Entrollment::class);
    }
}
