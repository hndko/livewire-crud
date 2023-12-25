<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            Create Customer
        </div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <form wire:submit.prevent='save'>
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama</label>
                    <input type="text" class="form-control" wire:model="nama_lengkap" id="nama_lengkap"
                        autocomplete="off" required>
                    @error('nama_lengkap')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model="email" id="email" autocomplete="off"
                        required>
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" wire:model="no_telepon" id="no_telepon"
                        autocomplete="off" required>
                    @error('no_telepon')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
