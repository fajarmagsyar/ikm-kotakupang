<?php

namespace App\Http\Controllers;

use App\Models\IkmJawab;
use App\Models\Opd;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function listOpd()
    {
        $data = [
            'judul' => 'List OPD - Kota Kupang',
            'activePage' => 'list',
            'opd' => Opd::join('ikm_jawab', 'ikm_jawab.opd_id', '=', 'opd.opd_id', 'left')
                ->groupBy('opd.opd_id')
                ->selectRaw('count(ikm_jawab.ikm_jawab_id) as total, opd.*')
                ->get(),
        ];
        return view('user.list-opd', $data);
    }
    public function survey($id)
    {
        $data = [
            'judul' => 'Survey IKM - Kota Kupang',
            'opd' => Opd::join('ikm_jawab', 'ikm_jawab.opd_id', '=', 'opd.opd_id', 'left')
                ->where('opd.nama_singkat', strtoupper($id))
                ->groupBy('opd.opd_id')
                ->selectRaw('count(ikm_jawab.ikm_jawab_id) as total, opd.*')
                ->first(),
        ];
        return view('user.survey', $data);
    }
    public function surveyStore(Request $req, $id)
    {
        $allRequest = $req->post();
        //potong index pertama atau CSRF tokennya
        array_splice($allRequest, 0, 1);

        // dd(json_encode($allRequest));
        $opd = Opd::where('nama_singkat', strtoupper($id))->first();
        $dataToSave = [
            'opd_id' => $opd->opd_id,
            'isi' => json_encode($allRequest),
        ];

        IkmJawab::create($dataToSave);

        return redirect('/')->with('success', 'Data kuisioner anda berhasil terkirim, terima kasih atas partisipasi anda dalam mengisi kuisioner Indeks Kepuasan Masyarakat kami');
    }
}
