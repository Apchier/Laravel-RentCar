<?php

namespace App\Livewire;

use App\Models\Mobil;
use App\Models\Transaksi;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class TransaksiComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $addPage,
        $lihatPage = false;
    public $nama, $ponsel, $alamat, $lama, $tanggal_pesan, $mobil_id, $harga, $total;
    public $dataTransaksi = [];
    public function render()
    {
        $data['mobil'] = Mobil::paginate(3);
        return view('livewire.transaksi-component', $data);
    }

    public function create($id, $harga)
    {
        $this->mobil_id = $id;
        $this->harga = $harga;
        $this->addPage = true;
    }

    public function hitung()
    {
        $lama = $this->lama;
        $harga = $this->harga;
        $this->total = $lama * $harga;
    }

    public function store()
    {
        $this->validate(
            [
                'nama' => 'required',
                'ponsel' => 'required',
                'alamat' => 'required',
                'lama' => 'required',
                'tanggal_pesan' => 'required',
            ],
            [
                'nama.required' => 'Nama harus diisi!',
                'ponsel.required' => 'Ponsel harus diisi!',
                'alamat.required' => 'Alamat harus diisi!',
                'lama.required' => 'Lama harus diisi!',
                'tanggal_pesan' => 'Tanggal harus diisi!',
            ],
        );
        $cari = Transaksi::where('mobil_id', $this->mobil_id)
            ->where('tanggal_pesan', $this->tanggal_pesan)
            ->where('status', '!=', 'SELESAI')
            ->count();
        if ($cari == 1) {
            session()->flash('error', 'Mobil sudah ada yang memesan, silahkan pilih mobil lainnya!');
            $this->reset();
        } else {
            Transaksi::create([
                'user_id' => auth()->user()->id,
                'mobil_id' => $this->mobil_id,
                'nama' => $this->nama,
                'ponsel' => $this->ponsel,
                'lama' => $this->lama,
                'alamat' => $this->alamat,
                'tanggal_pesan' => $this->tanggal_pesan,
                'total' => $this->total,
                'status' => 'WAIT',
            ]);
            session()->flash('success', 'Transaksi berhasil disimpan!');
        }
        $this->dispatch('lihat-transaksi');
        $this->reset();
    }
    public function lihat()
    {
        $this->dataTransaksi['Transaksi'] = Transaksi::paginate(5);
        $this->lihatPage = true;
    }
}
