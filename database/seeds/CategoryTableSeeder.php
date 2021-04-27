<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  [
            [
                'name' => 'xe_van_dong_cho_be',//'Xe đạp điện',

            ],
            [
                'name' => 'xe_dap_tre_em',//'Xe máy điện',

            ],
            [
                'name' => 'xe_dap_pho_thong',//'Xe máy 50cc',

            ],
            [
                'name' => 'xe_dap_the_thao',//'Xe ga 50cc',

            ],
            [
                'name' => 'xe_dap_dua',//'Xe số 50cc',

            ],
            [
                'name' => 'xe_dap_gap',//'Xe đạp',

            ],
            [
                'name' => 'xe_dap_dien',//'Xe thanh lý',

            ],
            [
                'name' => 'xe_dap_khuyen_mai',//'Xe thanh lý',

            ],
            [
                'name' => 'phu_tung',//'Phụ kiện',

            ]
        ];
        DB::table('categories')->insert($data);
    }
}
