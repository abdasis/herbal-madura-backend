<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\LivewireAlert;

trait Toast
{
    use LivewireAlert;

    public function toast($type, $pesan, $route = null)
    {
        if ($type == 'success') {
            $icon = asset('icons/success.png');
            if ($route != null) {
                $this->flash('success', "<span class='text-white'>$pesan</span>", [
                    'iconHtml' => "<img src='$icon'/>",
                    'background' => '#07BC0C',
                ], $route);
            } else {
                $this->alert('success', "<span class='text-white'>$pesan</span>", [
                    'iconHtml' => "<img src='$icon'/>",
                    'background' => '#07BC0C',
                ]);
            }
        }
    }
}
