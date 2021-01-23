<?php

namespace App\Models;

use CodeIgniter\Model;

class ComicModel extends Model
{
    protected $table      = 'comic';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    public function getComic($fieldName, $param = false)
    {
        if ($param == false) {
            // $this adalah si ComicModel
            // Return semua data apabila parameter kosong / false
            return $this->findAll();
        }

        // Return baris pertama dari spesifik data 
        return $this->where([$fieldName => $param])->first();
    }
}
