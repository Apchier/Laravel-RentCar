<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add Mobil</h6>
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="plat_nomor" class="form-label">Plat Nomor</label>
                        <input type="text" class="form-control" wire:model="plat_nomor" id="plat_nomor"
                            value="{{ old('plat_nomor') }}">
                        @error('plat_nomor')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" class="form-control" wire:model="merk" id="merk"
                            value="{{ old('merk') }}">
                        @error('merk')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Mobil</label>
                            <select name="" class="form-select" wire:model="jenis">
                                <option value="">--- Pilih ---</option>
                                <option value="Lamborghini">Lamborghini</option>
                                <option value="Ferrari">Ferrari</option>
                                <option value="BMW">BMW</option>
                            </select>
                        @error('jenis')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" wire:model="harga" id="harga"
                            value="{{ old('harga') }}">
                        @error('harga')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Mobil</label>
                        <input type="file" class="form-control" wire:model="foto" id="foto"
                            value="{{ old('foto') }}">
                        @error('foto')
                            <span class="form-text text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"
                        wire:click="update({{ $id }})">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
