<div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h6 class="mb-4">Data Mobil</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Plat Nomor</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mobil as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->plat_nomor }}</td>
                                <td>{{ str_replace(' ', ' ', ucwords(str_replace('', ' ', $data->merk))) }}</td>
                                <td>{{ str_replace(' ', ' ', ucwords(str_replace('', ' ', $data->jenis))) }}</td>
                                <td> Rp {{ $data->harga }}</td>
                                <td>
                                    <img src="{{ asset('storage/mobil/'.$data->foto) }}" alt="{{ $data->merk }}"
                                    style="width: 180px">
                                </td>
                                <td>
                                    <button class="btn btn-info" wire:click="edit({{ $data->id }})">Edit</button>
                                    <button class="btn btn-danger" wire:click="destroy({{ $data->id }})">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">Data Mobil Belum Ada!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $mobil->links() }}
                    <button class="btn btn-primary" wire:click="create">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    @if ($addPage)
        @include('mobil.create')
    @endif
    @if ($editPage)
        @include('mobil.edit')
    @endif
</div>

