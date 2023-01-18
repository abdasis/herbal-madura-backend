<div>
    <div class="card">
        <div class="card-header border-light d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Semua Data Pengguna</h5>
            <a href="{{route('pengguna.tambah')}}" class="btn btn-light">
                <i class="ri-add-box-line"></i>
                Pengguna baru
            </a>
        </div>
        <div class="card-body">
            <livewire:pengguna.table-pengguna/>
        </div>
    </div>
</div>
