<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\Attributes\On;

class LaporanComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $tanggal1, $tanggal2;
    #[On('lihat-transaksi')]
    public function render()
    {
        if ($this->tanggal2 != '') {
            $data['transaksi'] = Transaksi::where('status', 'SELESAI')->whereBetween('tanggal_pesan', [$this->tanggal1, $this->tanggal2])->paginate(5);
        } else {
            $data['transaksi'] = Transaksi::where('status', 'SELESAI')->paginate(5);
        }
        return view('livewire.laporan-component', $data);
    }

    public function cari()
    {
        $this->dispatch('lihat-laporan');
    }
}
