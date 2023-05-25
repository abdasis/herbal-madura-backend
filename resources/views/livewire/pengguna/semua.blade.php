<div>
    <div class="card">
        <div class="card-header border-light d-flex align-items-center justify-content-between">
            <h5 class="card-title">Semua Data Pengguna</h5>
            <a href="{{ route('pengguna.tambah') }}" class="btn btn-success btn-sm btn-border">
                <i class="ri-add-circle-fill"></i>
                Pengguna
            </a>
        </div>
        <div class="card-body">
            <livewire:pengguna.table-pengguna />
        </div>
    </div>
</div>
