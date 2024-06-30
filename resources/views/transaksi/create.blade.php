<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add Transaksi</h6>
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" wire:model="nama" id="nama">
                        @error('nama')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ponsel" class="form-label">Nomor Ponsel Pemesan</label>
                        <input type="text" class="form-control" wire:model="ponsel" id="ponsel">
                        @error('ponsel')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Pemesan</label>
                        <input type="text" class="form-control" wire:model="alamat" id="alamat">
                        @error('alamat')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lama" class="form-label">Lama Pemesanan</label>
                        <input type="number" class="form-control" wire:change="hitung" wire:model="lama" id="lama">
                        @error('lama')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_pesan" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" wire:model="tanggal_pesan" id="tanggal_pesan">
                        @error('tanggal_pesan')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        Total:Rp. {{ $total }}
                    </div>
                    <button type="button" class="btn btn-primary" wire:click="store">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

