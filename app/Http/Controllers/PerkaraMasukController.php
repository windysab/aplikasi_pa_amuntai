<?php

namespace App\Http\Controllers;

use App\Models\PerkaraMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerkaraMasukController extends Controller
{

    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        //         SELECT nomor_perkara, tanggal_pendaftaran, perkara_pihak1.`nama`, perkara_pihak1.`alamat`, tanggal_putusan
        // FROM perkara
        // LEFT JOIN perkara_pihak1 ON perkara.`perkara_id`=perkara_pihak1.`perkara_id`
        // LEFT JOIN perkara_putusan ON perkara.`perkara_id`=perkara_putusan.`perkara_id`
        // WHERE YEAR(tanggal_pendaftaran)='2023'
        // AND perkara_pihak1.`urutan`='1'
        // AND perkara_pihak1.`alamat` LIKE '%PAMINGGIR%'

        // $perkaraMasuk = PerkaraMasuk::select('nomor_perkara', 'tanggal_pendaftaran', 'perkara_pihak1.nama', 'perkara_pihak1.alamat', 'tanggal_putusan')
        //     ->leftJoin('perkara_pihak1', 'perkara.perkara_id', '=', 'perkara_pihak1.perkara_id')
        //     ->leftJoin('perkara_putusan', 'perkara.perkara_id', '=', 'perkara_putusan.perkara_id')
        //     ->whereYear('tanggal_pendaftaran', '2023')
        //     ->where('perkara_pihak1.urutan', '1')
        //     ->where('perkara_pihak1.alamat', 'like', '%PAMINGGIR%')
        //     ->get();

        // return view('pages.perkara-masuk.index', compact('perkaraMasuk'));



        $perkaras = DB::table('perkara')
            ->leftJoin('perkara_pihak1', 'perkara.perkara_id', '=', 'perkara_pihak1.perkara_id')
            ->leftJoin('perkara_putusan', 'perkara.perkara_id', '=', 'perkara_putusan.perkara_id')
            ->select('perkara.nomor_perkara', 'perkara.tanggal_pendaftaran', 'perkara_pihak1.nama', 'perkara_pihak1.alamat', 'perkara_putusan.tanggal_putusan')
            ->whereYear('tanggal_pendaftaran', '=', 2021)
            ->whereMonth('tanggal_pendaftaran', '=', 1)
            ->where('perkara_pihak1.urutan', '=', 1)
            ->where('perkara_pihak1.alamat', 'like', '%PAMINGGIR%')
            ->get();

        // return view('perkara.index', compact('perkara'));
        return view('pages.perkara-masuk.index', compact('perkaras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PerkaraMasuk $perkaraMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerkaraMasuk $perkaraMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerkaraMasuk $perkaraMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerkaraMasuk $perkaraMasuk)
    {
        //
    }
}
