<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PegawaiController extends Controller
{
    public function index()
{
    $pegawai = Pegawai::paginate(10); // Fetch 10 records per page
    return view('your-view-name', compact('pegawai'));
}


    public function tambah()
    {
        // memanggil view tambah
	     return view('tambah');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');

     }
     // method untuk edit data pegawai
     public function edit($id)
     {
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['pegawai' => $pegawai]);
     }
     public function update(Request $request)
     {
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
    // alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('pegawai_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

}
