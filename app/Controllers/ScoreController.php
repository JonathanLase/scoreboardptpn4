<?php

namespace App\Controllers;

use App\Models\ScoreModel;
use App\Controllers\BaseController;

class ScoreController extends BaseController
{
    public function index()
    {
        $scoreModel = new ScoreModel();

        $data['scores'] = $scoreModel->findAll();
        $data['champions'] = $scoreModel->orderBy('skor', 'DESC')->findAll(4); // Ambil 4 tim teratas

        return view('layouts/pooltanaman', $data);
    }
}
