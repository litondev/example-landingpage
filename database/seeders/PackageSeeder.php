<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Package,
    PackageFeature
};

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packageFree = Package::create([
            "name" => "FREE", 
            "type" => "FOREVER",
            "price" => 0,
        ]);

        // FREE 
            PackageFeature::create([
                "package_id" => $packageFree->id,
                "value" => "Pembelian,penjualan dan inventory",
            ]);

            PackageFeature::create([
                "package_id" => $packageFree->id,
                "value" => "1 User",
            ]);

            PackageFeature::create([
                "package_id" => $packageFree->id,
                "value" => "Monitor biaya pengeluaran",
            ]);       

            PackageFeature::create([
                "package_id" => $packageFree->id,
                "value" => "Monitor saldo kas & bank",
            ]);

            PackageFeature::create([
                "package_id" => $packageFree->id,
                "value" => "Laporan keuangan & bisnis",
            ]);

            PackageFeature::create([
                "package_id" => $packageFree->id,
                "value" => "Auto update",
            ]);                   
        // FREE

        $packageStandardMonth = Package::create([
            "name" => "STANDARD", 
            "type" => "MONTH",
            "price" => 100000,
        ]);

        // STANDARD 
            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Semua fiture yang free"
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "3 User",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "2 Gudang",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Alur bisnis lengkap",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Manajemen Stok",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Aset tetap",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Inventori multi gudang",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Laporan keuangan & bisnis",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Multi cabang, multi divisi, multi outlet, multi proyek",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Produk paket",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "Pembatasan hak akses",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "File attachment",
            ]);

            PackageFeature::create([
                "package_id" => $packageStandardMonth->id,
                "value" => "24/7 Support",
            ]);
        // STANDARD


        $packageProMonth = Package::create([
            "name" => "PRO", 
            "type" => "MONTH",
            "price" => 150000,
        ]);

        // PRO
            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Semua fiture yang standard"
            ]);

            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "5 User",
            ]);

            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "5 Gudang",
            ]);

            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Multi Currency",
            ]);
            
            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Konsolidasi anak perusahaan",
            ]);

            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Produk manufaktur",
            ]);
            
            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Budgeting",
            ]);
            
            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Konversi satuan",
            ]);

            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Harga bertingkat",
            ]);
            
            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Diskon perkontak & per produk",
            ]);
                        
            PackageFeature::create([
                "package_id" => $packageProMonth->id,
                "value" => "Advance sales commission",
            ]);
        // PRO


        $packageEnterpriseMonth = Package::create([
            "name" => "ENTERPRISE", 
            "type" => "MONTH",
            "price" => 200000,
        ]);

        // ENTERPRISE 
            PackageFeature::create([
                "package_id" => $packageEnterpriseMonth->id,
                "value" => "Semua fiture yang pro"
            ]);

            PackageFeature::create([
                "package_id" => $packageEnterpriseMonth->id,
                "value" => "10 User",
            ]);

            PackageFeature::create([
                "package_id" => $packageEnterpriseMonth->id,
                "value" => "10 Gudang",
            ]);
                    
            PackageFeature::create([
                "package_id" => $packageEnterpriseMonth->id,
                "value" => "Auto backup",
            ]);
        // ENTERPRISE

        $packageStandardYear = Package::create([
            "name" => "STANDARD", 
            "type" => "YEAR",
            "price" => 1000000,
            "description" => "Hemat Rp.200.000"
        ]);

            PackageFeature::create([
                "package_id" => $packageStandardYear->id,
                "value" => "Semua fiture paket standard",
            ]);


        $packageProYear = Package::create([
            "name" => "PRO", 
            "type" => "YEAR",
            "price" => 1250000,
            "description" => "Hemat Rp.200.000"
        ]);

            PackageFeature::create([
                "package_id" => $packageProYear->id,
                "value" => "Semua fiture paket pro"
            ]);

        $packageEnterpriseYear = Package::create([
            "name" => "ENTERPRISE", 
            "type" => "YEAR",
            "price" => 2000000,
            "description" => "Hemat Rp.200.000"
        ]);

            PackageFeature::create([
                "package_id" => $packageEnterpriseYear->id,
                "value" => "Semua fiture paket enterprise"
            ]);
    }
}
