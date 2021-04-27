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
                'ten_the_loai' => 'xe_van_dong_cho_be',//'Xe đạp điện',

            ],
            [
                'ten_the_loai' => 'xe_dap_tre_em',//'Xe máy điện',

            ],
            [
                'ten_the_loai' => 'xe_dap_pho_thong',//'Xe máy 50cc',

            ],
            [
                'ten_the_loai' => 'xe_dap_the_thao',//'Xe ga 50cc',

            ],
            [
                'ten_the_loai' => 'xe_dap_dua',//'Xe số 50cc',

            ],
            [
                'ten_the_loai' => 'xe_dap_gap',//'Xe đạp',

            ],
            [
                'ten_the_loai' => 'xe_dap_dien',//'Xe thanh lý',

            ],
            [
                'ten_the_loai' => 'xe_dap_khuyen_mai',//'Xe thanh lý',

            ],
            [
                'ten_the_loai' => 'phu_tung',//'Phụ kiện',

            ]
        ];
        DB::table('categories')->insert($data);
    }
}
