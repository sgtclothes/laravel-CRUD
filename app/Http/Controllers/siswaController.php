<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
	public function index()
	{
		$data_siswa = \App\siswa::all();
		return view('siswa.index', ['data_siswa' => $data_siswa]);
	}

	public function create(Request $request)
	{
		\App\siswa::create($request->all());
		return redirect('/siswa')->with('success', 'Data berhasil ditambah');
	}

	public function edit($id)
	{
		$siswa = \App\siswa::find($id);
		return view('siswa.edit',['siswa'=>$siswa]);
	}

	public function update(Request $request, $id) {
		$siswa = \App\siswa::find($id);
		$siswa->update($request->all());
		return redirect('/siswa')->with('success','Data berhasil diupdate');
	}

	public function delete($id) {
		$siswa = $siswa = \App\siswa::find($id);
		$siswa->delete();
		return redirect('/siswa')->with('success','Data berhasil dihapus');
	}
}
