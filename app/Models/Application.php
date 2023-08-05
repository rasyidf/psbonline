<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'gpa',
        'other_criteria',
        'documents',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}