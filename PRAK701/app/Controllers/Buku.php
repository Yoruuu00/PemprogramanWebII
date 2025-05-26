<?php

namespace App\Controllers;
use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller {
    public function index() {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }

    public function create() {
        return view('buku/form');
    }

    public function store() {
        $model = new BukuModel();
        $data = $this->request->getPost();
        if (!$this->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer'
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $model->save($data);
        return redirect()->to('/buku');
    }

    public function edit($id) {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/form', $data);
    }

    public function update($id) {
        $model = new BukuModel();
        $data = $this->request->getPost();
        $data['id'] = $id;
        $model->save($data);
        return redirect()->to('/buku');
    }

    public function delete($id) {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku');
    }
}
