<?php

use Illuminate\Database\Seeder;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'form' => 'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5 amp/kasus.',
            'description' => 'Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'hidromorfon',
            'form' => 'tab lepas lambat 8 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'kodein',
            'form' => 'tab 10 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'morfin',
            'form' => 'tab 10 mg',
            'restriction_formula' => 'initial dosis 3-4 tab/hari.',
            'description' => 'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'oksikodon',
            'form' => 'tab 10 mg',
            'restriction_formula' => 'initial dosis 3-4 tab/hari.',
            'description' => 'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 1
        ]);

        //ke 2
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'form' => 'kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'form' => 'tab 200 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ketoprofen',
            'form' => 'sup 100 mg',
            'restriction_formula' => '2 sup/hari, maks 3 hari.',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak ',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ketorolak',
            'form' => 'inj 30 mg/mL',
            'restriction_formula' => '2-3 amp/hari, maks 2 hari.',
            'description' => 'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 2
        ]);


        //ke 3
        DB::table('medicines')->insert([
            'generic_name' => 'alopurinol',
            'form' => 'tab 100 mg*',
            'restriction_formula' => '30 tab/bulan.',
            'description' => 'Tidak diberikan pada saat nyeri akut.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'kolkisin',
            'form' => 'tab 500 mcg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'probenesid',
            'form' => 'tab 500 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 3
        ]);


        //ke 4
        DB::table('medicines')->insert([
            'generic_name' => 'amitriptilin',
            'form' => 'tab 25 mg',
            'restriction_formula' => '30 tab/bulan.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'gabapentin',
            'form' => 'kaps 100 mg',
            'restriction_formula' => '60 kaps/bulan',
            'description' => 'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'karbamazepin',
            'form' => 'tab 100 mg',
            'restriction_formula' => '60 tab/bulan',
            'description' => 'Hanya untuk neuralgia trigeminal.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 4
        ]);


        //ke 5
        DB::table('medicines')->insert([
            'generic_name' => 'bupivakain',
            'form' => 'inj 0,5%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'etil klorida',
            'form' => 'spray 100 mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'lidokain',
            'form' => 'inj 2%',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 5
        ]);


        //ke 6
        DB::table('medicines')->insert([
            'generic_name' => 'desfluran',
            'form' => 'ih',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'isofluran',
            'form' => 'ih',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'sevofluran',
            'form' => 'ih',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 6
        ]);


        //ke 7
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'inj 0,25 mg/mL (i.v./s.k.)',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'midazolam',
            'form' => 'inj 1 mg/mL (i.v.)',
            'restriction_formula' => 'Dosis rumatan: 1 mg/jam (24 mg/hari).',
            'description' => 'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum.',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 7
        ]);


        //ke 8
        DB::table('medicines')->insert([
            'generic_name' => 'deksametason',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '20 mg/hari.',
            'description' => '.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'epinefrin (adrenalin)',
            'form' => 'inj 1 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'klorfeniramin',
            'form' => 'tab 4 mg ',
            'restriction_formula' => '3 tab/hari, maks 5 hari.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 8
        ]);


        //ke 9
        DB::table('medicines')->insert([
            'generic_name' => 'atropin',
            'form' => 'tab 0,5 mg',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'efedrin',
            'form' => 'inj 50 mg/mL',
            'restriction_formula' => '',
            'description' => '',
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'kalsium glukonat',
            'form' => 'inj 10%',
            'restriction_formula' => '3 tab/hari, maks 5 hari.',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 9
        ]);


        //ke 10
        DB::table('medicines')->insert([
            'generic_name' => 'fenobarbital',
            'form' => 'tab 30 mg*',
            'restriction_formula' => '120 tab/bulan..',
            'description' => '',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'fenitoin ',
            'form' => 'kaps 30 mg*',
            'restriction_formula' => '90 kaps/bulan.',
            'description' => 'Dapat digunakan untuk status konvulsivus',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'diazepam',
            'form' => 'inj 5 mg/mL',
            'restriction_formula' => '10 amp/kasus,kecuali untuk kasus di ICU',
            'description' => 'Tidak untuk i.m.',
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
            'category_id' => 10
        ]);
    }
}
