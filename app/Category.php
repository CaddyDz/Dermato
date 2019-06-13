<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as BaseCategory;
use App\Service;

class Category extends BaseCategory
{
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
