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
    use InteractsWithViews;

    public function user()
    {
       return $this->belongsTo(User::class, 'dibuat_oleh', 'id');
    }

    public function diverifikasi()
    {
        return $this->belongsTo(User::class, 'diverifikasi_oleh', 'id');
    }
}
