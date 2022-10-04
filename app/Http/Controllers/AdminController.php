<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | IKM',
            'active' => 'dashboard',
            'opd' => Opd::where('opd_id', auth()->user()->opd_id)->first(),
        ];
        return view('admin.dashboard', $data);
    }
    public function dataKuisioner()
    {
        $data = [
            'title' => 'Data Kuisioner | IKM',
            'active' => 'kuisioner',
            'opd' => Opd::where('opd_id', auth()->user()->opd_id)->first(),
        ];
        return view('admin.data-kuisioner', $data);
    }
}
