<?php

namespace App\Models;

use App\Traits\Blameable;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model implements Viewable
{
    use HasFactory;
    use Blameable;
    use InteractsWithViews;
}
