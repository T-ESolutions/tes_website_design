<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Page extends Model
{
    use HasFactory;

    protected $appends = ['page','title','body'];


    public function getPageAttribute()
    {
        if ($locale = App::currentLocale() == "en") {
            return $this->page_en;
        } else {
            return $this->page_ar;
        }
    }

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
