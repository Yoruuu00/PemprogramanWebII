<?php

namespace App\Models;
use CodeIgniter\Model;

class PeminjamanModel extends Model {
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $allowedFields = ['member_id', 'buku_id', 'tanggal_pinjam', 'tanggal_kembali'];

    public function withRelations() {
        return $this->select('peminjaman.*, member.nama as member, buku.judul as buku')
                    ->join('member', 'member.id = peminjaman.member_id')
                    ->join('buku', 'buku.id = peminjaman.buku_id')
                    ->findAll();
    }
}