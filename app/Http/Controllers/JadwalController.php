<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datajadwal = Jadwal::all();
        $datajadwal = DB::table('jadwal')->orderBy('id','DESC')->get();
        return view('jadwal', ['jadwal' => $datajadwal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('jadwal_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jadwal::create([
            'bulan'=> $request->bulan,
            'nama'=> $request->nama,
            'tgl'=>$request->tgl
        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datajadwal = Jadwal::find($id);
        return view('jadwal_ubah',['jadwal'=> $datajadwal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->bulan = $request->bulan;
        $jadwal->nama = $request->nama;
        $jadwal->tgl = $request->tgl;
        $jadwal->save();

        return redirect()->route('jadwal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index');
    }
}
