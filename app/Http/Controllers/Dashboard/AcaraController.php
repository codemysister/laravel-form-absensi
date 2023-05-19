<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\AcaraDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index(AcaraDataTable $dataTable){
        return $dataTable->render('admin.acara');
    }
}
