<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            'nama_barang'=>'Susu Etawin',
            'foto_barang'=>'susu_etawin.png',
            'harga'=>'120000',
            'harga_diskon'=>'100000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Generos',
            'foto_barang'=>'generos.png',
            'harga'=>'450000',
            'harga_diskon'=>'400000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Generos',
            'foto_barang'=>'generos.png',
            'harga'=>'450000',
            'harga_diskon'=>'400000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Susu Etawin',
            'foto_barang'=>'susu_etawin.png',
            'harga'=>'120000',
            'harga_diskon'=>'100000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Generos',
            'foto_barang'=>'generos.png',
            'harga'=>'450000',
            'harga_diskon'=>'400000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Generos',
            'foto_barang'=>'generos.png',
            'harga'=>'450000',
            'harga_diskon'=>'400000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Susu Etawin',
            'foto_barang'=>'susu_etawin.png',
            'harga'=>'120000',
            'harga_diskon'=>'100000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Generos',
            'foto_barang'=>'generos.png',
            'harga'=>'450000',
            'harga_diskon'=>'400000',
        ]);
        DB::table('barang')->insert([
            'nama_barang'=>'Generos',
            'foto_barang'=>'generos.png',
            'harga'=>'450000',
            'harga_diskon'=>'400000',
        ]);
    }
}
