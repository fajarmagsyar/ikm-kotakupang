<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\IkmJawab;
use App\Models\Opd;
use Illuminate\Http\Request;
use PDF;
use QrCode;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard | IKM',
            'active' => 'dashboard',
            'opd' => Opd::join('ikm_jawab', 'ikm_jawab.opd_id', '=', 'opd.opd_id', 'left')
                ->where('opd.opd_id', auth()->user()->opd_id)
                ->groupBy('opd.opd_id')
                ->selectRaw('count(ikm_jawab.ikm_jawab_id) as total, opd.*')
                ->first(),
        ];
        return view('admin.dashboard', $data);
    }
    public function dataKuisioner()
    {
        $data = [
            'title' => 'Data Kuisioner | IKM',
            'active' => 'kuisioner',
            'opd' => Opd::join('ikm_jawab', 'ikm_jawab.opd_id', '=', 'opd.opd_id', 'left')
                ->where('opd.opd_id', auth()->user()->opd_id)
                ->groupBy('opd.opd_id')
                ->selectRaw('count(ikm_jawab.ikm_jawab_id) as total, opd.*')
                ->first(),
        ];
        return view('admin.data-kuisioner', $data);
    }
    public function printQR($id)
    {
        $opd = Opd::where('opd_id', $id)->first();
        $qr = base64_encode(QrCode::size(300)->style('round')->color('58', '58', '144')->generate(url()->to('/list-opd/' . $opd->nama_singkat . '/survey')));
        $data = [
            'opd' => $opd,
            'qr' => $qr,
        ];

        $pdf = PDF::loadview('pdf.qrcode', $data)->setpaper('A4', 'landscape');
        return $pdf->stream('laporan-absen-seluruh-pdf');
    }

    public function printKuisioner($id)
    {
        $opd = Opd::where('opd_id', $id)->first();
        $ikm = IkmJawab::where('opd_id', $id)->get();
        $ikmCount = IkmJawab::where('opd_id', $id)->count();
        $data = [
            'opd' => $opd,
            'ikm' => $ikm,
            'ikmCount' => $ikmCount,
        ];
        // dd($ikm);

        $pdf = PDF::loadview('pdf.laporan', $data)->setpaper('A4', 'portrait');
        return $pdf->stream('laporan-' . $opd->nama_singkat);
    }

    public function profileEdit(Request $req)
    {
        $dataAdmin = [
            'nama' => $req->input('nama'),
            'mail' => $req->input('mail'),
            'nohp' => $req->input('nohp'),
        ];
        if ($req->input('password')) {
            $dataAdmin['password'] = $req->input('password');
        }

        $dataOPD = [
            'nama_opd' => $req->input('nama_opd'),
            'nama_singkat' => $req->input('nama_singkat'),
            'alamat' => $req->input('alamat'),
            'nama_kepala' => $req->input('nama_kepala'),
        ];

        Admin::where('admin_id', $req->input('admin_id'))->update($dataAdmin);
        Opd::where('opd_id', $req->input('opd_id'))->update($dataOPD);

        return redirect()->to('/admn/dashboard')->with('success', 'Perubahan data anda berhasil!');
    }
}
