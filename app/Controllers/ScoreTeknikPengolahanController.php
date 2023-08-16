<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ScoreModelTeknikPengolahan;

class ScoreTeknikPengolahanController extends BaseController
{
    public function index()
    {
        $scoreModelTP = new ScoreModelTeknikPengolahan();

        $data['scores'] = $scoreModelTP->findAll();
        $data['champions'] = $scoreModelTP->orderBy('skor', 'DESC')->findAll(4); // Ambil 4 tim teratas

        return view('layouts/poolteknikpengolahan', $data);
    }
}
