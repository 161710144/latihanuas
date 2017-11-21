<?php

use Illuminate\Database\Seeder;

class siswasmp extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['nama'=>'asep','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
        ['nama'=>'Ujang','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                 ['nama'=>'Iki','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                ['nama'=>'Usep','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                ['nama'=>'Udin','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                ['nama'=>'Hylos','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                ['nama'=>'Freya','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                ['nama'=>'Uzi','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                ['nama'=>'Jems','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],
                        ['nama'=>'Kukang','kelas'=>'X','tanggal_lahir'=>'2000-09-08','Jenis_kelamin'=>'Lelaki','Agama'=>'Islam','Umur'=>'17','Alamat'=>'Jl.Ukek'],         
        ];

        DB::table('siswasmp')->insert($posts);
    }
}
