<?php

namespace Database\Seeders;

use App\Models\user;
use App\Models\Traits\HasUuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodata = [
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'A',
                'pekerjaan' => 'Karyawan A',
                'tanggal_lahir' => '2022-04-12'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'B',
                'pekerjaan' => 'Karyawan B',
                'tanggal_lahir' => '2022-04-13'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'C',
                'pekerjaan' => 'Karyawan C',
                'tanggal_lahir' => '2022-04-14'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'D',
                'pekerjaan' => 'Karyawan D',
                'tanggal_lahir' => '2022-04-15'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'E',
                'pekerjaan' => 'Karyawan E',
                'tanggal_lahir' => '2022-04-16'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'F',
                'pekerjaan' => 'Karyawan F',
                'tanggal_lahir' => '2022-04-17'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'G',
                'pekerjaan' => 'Karyawan G',
                'tanggal_lahir' => '2022-04-18'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'H',
                'pekerjaan' => 'Karyawan H',
                'tanggal_lahir' => '2022-04-19'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'I',
                'pekerjaan' => 'Karyawan I',
                'tanggal_lahir' => '2022-04-20'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'J',
                'pekerjaan' => 'Karyawan J',
                'tanggal_lahir' => '2022-04-21'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'K',
                'pekerjaan' => 'Karyawan K',
                'tanggal_lahir' => '2022-04-22'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'L',
                'pekerjaan' => 'Karyawan L',
                'tanggal_lahir' => '2022-04-23'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'M',
                'pekerjaan' => 'Karyawan M',
                'tanggal_lahir' => '2022-04-24'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'N',
                'pekerjaan' => 'Karyawan N',
                'tanggal_lahir' => '2022-04-25'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'O',
                'pekerjaan' => 'Karyawan O',
                'tanggal_lahir' => '2022-04-26'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'P',
                'pekerjaan' => 'Karyawan P',
                'tanggal_lahir' => '2022-04-27'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'Q',
                'pekerjaan' => 'Karyawan Q',
                'tanggal_lahir' => '2022-04-28'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'R',
                'pekerjaan' => 'Karyawan R',
                'tanggal_lahir' => '2022-04-29'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'S',
                'pekerjaan' => 'Karyawan S',
                'tanggal_lahir' => '2022-04-30'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'T',
                'pekerjaan' => 'Karyawan T',
                'tanggal_lahir' => '2022-06-01'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'U',
                'pekerjaan' => 'Karyawan U',
                'tanggal_lahir' => '2022-06-02'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'V',
                'pekerjaan' => 'Karyawan V',
                'tanggal_lahir' => '2022-06-03'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'W',
                'pekerjaan' => 'Karyawan W',
                'tanggal_lahir' => '2022-06-04'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'X',
                'pekerjaan' => 'Karyawan X',
                'tanggal_lahir' => '2022-06-05'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'Y',
                'pekerjaan' => 'Karyawan Y',
                'tanggal_lahir' => '2022-06-06'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'Z',
                'pekerjaan' => 'Karyawan Z',
                'tanggal_lahir' => '2022-06-07'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AA',
                'pekerjaan' => 'Karyawan AA',
                'tanggal_lahir' => '2022-06-08'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AB',
                'pekerjaan' => 'Karyawan T',
                'tanggal_lahir' => '2022-06-09'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AC',
                'pekerjaan' => 'Karyawan AC',
                'tanggal_lahir' => '2022-06-10'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AD',
                'pekerjaan' => 'Karyawan AD',
                'tanggal_lahir' => '2022-06-11'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AE',
                'pekerjaan' => 'Karyawan AE',
                'tanggal_lahir' => '2022-06-12'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AF',
                'pekerjaan' => 'Karyawan AF',
                'tanggal_lahir' => '2022-06-13'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AG',
                'pekerjaan' => 'Karyawan AG',
                'tanggal_lahir' => '2022-06-14'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AH',
                'pekerjaan' => 'Karyawan AH',
                'tanggal_lahir' => '2022-06-15'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AI',
                'pekerjaan' => 'Karyawan AI',
                'tanggal_lahir' => '2022-06-16'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AJ',
                'pekerjaan' => 'Karyawan AJ',
                'tanggal_lahir' => '2022-06-17'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AK',
                'pekerjaan' => 'Karyawan AK',
                'tanggal_lahir' => '2022-06-18'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AL',
                'pekerjaan' => 'Karyawan AL',
                'tanggal_lahir' => '2022-06-19'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AM',
                'pekerjaan' => 'Karyawan AM',
                'tanggal_lahir' => '2022-06-20'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AN',
                'pekerjaan' => 'Karyawan AN',
                'tanggal_lahir' => '2022-06-21'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AO',
                'pekerjaan' => 'Karyawan AO',
                'tanggal_lahir' => '2022-06-22'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AP',
                'pekerjaan' => 'Karyawan AP',
                'tanggal_lahir' => '2022-06-22'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AQ',
                'pekerjaan' => 'Karyawan AQ',
                'tanggal_lahir' => '2022-06-23'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AR',
                'pekerjaan' => 'Karyawan AR',
                'tanggal_lahir' => '2022-06-24'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AS',
                'pekerjaan' => 'Karyawan AS',
                'tanggal_lahir' => '2022-06-25'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AT',
                'pekerjaan' => 'Karyawan AT',
                'tanggal_lahir' => '2022-06-26'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AU',
                'pekerjaan' => 'Karyawan AU',
                'tanggal_lahir' => '2022-06-27'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AV',
                'pekerjaan' => 'Karyawan AI',
                'tanggal_lahir' => '2022-06-28'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AW',
                'pekerjaan' => 'Karyawan AW',
                'tanggal_lahir' => '2022-06-29'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AX',
                'pekerjaan' => 'Karyawan AX',
                'tanggal_lahir' => '2022-06-30'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AY',
                'pekerjaan' => 'Karyawan AY',
                'tanggal_lahir' => '2022-07-01'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'AZ',
                'pekerjaan' => 'Karyawan AZ',
                'tanggal_lahir' => '2022-07-02'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'BA',
                'pekerjaan' => 'Karyawan BA',
                'tanggal_lahir' => '2022-07-03'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'BB',
                'pekerjaan' => 'Karyawan BB',
                'tanggal_lahir' => '2022-06-04'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'BC',
                'pekerjaan' => 'Karyawan BC',
                'tanggal_lahir' => '2022-06-05'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'BD',
                'pekerjaan' => 'Karyawan BD',
                'tanggal_lahir' => '2022-07-06'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'BE',
                'pekerjaan' => 'Karyawan BE',
                'tanggal_lahir' => '2022-07-07'
            ],
            [
                'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'nama' => 'BF',
                'pekerjaan' => 'Karyawan BF',
                'tanggal_lahir' => '2022-07-08'
            ],

        ];


        \DB::table('biodatas')->insert($biodata);
    }
}
