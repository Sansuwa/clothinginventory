<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','status','created_by','updated_by'
    ];

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
}
