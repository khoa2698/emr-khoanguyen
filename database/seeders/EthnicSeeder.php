<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EthnicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ethinics')->insert([
            ['ethinic_id' => '01', 'name' => 'Ba na'],
            ['ethinic_id' => '02', 'name' => 'Bố y'],
            ['ethinic_id' => '03', 'name' => 'Brâu'],
            ['ethinic_id' => '04', 'name' => 'Chăm'],
            ['ethinic_id' => '05', 'name' => 'Chơ ro'],
            ['ethinic_id' => '06', 'name' => 'Chu ru'],
            ['ethinic_id' => '07', 'name' => 'Chứt'],
            ['ethinic_id' => '08', 'name' => 'Co'],
            ['ethinic_id' => '09', 'name' => 'Cống'],
            ['ethinic_id' => '10', 'name' => 'Cơ ho'],
            ['ethinic_id' => '11', 'name' => 'Cờ lao'],
            ['ethinic_id' => '12', 'name' => 'Dao'],
            ['ethinic_id' => '13', 'name' => 'Ê đê'],
            ['ethinic_id' => '14', 'name' => 'Gia rai'],
            ['ethinic_id' => '15', 'name' => 'Giấy'],
            ['ethinic_id' => '16', 'name' => 'Gié triêng'],
            ['ethinic_id' => '17', 'name' => 'H mông'],
            ['ethinic_id' => '18', 'name' => 'H rê'],
            ['ethinic_id' => '19', 'name' => 'Hà nhì'],
            ['ethinic_id' => '20', 'name' => 'Hoa'],
            ['ethinic_id' => '21', 'name' => 'K tu'],
            ['ethinic_id' => '22', 'name' => 'Kháng'],
            ['ethinic_id' => '23', 'name' => 'Khơ me'],
            ['ethinic_id' => '24', 'name' => 'Khơ mú'],
            ['ethinic_id' => '25', 'name' => 'Kinh'],
            ['ethinic_id' => '26', 'name' => 'La chí'],
            ['ethinic_id' => '27', 'name' => 'La ha'],
            ['ethinic_id' => '28', 'name' => 'La hù'],
            ['ethinic_id' => '29', 'name' => 'Lào'],
            ['ethinic_id' => '30', 'name' => 'Lô lô'],
            ['ethinic_id' => '31', 'name' => 'Lự'],
            ['ethinic_id' => '32', 'name' => 'M nông'],
            ['ethinic_id' => '33', 'name' => 'Ma'],
            ['ethinic_id' => '34', 'name' => 'Mảng'],
            ['ethinic_id' => '35', 'name' => 'Mường'],
            ['ethinic_id' => '36', 'name' => 'Ngái'],
            ['ethinic_id' => '37', 'name' => 'Nùng'],
            ['ethinic_id' => '38', 'name' => 'Ơ đu'],
            ['ethinic_id' => '39', 'name' => 'Pà thẻn'],
            ['ethinic_id' => '40', 'name' => 'Phú lá'],
            ['ethinic_id' => '41', 'name' => 'Pu péo'],
            ['ethinic_id' => '42', 'name' => 'Rag lai'],
            ['ethinic_id' => '43', 'name' => 'Rơ man'],
            ['ethinic_id' => '44', 'name' => 'Sán chay'],
            ['ethinic_id' => '45', 'name' => 'Sán rìu'],
            ['ethinic_id' => '46', 'name' => 'Si la'],
            ['ethinic_id' => '47', 'name' => 'Tà ôi'],
            ['ethinic_id' => '48', 'name' => 'Tày'],
            ['ethinic_id' => '49', 'name' => 'Thái'],
            ['ethinic_id' => '50', 'name' => 'Thổ'],
            ['ethinic_id' => '51', 'name' => 'Vân kiều'],
            ['ethinic_id' => '52', 'name' => 'X tiêng'],
            ['ethinic_id' => '53', 'name' => 'Xinh mun'],
            ['ethinic_id' => '54', 'name' => 'Xơ đăng'],
        ]);
    }
}
