<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    protected $users;
    protected $render;

    public function __construct() {
        $this->users = new User();
        $this->render = service('renderer');
    }

    public function index()
    {
        $rawUser = $this->users;

        $data = [
            'users' => $rawUser->get()->getResult()
        ];

        return $this->render->setData($data)->render('admin/user/user');
    }

    public function create()
    {
        return $this->render->setData()->render('admin/user/user-add');
    }

    public function store()
    {
        $token = uniqid();
        $file = $this->request->getFile('profile');
        $name = $this->request->getPost('name');

        $file_name = $token.".".$file->getClientExtension();
        
        $data = [
            'profile' => $file_name,
            'name' => $name
        ];
        
        $file->move('media/profile', $file_name);
        $this->users->save($data);

        return redirect()->to('/users')->with('store', "Berhasil menambahkan data $name");
    }

    public function show($q)
    {
        $rawUser = $this->users->where('id', $q);

        return $this->render->setData()->render();
    }
}
