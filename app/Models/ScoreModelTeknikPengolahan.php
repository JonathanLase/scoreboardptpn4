<?php

namespace App\Models;

use CodeIgniter\Model;

class ScoreModelTeknikPengolahan extends Model
{
    protected $table            = 'pool_teknikpengolahan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_team', 'skor'];
}
