<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $primary_key = 'id';
    protected $fillable = ['id', 'nip', 'email', 'tanggal_lahir', 'no_hp'];
    public $timestamps = false;
}
