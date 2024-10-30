<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Diagnostic extends Model
{
    use HasFactory;
    protected $state = 'diagnostics';
    protected $fillable = [
        'name',
    ];
    public function students(): Hasmany
    {
        return $this->hasMany(Student::class, 'diagnostic_id');
    }
}
