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
        }elseif($type == 'error'){
            $icon = asset('icons/danger.png');
            if ($route != null) {
                $this->flash('success', "<span class='text-white'>$pesan</span>", [
                    'iconHtml' => "<img src='$icon'/>",
                    'background' => '#E23F33',
                ], $route);
            } else {
                $this->alert('success', "<span class='text-white'>$pesan</span>", [
                    'iconHtml' => "<img src='$icon'/>",
                    'background' => '#E23F33',
                ]);
            }
        }elseif($type == 'info'){
            $icon = asset('icons/info.png');
            if ($route != null) {
                $this->flash('success', "<span class='text-white'>$pesan</span>", [
                    'iconHtml' => "<img src='$icon'/>",
                    'background' => '#2C8CD3',
                ], $route);
            } else {
                $this->alert('success', "<span class='text-white'>$pesan</span>", [
                    'iconHtml' => "<img src='$icon'/>",
                    'background' => '#2C8CD3',
                ]);
            }

        }
    }
}
