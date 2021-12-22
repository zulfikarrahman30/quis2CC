<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use DB;
class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang1 = [
            'indomie','mie sedap','spaghetti','samnyang','mie kare'
        ];
        $barang2 = 
        [
        'tango','poki poki','kit kat','macaroni','chitatos'
        ];
        $barang3 = 
        [
        'Milo','es teh','teh pucuk','Fruit tea','indomilk'];
        $barang4 =
         [
        'panasonic','asus','acer',' lenovo',' HP'];
    	$kategori = ['makanan','snack','minuman','laptop'
        ];
    	for ($i=0; $i < 5; $i++) { 
            $hg = $i+1;
    		 DB::table('barang')->insert(
	        	[
	        		'kode_barang'=>Str::random(7),
	        		'nama_barang'=>$barang1[$i],
	        		'kategori_barang'=>$kategori[0],
	        		'harga'=>$hg.'000',
	        		'qty'=>$i+2,
	        	]
	        );
    	}

        for ($i=0; $i < 5; $i++) { 
             $hg = $i+1;
             DB::table('barang')->insert(
                [
                    'kode_barang'=>Str::random(7),
                    'nama_barang'=>$barang2[$i],
                    'kategori_barang'=>$kategori[1],
                    'harga'=>$hg.'000',
                    'qty'=>$i+2,
                ]
            );
        }

        for ($i=0; $i < 5; $i++) { 
             $hg = $i+1;
             DB::table('barang')->insert(
                [
                    'kode_barang'=>Str::random(7),
                    'nama_barang'=>$barang3[$i],
                    'kategori_barang'=>$kategori[2],
                    'harga'=>$hg.'000',
                    'qty'=>$i+2,
                ]
            );
        }

        for ($i=0; $i < 5; $i++) { 
             $hg = $i+1;
             DB::table('barang')->insert(
                [
                    'kode_barang'=>Str::random(7),
                    'nama_barang'=>$barang4[$i],
                    'kategori_barang'=>$kategori[3],
                    'harga'=>$hg.'000',
                    'qty'=>$i+2,
                ]
            );
        }
    }
}