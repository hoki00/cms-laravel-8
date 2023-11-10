<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pengguna', [
            'title' => 'Halaman Pengguna',
            'account' => Pengguna::all()
        ]);
     
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $account = Pengguna::where('nama', 'like', "%" . $request->search . "%")->get();
        }
        else{
            $account = Pengguna::all();
        }
        return view('/pengguna', ['account' =>$account]);
    }

    public function filter(Request $request)
    {
        if($request->has('filterJenisKelamin')){
            if($request->filterJenisKelamin==""){
                $account = Pengguna::all();
            }else{
                $account = Pengguna::where('jenis_kelamin', 'like', "%" . $request->filterJenisKelamin . "%")->get();
            }
        }
        else{
            $account = Pengguna::all();
        }
        return view('/pengguna', ['account' =>$account]);
    }

    public function downloadDataPengguna(){
        $data = Pengguna::all();
        view()->share('data', $data);
        $pdf = PDF::loadView('dataPengguna-pdf');
        return $pdf->download('data.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-pengguna');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Pengguna::create($request->all());
        Pengguna::create([
            'nama'=>$request->nama,
            'username'=>$request->username,
            'email'=>$request->email,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'password'=>bcrypt($request->password)
        ]);
        return redirect('/pengguna')->with('success', 'Data Pengguna berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    // public function show(Pengguna $pengguna)
    public function show($id)
    {
        // $data = Pengguna::find($id);
        // dd($data);

        return view('detail-pengguna', [
            'detail' => Pengguna::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $detail = Pengguna::find($id);
        $detail->update($request->all());
        return redirect('/pengguna')->with('success', 'Data Pengguna berhasil di Ubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengguna $pengguna, $id)
    {
        // Pengguna::destroy($pengguna->id);
        // $pengguna->delete();
        // return redirect('/pengguna')->with('success', 'Data has been deleted');

        $data = Pengguna::find($id);
        $data->delete();
        return redirect('pengguna')->with('success', 'Data Pengguna berhasil di Hapus');
    }
}
