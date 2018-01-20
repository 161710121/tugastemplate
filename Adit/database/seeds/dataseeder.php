<?php

use Illuminate\Database\Seeder;

class dataseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        ['nis'=>'123456','nama_siswa'=>'A','alamat'=>'E','tempat_lahir'=>'I','cita_cita'=>'M','tanggal_lahir'=>'1999-01-01','hobi'=>'Q','foto'=>'2.jpg'
            ],
            [        
'nis'=>'654321','nama_siswa'=>'B','alamat'=>'F','tempat_lahir'=>'J','cita_cita'=>'N','tanggal_lahir'=>'1999-02-02','hobi'=>'R','foto'=>'3.jpg'
            ],
            [
'nis'=>'135791','nama_siswa'=>'C','alamat'=>'G','tempat_lahir'=>'K','cita_cita'=>'O','tanggal_lahir'=>'1999-03-03','hobi'=>'S','foto'=>'4.jpg'
            ],
            [
'nis'=>'246810','nama_siswa'=>'D','alamat'=>'H','tempat_lahir'=>'L','cita_cita'=>'P','tanggal_lahir'=>'1999-04-04','hobi'=>'T','foto'=>'5.jpg'
            ],
        ];
        DB::table('data')->insert($a);

    }
}
