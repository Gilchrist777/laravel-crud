<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Specify which fields are mass-assignable
    protected $fillable = ['title', 'content'];

    // If needed, specify the table name explicitly
    // protected $table = 'posts';

    // If needed, specify the primary key explicitly
    // protected $primaryKey = 'id';

    // If timestamps are not used, disable them:
    // public $timestamps = false;
}
