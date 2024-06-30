<?php

namespace App\Livewire;

use App\Models\Mobil;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class MobilComponent extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $addPage, $editPage = false;
    public $plat_nomor, $merk, $jenis, $harga, $foto, $id;
    public function render()
    {
        $data['mobil'] = Mobil::paginate(10);
        return view('livewire.mobil-component', $data);
    }

    public function create()
    {
        $this->addPage = true;
    }

    public function store()
    {
        $this->validate([
            'plat_nomor' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'foto' => 'required',
        ], [
            'plat_nomor.required' => 'Nomer Polisi tidak boleh kosong',
            'merk.required' => 'Merek tidak boleh kosong',
            'jenis.required' => 'Jenis tidak boleh kosong',
            'harga.required' => 'Harga tidak boleh kosong',
            'foto.required' => 'Foto tidak boleh kosong',
        ]);
        $this->foto->storeAs('public/mobil', $this->foto->hashName());
        Mobil::create([
            'user_id' => auth()->user()->id,
            'plat_nomor' => $this->plat_nomor,
            'merk' => $this->merk,
            'jenis' => $this->jenis,
            'harga' => $this->harga,
            'foto' => $this->foto->hashName()
        ]);
        session()->flash('success', 'Berhasil simpan data!');
        $this->reset();
    }

    public function edit($id){
        $this->editPage = true;
        $this->id = $id;
        $mobil = Mobil::find($id);
        $this->plat_nomor = $mobil->plat_nomor;
        $this->merk = $mobil->merk;
        $this->jenis = $mobil->jenis;
        $this->harga = $mobil->harga;

    }

    public function update()
    {
        $mobil = Mobil::find($this->id);
        if (empty($this->foto)) {
            $mobil->update([
                'user_id' => auth()->user()->id,
                'plat_nomor' => $this->plat_nomor,
                'merk' => $this->merk,
                'jenis' => $this->jenis,
                'harga' => $this->harga,
            ]);
        } else {
            unlink(public_path('storage/mobil/' . $mobil->foto));
            $this->foto->storeAs('public/mobil', $this->foto->hashName());
            $mobil->update([
                'user_id' => auth()->user()->id,
                'plat_nomor' => $this->plat_nomor,
                'merk' => $this->merk,
                'jenis' => $this->jenis,
                'harga' => $this->harga,
                'foto' => $this->foto->hashName()
            ]);
        }
        session()->flash('success', 'Data berhasil di update');
        $this->reset();
    }
    public function destroy($id)
    {
        $mobil = Mobil::find($id);
        unlink(public_path('storage/mobil/' . $mobil->foto));
        $mobil->delete();
        session()->flash('success', 'Data mobil berhasil di hapus');
        $this->reset();
    }

}
