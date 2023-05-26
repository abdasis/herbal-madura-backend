<p class="fw-bold mb-0">{{$row->nama_tanaman}}</p>
<p class="text-wrap">{!! Str::limit(strip_tags($row->diskripsi_tanaman), 105) !!}</p>

<div class="meta-post d-flex mb-2 align-items-center gap-2">
    <div class="meta-date d-flex gap-1">
        <i class="ri-calendar-2-line"></i>
        <span class="fs-12">{{$row->created_at->format('d-m-Y')}}</span>
    </div>
    <div class="meta-status">
        @if($row->status == 'Diterbitkan')
            <div class="text-success d-flex align-items-center gap-1 px-3 py-1">
                <i class="ri-checkbox-circle-fill"></i>
                {{$row->status}}
            </div>
        @elseif($row->status == 'Direview')
            <div class="text-warning d-flex align-items-center gap-1 px-3 py-1">
                <i class="ri-information-fill"></i>
                {{$row->status}}
            </div>
        @else
            <div class="text-danger d-flex align-items-center gap-1 px-3 py-1">
                <i class="ri-close-circle-fill"></i>
                {{$row->status}}
            </div>
        @endif
    </div>
</div>
