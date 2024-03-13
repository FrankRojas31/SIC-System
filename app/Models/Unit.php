<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        "unit_name",
        "objective",
        "subject_id",
    ];

    public function subject():BelongsToMany{
        return $this->belongsToMany(Subject::class);
    }
}
