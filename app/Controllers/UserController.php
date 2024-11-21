<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Jurusan;

class UserController extends BaseController
{
    protected $users;
    protected $jurusans;

    public function __construct() {
        $this->users = new User();
        $this->jurusans = new Jurusan();
    }

    public function index()
    {
        $rawUser = $this->users;

        $data = [
            'users' => $rawUser->get()->getResult()
        ];

        return view('admin/user/user', $data);
    }

    public function create()
    {
        $data = [
            'jurusan' => $this->jurusans->get()->getResult(),
        ];
        return view('admin/user/user-add', $data);
    }

    public function store()
    {
        $token = uniqid();
        $file_profile = $this->request->getFile('profile');
        $file_cv = $this->request->getFile('cv');

        $profileName = $file_profile ? $token . '.' . $file_profile->getClientExtension() : null;
        $cvName = $file_cv ? $token . '.' . $file_cv->getClientExtension() : null;

        $data = [
            'profile'    => $profileName,
            'name'       => $this->request->getPost('name'),
            'nim'        => $this->request->getPost('nim'),
            'jurusan_id'    => $this->request->getPost('jurusan'),
            'phone'      => $this->request->getPost('phone'),
            'cv'         => $cvName,
            'status'     => $this->request->getPost('status'),
            'email'      => $this->request->getPost('email'),
            'address'    => $this->request->getPost('address'),
        ];

        // Validasi dan Simpan Data
        if (!$this->users->save($data)) {
            // Ambil pesan error
            $errors = $this->users->errors();

            // Redirect kembali dengan pesan error
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        // Pindahkan file jika validasi berhasil
        if ($file_profile && $file_profile->isValid() && !$file_profile->hasMoved()) {
            $file_profile->move('./media/profile', $profileName);
        }

        if ($file_cv && $file_cv->isValid() && !$file_cv->hasMoved()) {
            $file_cv->move('./media/cv', $cvName);
        }

        return redirect()->to('./users')->with('store', "Berhasil menambahkan data {$data['name']}");
    }

    public function show($q)
    {
        $data =  [
            'user' => $this->users->where('id', $q)->first(),
        ];

        return view('admin/profile/profile', $data);
    }

    public function edit($q)
    {
        $data =  [
            'user' => $this->users->where('id', $q)->first(),
            'jurusan' => $this->jurusans->get()->getResult(),
        ];

        return view('admin/user/user-edit', $data);
    }

    public function update($q)
    { 
        $rawUser = $this->users->where('id', $q)->first();

        $token = uniqid();
        $file_profile = $this->request->getFile('profile');
        $file_cv = $this->request->getFile('cv');

        $profileName = $file_profile ? $token . '.' . $file_profile->getClientExtension() : $rawUser['profile'];
        $cvName = $file_cv ? $token . '.' . $file_cv->getClientExtension() : $rawUser['cv'];

        $data = [
            'profile'    => $profileName,
            'name'       => $this->request->getPost('name'),
            'nim'        => $this->request->getPost('nim'),
            'jurusan_id'    => $this->request->getPost('jurusan'),
            'phone'      => $this->request->getPost('phone'),
            'cv'         => $cvName,
            'status'     => $this->request->getPost('status'),
            'email'      => $this->request->getPost('email'),
            'address'    => $this->request->getPost('address'),
        ];

        // Skip validasi untuk operasi update
        $this->users->skipValidation(true);

        // Perbarui data ke database
        if (!$this->users->update($q, $data)) {
            // Ambil pesan error jika update gagal
            $errors = $this->users->errors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        // Pindahkan file jika validasi berhasil
        if ($file_profile && $file_profile->isValid() && !$file_profile->hasMoved()) {
            $file_profile->move('./media/profile', $profileName);
        }

        if ($file_cv && $file_cv->isValid() && !$file_cv->hasMoved()) {
            $file_cv->move('./media/cv', $cvName);
        }

        return redirect()->to('./users')->with('update', "Berhasil menambahkan data {$data['name']}");
    }

    public function destroy($q)
    {
        // Menghapus data dari tabel 'users' berdasarkan ID
        if ($this->users->delete($q)) {
            return redirect()->to('/users')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->to('/users')->with('error', 'Data gagal dihapus');
        }
    }
}
