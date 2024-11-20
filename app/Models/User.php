<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['profile', 'name', 'nim', 'specialist', 'cv', 'status', 'email'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'profile'    => 'is_image[profile]|ext_in[profile,jpg,jpeg,png]|max_size[profile,2048]',
        'name' => 'required|regex_match[/^[a-zA-Z.\-\s]+$/]|min_length[3]|max_length[100]',
        'nim'        => 'required|exact_length[10]|numeric|is_unique[users.nim]',
        'specialist' => 'required|alpha_space|max_length[100]',
        'cv'         => 'ext_in[cv,pdf]|max_size[cv,2048]',
        'status'     => 'required|in_list[active,inactive,passed]',
        'email'      => 'required|valid_email|is_unique[users.email]',
    ];
    protected $validationMessages   = [
        'profile' => [
            'is_image' => 'File profil harus berupa gambar.',
            'ext_in'   => 'Foto profil harus dalam format jpg, jpeg, atau png.',
            'max_size' => 'Ukuran gambar tidak boleh lebih dari 2 MB.',
        ],
        'name' => [
            'required'    => 'Nama wajib diisi.',
            'regex_match' => 'Nama hanya boleh mengandung huruf, spasi, tanda titik (.), dan tanda hubung (-).',
            'min_length'  => 'Nama harus memiliki minimal 3 karakter.',
            'max_length'  => 'Nama tidak boleh lebih dari 100 karakter.',
        ],
        'nim' => [
            'required'    => 'NIM wajib diisi.',
            'exact_length'=> 'NIM harus memiliki tepat 10 digit.',
            'numeric'     => 'NIM hanya boleh berupa angka.',
            'is_unique'   => 'NIM sudah terdaftar.',
        ],
        'specialist' => [
            'required'    => 'Spesialisasi wajib diisi.',
            'alpha_space' => 'Spesialisasi hanya boleh mengandung huruf dan spasi.',
            'max_length'  => 'Spesialisasi tidak boleh lebih dari 100 karakter.',
        ],
        'cv' => [
            'ext_in'   => 'CV harus berupa file dengan format PDF.',
            'max_size' => 'Ukuran CV tidak boleh lebih dari 2 MB.',
        ],
        'status' => [
            'required' => 'Status wajib diisi.',
            'in_list'  => 'Status harus berupa salah satu dari: active, inactive, atau passed.',
        ],
        'email' => [
            'required'   => 'Email wajib diisi.',
            'valid_email'=> 'Format email tidak valid.',
            'is_unique'  => 'Email sudah terdaftar.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
