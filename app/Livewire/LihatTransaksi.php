<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transaksi;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\Attributes\On;

class LihatTransaksi extends Component
{
    use WithPagination, WithoutUrlPagination;
    #[On('lihat-transaksi')]
    public function render()
    {
        $data['transaksi'] = Transaksi::paginate(10);
        return view('livewire.lihat-transaksi', $data);
    }
    // public function proses()
    // {
    //     $transaksi = Transaksi::find($this->id);
    //     $transaksi->update([
    //         'status' => 'SELESAI'
    //     ]);
    //     $this->emit('lihat-transaksi');
    //     session()->flash('success', 'Transaksi Berhasil di proses');
    // }
    public function proses($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'status' => 'PROSES'
        ]);
        session()->flash('success', 'Transaksi Berhasil Di Proses');
    }

    public function selesai($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'status' => 'SELESAI'
        ]);
        session()->flash('success', 'Transaksi Berhasil Diselesaikan');
    }
}
