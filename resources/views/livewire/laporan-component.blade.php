<div class="container px-4 pt-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Data Laporan Transaksi</h6>
                    <div class="d-flex text-center align-items-center justify-content-evenly">
                        <div class="col-md-4">
                            <input type="date" class="form-control" wire:model="tanggal1" placeholder="Tanggal">
                        </div>
                        <div class="col-md-1">
                            S/d
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" wire:model="tanggal2" placeholder="S/d Tanggal">
                        </div>
                        <button class="btn btn-primary" wire:click="cari">Filter</button>
                        <button class="btn btn-danger" onclick="printReport()">Cetak Laporan</button>
                    </div>
                <table class="table" id="reportTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Plat Nomor</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Lama</th>
                            <th scope="col">Tanggal Pesan</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksi as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="text-capitalize">{{ $data->mobil->plat_nomor }}</td>
                                <td class="text-capitalize">{{ $data->nama }}</td>
                                <td class="text-capitalize">{{ $data->alamat }}</td>
                                <td class="text-capitalize">{{ $data->lama }}</td>
                                <td class="text-capitalize">{{ $data->tanggal_pesan }}</td>
                                <td class="text-capitalize">{{ $data->total }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Data Mobil Belum Ada!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $transaksi->links() }}
            </div>
        </div>
    </div>
</div>
