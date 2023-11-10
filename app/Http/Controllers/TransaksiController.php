<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use Barryvdh\DomPDF\Facade\Pdf;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi', ['list'=>Transaksi::all()]);
    }

    public function search(Request $request)
    {
        if($request->has('searchKodeTransaksi')){
            $list = Transaksi::where('kode_transaksi', 'like', "%" . $request->searchKodeTransaksi . "%")->get();
        }
        else{
            $list = Transaksi::all();
        }
        return view('/transaksi', ['list' =>$list]);
    }

    public function filter(Request $request)
    {
        if($request->has('filterStatusPembayaran')){
            if($request->filterStatusPembayaran==""){
                $list = Transaksi::all();
            }else{
                $list = Transaksi::where('status_pembayaran', 'like', "%" . $request->filterStatusPembayaran . "%")->get();
            }
        }
        else{
            $list = Transaksi::all();
        }
        return view('/transaksi', ['list' =>$list]);
    }

    public function downloadDataPengguna(){
        $data = Transaksi::all();
        view()->share('dataTransaksi', $data);
        $pdf = PDF::loadView('dataTransaksi-pdf');
        return $pdf->download('dataTransaksi.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/tambah-transaksi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect('/transaksi')->with('success', 'Data Transaksi Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi, $id)
    {
        return view('detail-transaksi', [
            'detail_transaksi' => Transaksi::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $detail_transaksi = Transaksi::find($id);
        $detail_transaksi->update($request->all());
        return redirect('/transaksi')->with('success', 'Data Transaksi berhasil di Ubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi, $id)
    {
        $data_transaksi = Transaksi::find($id);
        $data_transaksi->delete();
        return redirect('transaksi')->with('success', 'Data Transaksi berhasil di Hapus');
    }
}
