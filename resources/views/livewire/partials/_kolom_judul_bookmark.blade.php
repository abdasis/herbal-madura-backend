<p class="fw-bold mb-0 mt-2">{{ $row->nama_tanaman }}</p>
<p class="text-wrap">{!! Str::limit(strip_tags($row->diskripsi_tanaman), 105) !!}</p>

<div class="meta-post d-flex align-items-center mb-2 gap-2">
    <div class="meta-date d-flex gap-1">
        <i class="ri-calendar-2-line"></i>
        <span class="fs-12">Dilike Pada {{ $row->created_at->format('d-m-Y H:i') }}</span>
    </div>
    <div class="meta-status">

    </div>
</div>
