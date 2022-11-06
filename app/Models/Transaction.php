<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function member(){
        return $this->belongsTo(Member::class, 'kode_member', 'kode_member');
    }
}
