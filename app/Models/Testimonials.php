<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Testimonials extends Model
{
    use HasFactory;


    protected $appends = ['body'];


    public function getBodyAttribute()
    {
        if ($locale = App::currentLocale() == "en") {
            return $this->body_en;
        } else {
            return $this->body_ar;
        }
    }
}
