<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Jenssegers\Agent\Agent;
use Livewire\Component;
use Maize\Markable\Models\Reaction;

class Baca extends Component
{
    use LivewireAlert;

    public $tanaman;
    public $is_like;

    public function mount($slug)
    {
        try {
            $this->tanaman = Tanaman::where('slug', $slug)->where('status', 'Diterbitkan')->first();
            $post = $this->tanaman;
            SEOMeta::setTitle($post->nama_tanaman);
            SEOMeta::setDescription(\Str::limit(strip_tags($post->diskripsi_tanaman), 100));
            SEOMeta::addMeta('article:published_time', $post->created_at->toW3CString(), 'property');
            SEOMeta::addMeta('article:section', $post->jenis_spesies, 'property');
            SEOMeta::addKeyword([$post->nama_tanaman]);

            OpenGraph::setDescription(\Str::limit(strip_tags($post->diskripsi_tanaman), 100));
            OpenGraph::setTitle($post->nama_tanaman);
            OpenGraph::setUrl(url()->current());
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'id-ID');
            OpenGraph::addProperty('locale:alternate', ['en-us']);

            OpenGraph::addImage(asset('gambar-tanaman/' . $post->gambar_tanaman));
            OpenGraph::addImage(asset('gambar-tanaman/' . $post->gambar_tanaman));
            OpenGraph::addImage(['url' => asset('gambar-tanaman/' . $post->gambar_tanaman), 'size' => 300]);
            OpenGraph::addImage(asset('gambar-tanaman/' . $post->gambar_tanaman), ['height' => 300, 'width' => 300]);

            JsonLd::setTitle($post->nama_tanaman);
            JsonLd::setDescription(\Str::limit(strip_tags($post->diskripsi_tanaman), 100));
            JsonLd::setType('Article');
            JsonLd::addImage(asset('gambar-tanaman/' . $post->gambar_tanaman));

            if ($this->tanaman) {
                $agent = new Agent();
                $this->tanaman->visit()->withIP()->withData([
                    'browser' => $agent->browser(),
                    'versi_browser' => $agent->version($agent->browser()),
                    'device' => $agent->device(),
                    'versi_device' => $agent->version($agent->device()),
                    'platform' => $agent->platform(),
                    'versi_platform' => $agent->version($agent->platform()),
                ]);
            } else {
                session()->flash('pesan', 'Tanaman belum diterbitkan anda cuma bisa mengedit dan belum bisa ditampilkan');
                $this->flash('warning', 'Tanaman Belum Diterbitkan', [], route('auth.detail'));
            }
        } catch (\Exception $exception) {
            report($exception);
            $this->flash('warning', 'Tanaman tidak ditemukan');
        }
    }

    public function suka()
    {
        Reaction::toggle($this->tanaman, auth()->user(), 'heart');
    }

    public function jempol()
    {
        Reaction::toggle($this->tanaman, auth()->user(), 'person_raising_hand'); // returns the amount of 'person_raising_hand' reactions for the given post
    }

    public function render()
    {
        $share = \Share::currentPage($this->tanaman->nama_tanaman)
            ->facebook()
            ->twitter()
            ->whatsapp()
            ->getRawLinks();


        return view('livewire.tanaman.baca', [
            'tanaman_terkait' => Tanaman::where('kerajaan', $this->tanaman->kerajaan)->limit('5')->get(),
            'share' => $share,
        ])->layout('layouts.guest');
    }
}
