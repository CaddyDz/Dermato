<?php

namespace App;

use App\Service;
use TCG\Voyager\Models\Category as BaseCategory;

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
