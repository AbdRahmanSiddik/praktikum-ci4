<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    protected $users;

    public function __construct() {
        $this->users = new User();
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
        return view('admin/user/user-add');
    }

    // public function store()
    // {
    //     $token = uniqid();
    //     $file_profile = $this->request->getFile('profile');
    //     $file_cv = $this->request->getFile('cv');
    //     $name = $this->request->getPost('name');
    //     $nim = $this->request->getPost('nim');
    //     $specialist = $this->request->getPost('specialist');
    //     $status = $this->request->getPost('status');
    //     $email = $this->request->getPost('email');

        
    //     $profileName = $token.".".$file_profile->getClientExtension();
    //     $cvName = $token.".".$file_cv->getClientExtension();

    //     $data = [
    //         'profile' => $profileName,
    //         'name' => $name,
    //         'nim' => $nim,
    //         'specialist' => $specialist,
    //         'cv' => $cvName,
    //         'status' => $status,
    //         'email' => $email,
    //     ];
        
    //     $file_profile->move('./media/profile', $profileName);
    //     $file_cv->move('./media/cv', $cvName);
    //     $this->users->save($data);

    //     return redirect()->to('./users')->with('store', "Berhasil menambahkan data $name");
    // }

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
            'specialist' => $this->request->getPost('specialist'),
            'cv'         => $cvName,
            'status'     => $this->request->getPost('status'),
            'email'      => $this->request->getPost('email'),
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
}
