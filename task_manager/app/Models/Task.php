<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public static function datas()
    {
        return [
            [
                'id' => 1,
                'title' => 'Frontend',
                'task' => 'Landing Page',
                'description' => 'Halaman landing responsif dengan HTML, CSS, JavaScript.',
                'due_date' => '2024-06-01',
                'status' => 'Incomplete'
            ],
            [
                'id' => 2,
                'title' => 'Backend',
                'task' => 'REST API',
                'description' => 'REST API CRUD menggunakan Node.js dan Express.',
                'due_date' => '2024-06-08',
                'status' => 'Incomplete'
            ],
            [
                'id' => 3,
                'title' => 'Frontend',
                'task' => 'Todo List',
                'description' => 'Aplikasi Todo List dengan React.js, fitur CRUD.',
                'due_date' => '2024-06-15',
                'status' => 'Incomplete'
            ],
            [
                'id' => 4,
                'title' => 'Backend',
                'task' => 'Manajemen Mahasiswa',
                'description' => 'Backend Laravel untuk data mahasiswa, login, registrasi.',
                'due_date' => '2024-06-22',
                'status' => 'Incomplete'
            ],
        ];
    }
}
