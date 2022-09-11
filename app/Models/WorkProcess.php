<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class WorkProcess extends Model
{
    use HasFactory;

    protected $appends = ['title','body'];

    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "en") {
            return $this->title_en;
        } else {
            return $this->title_ar;
        }
    }

    public function getBodyAttribute()
    {
        if ($locale = App::currentLocale() == "en") {
            return $this->body_en;
        } else {
            return $this->body_ar;
        }
    }
}
