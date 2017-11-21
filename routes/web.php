<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tessiswa',function(){
	//mengeluarkan semua data yang ada di table siswasmp melalui model SiswasmpModel
	$a = App\SiswasmpModel::all();
	return $a;
});

Route::get('/tessiswa*',function(){
	
	$a = App\SiswasmpModel::find(2);
	return $a;
});

Route::get('/tessiswa-',function(){
	
	$a = App\SiswasmpModel::where('nama','=','usep')->get();
	return $a;
});