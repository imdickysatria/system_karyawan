<?php

namespace App\Http\Controllers;

use App\Models\Absensis;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{

    public function index()
    {
        $absensi = new Absensis;
        $data['absensi'] = $absensi->groupBy('periode')
                            ->orderBy('tanggal_absen')
                            ->select(DB::raw('count(*) as count, periode,tanggal_absen'))
                            ->get();
        $data['count']  =  count($data['absensi']);
        return view('absensi.master.index', $data);
    }

    public function create()
    {
        $query = Absensis::select('code')->max('code');
        $kode_count = substr($query, 11) + 1;
        $maxkode = sprintf("%03s",$kode_count);
        $create_code = "ABSEN-KODE-".$maxkode;
        $data['code']  = $create_code;
        $data['title'] = "Create Master Absen";
        $data['month'] = array("","Januari","Februari","Maret","April","Mei","Juni","Juli", 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        return view('absensi.master.create', $data);
    }

    public function store()
    {
        $request->validate([
            'code'  => 'required',
            'periode'  => 'required',
            'tanggal'  => 'required',
        ]);

        $cek_schedule = Schedule::get();

        if (is_null($cek_schedule)) {
            $data['schedule'] = true;
            $data['info'] = 'disabled';
        }
        $absen_detail = new Absensi();
        $tanggal_absen = date('Y-m-d', strtotime($request->tanggal));
        $cek_absen = $absen_detail->where(['tanggal_absen' => $tanggal_absen])->count();
        if ($cek_absen >0 ){
            $message = [
                'alert-type' => 'error',
                'message' => 'Anda sudah absen pada tanggal '.tgl_indo($tanggal_absen).' ini, Absen lagi ditanggal berikutnya.'
            ];
            return redirect()->back()->with($message);
        }

        $data['title'] = "Absen Harian";
        $data['request']  = $request;
        $keterangan = new Keterangan();
        $data['attendance'] = Attendance::all();
        $data['status'] = $keterangan->status;
        $data['schedule'] = Schedule::orderBy('a.name', 'asc')
                                    ->select(DB::raw('tb_schedule.*, a.name'))
                                    ->join('tb_staff AS a', 'a.id', '=', 'tb_schedule.staff_id')
                                    ->get();
        return view('absensi.detail.create', $data);
    }

    public function edit()
    {
        # code...
    }

    public function show()
    {
        # code...
    }

    public function update()
    {
        # code...
    }

    public function destroy()
    {
        # code...
    }
}
