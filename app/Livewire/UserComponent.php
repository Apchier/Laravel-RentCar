<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class UserComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    protected $paginationTheme = 'bootstrap';
    public $addPage,$editPage = false;
    public $id,$name,$email,$password,$role;
    public function render()
    {
        $data['user'] = User::paginate(5);
        return view('livewire.user-component', $data);
    }

    public function create()
    {
        $this->reset();
        $this->addPage = true;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ],[
            'nama.required'=> 'Nama tidak boleh kosong',
            'email.required'=> 'Email tidak boleh kosong',
            'email.email'=> 'Format email tidak valid',
            'password.required'=> 'Password tidak boleh kosong',
            'role.required'=> 'Role tidak boleh kosong',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role
        ]);
        session()->flash('success', 'Data berhasil disimpan');
        $this->reset();
    }

    public function destroy($id)
    {
        $cari=User::find($id);
        $cari->delete();
        session()->flash('success', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $this->reset();
        $cari = User::find($id);
        $this->id = $cari->id;
        $this->name = $cari->name;
        $this->email = $cari->email;
        $this->role = $cari->role;
        $this->editPage = true;
    }

    public function update()
    {
        $cari = User::find($this->id);
        if($this->password == "") {
            $cari->update([
                'name' => $this->name,
                'email' => $this->email,
                'role' => $this->role
            ]);
        }else{
            $cari->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role' => $this->role
            ]);
        }
        session()->flash('success', 'Data berhasil diupdate');
        $this->reset();
        $this->editPage = false;
    }
}

