<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    public $table = "research_list";
    public $timestamps = false;
    public $primaryKey = "id";
    public $guarded = [
        "id"
    ];

    protected $fillable = [
        "research_title",
        "department",
        "course",
        "faculty_adviser1",
        "faculty_adviser2",
        "faculty_adviser3",
        "faculty_adviser4",
        "researcher1",
        "researcher2",
        "researcher3",
        "researcher4",
        "researcher5",
        "researcher6",
        "time_frame",
        "date_completion",
        "abstract",
    ];
}
