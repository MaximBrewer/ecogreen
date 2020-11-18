<?php

use Illuminate\Database\Seeder;

class Permission_roleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
     try {
        \DB::beginTransaction();

        \DB::table('permission_role')->delete();

        \DB::table('permission_role')->insert(array (
                0 => 
                array (
                    'permission_id' => 1,
                    'role_id' => 1,
                ),
                1 => 
                array (
                    'permission_id' => 1,
                    'role_id' => 3,
                ),
                2 => 
                array (
                    'permission_id' => 2,
                    'role_id' => 3,
                ),
                3 => 
                array (
                    'permission_id' => 3,
                    'role_id' => 3,
                ),
                4 => 
                array (
                    'permission_id' => 4,
                    'role_id' => 1,
                ),
                5 => 
                array (
                    'permission_id' => 4,
                    'role_id' => 3,
                ),
                6 => 
                array (
                    'permission_id' => 5,
                    'role_id' => 3,
                ),
                7 => 
                array (
                    'permission_id' => 6,
                    'role_id' => 3,
                ),
                8 => 
                array (
                    'permission_id' => 7,
                    'role_id' => 3,
                ),
                9 => 
                array (
                    'permission_id' => 8,
                    'role_id' => 3,
                ),
                10 => 
                array (
                    'permission_id' => 9,
                    'role_id' => 3,
                ),
                11 => 
                array (
                    'permission_id' => 10,
                    'role_id' => 3,
                ),
                12 => 
                array (
                    'permission_id' => 11,
                    'role_id' => 1,
                ),
                13 => 
                array (
                    'permission_id' => 11,
                    'role_id' => 3,
                ),
                14 => 
                array (
                    'permission_id' => 12,
                    'role_id' => 1,
                ),
                15 => 
                array (
                    'permission_id' => 12,
                    'role_id' => 3,
                ),
                16 => 
                array (
                    'permission_id' => 13,
                    'role_id' => 1,
                ),
                17 => 
                array (
                    'permission_id' => 13,
                    'role_id' => 3,
                ),
                18 => 
                array (
                    'permission_id' => 14,
                    'role_id' => 1,
                ),
                19 => 
                array (
                    'permission_id' => 14,
                    'role_id' => 3,
                ),
                20 => 
                array (
                    'permission_id' => 16,
                    'role_id' => 1,
                ),
                21 => 
                array (
                    'permission_id' => 16,
                    'role_id' => 3,
                ),
                22 => 
                array (
                    'permission_id' => 17,
                    'role_id' => 1,
                ),
                23 => 
                array (
                    'permission_id' => 17,
                    'role_id' => 3,
                ),
                24 => 
                array (
                    'permission_id' => 18,
                    'role_id' => 1,
                ),
                25 => 
                array (
                    'permission_id' => 18,
                    'role_id' => 3,
                ),
                26 => 
                array (
                    'permission_id' => 19,
                    'role_id' => 1,
                ),
                27 => 
                array (
                    'permission_id' => 19,
                    'role_id' => 3,
                ),
                28 => 
                array (
                    'permission_id' => 20,
                    'role_id' => 1,
                ),
                29 => 
                array (
                    'permission_id' => 20,
                    'role_id' => 3,
                ),
                30 => 
                array (
                    'permission_id' => 21,
                    'role_id' => 1,
                ),
                31 => 
                array (
                    'permission_id' => 21,
                    'role_id' => 3,
                ),
                32 => 
                array (
                    'permission_id' => 22,
                    'role_id' => 1,
                ),
                33 => 
                array (
                    'permission_id' => 22,
                    'role_id' => 3,
                ),
                34 => 
                array (
                    'permission_id' => 23,
                    'role_id' => 1,
                ),
                35 => 
                array (
                    'permission_id' => 23,
                    'role_id' => 3,
                ),
                36 => 
                array (
                    'permission_id' => 24,
                    'role_id' => 1,
                ),
                37 => 
                array (
                    'permission_id' => 24,
                    'role_id' => 3,
                ),
                38 => 
                array (
                    'permission_id' => 25,
                    'role_id' => 1,
                ),
                39 => 
                array (
                    'permission_id' => 25,
                    'role_id' => 3,
                ),
                40 => 
                array (
                    'permission_id' => 26,
                    'role_id' => 3,
                ),
                41 => 
                array (
                    'permission_id' => 27,
                    'role_id' => 3,
                ),
                42 => 
                array (
                    'permission_id' => 28,
                    'role_id' => 3,
                ),
                43 => 
                array (
                    'permission_id' => 29,
                    'role_id' => 3,
                ),
                44 => 
                array (
                    'permission_id' => 30,
                    'role_id' => 3,
                ),
                45 => 
                array (
                    'permission_id' => 31,
                    'role_id' => 1,
                ),
                46 => 
                array (
                    'permission_id' => 31,
                    'role_id' => 3,
                ),
                47 => 
                array (
                    'permission_id' => 32,
                    'role_id' => 1,
                ),
                48 => 
                array (
                    'permission_id' => 32,
                    'role_id' => 3,
                ),
                49 => 
                array (
                    'permission_id' => 33,
                    'role_id' => 1,
                ),
                50 => 
                array (
                    'permission_id' => 33,
                    'role_id' => 3,
                ),
                51 => 
                array (
                    'permission_id' => 34,
                    'role_id' => 1,
                ),
                52 => 
                array (
                    'permission_id' => 34,
                    'role_id' => 3,
                ),
                53 => 
                array (
                    'permission_id' => 35,
                    'role_id' => 1,
                ),
                54 => 
                array (
                    'permission_id' => 35,
                    'role_id' => 3,
                ),
                55 => 
                array (
                    'permission_id' => 36,
                    'role_id' => 3,
                ),
                56 => 
                array (
                    'permission_id' => 37,
                    'role_id' => 3,
                ),
                57 => 
                array (
                    'permission_id' => 38,
                    'role_id' => 3,
                ),
                58 => 
                array (
                    'permission_id' => 39,
                    'role_id' => 3,
                ),
                59 => 
                array (
                    'permission_id' => 40,
                    'role_id' => 3,
                ),
                60 => 
                array (
                    'permission_id' => 41,
                    'role_id' => 3,
                ),
                61 => 
                array (
                    'permission_id' => 42,
                    'role_id' => 1,
                ),
                62 => 
                array (
                    'permission_id' => 42,
                    'role_id' => 3,
                ),
                63 => 
                array (
                    'permission_id' => 43,
                    'role_id' => 1,
                ),
                64 => 
                array (
                    'permission_id' => 43,
                    'role_id' => 3,
                ),
                65 => 
                array (
                    'permission_id' => 44,
                    'role_id' => 1,
                ),
                66 => 
                array (
                    'permission_id' => 44,
                    'role_id' => 3,
                ),
                67 => 
                array (
                    'permission_id' => 45,
                    'role_id' => 1,
                ),
                68 => 
                array (
                    'permission_id' => 45,
                    'role_id' => 3,
                ),
                69 => 
                array (
                    'permission_id' => 46,
                    'role_id' => 1,
                ),
                70 => 
                array (
                    'permission_id' => 46,
                    'role_id' => 3,
                ),
                71 => 
                array (
                    'permission_id' => 47,
                    'role_id' => 1,
                ),
                72 => 
                array (
                    'permission_id' => 47,
                    'role_id' => 3,
                ),
                73 => 
                array (
                    'permission_id' => 48,
                    'role_id' => 1,
                ),
                74 => 
                array (
                    'permission_id' => 48,
                    'role_id' => 3,
                ),
                75 => 
                array (
                    'permission_id' => 49,
                    'role_id' => 1,
                ),
                76 => 
                array (
                    'permission_id' => 49,
                    'role_id' => 3,
                ),
                77 => 
                array (
                    'permission_id' => 50,
                    'role_id' => 1,
                ),
                78 => 
                array (
                    'permission_id' => 50,
                    'role_id' => 3,
                ),
                79 => 
                array (
                    'permission_id' => 51,
                    'role_id' => 1,
                ),
                80 => 
                array (
                    'permission_id' => 51,
                    'role_id' => 3,
                ),
                81 => 
                array (
                    'permission_id' => 52,
                    'role_id' => 1,
                ),
                82 => 
                array (
                    'permission_id' => 52,
                    'role_id' => 3,
                ),
                83 => 
                array (
                    'permission_id' => 53,
                    'role_id' => 1,
                ),
                84 => 
                array (
                    'permission_id' => 53,
                    'role_id' => 3,
                ),
                85 => 
                array (
                    'permission_id' => 54,
                    'role_id' => 1,
                ),
                86 => 
                array (
                    'permission_id' => 54,
                    'role_id' => 3,
                ),
                87 => 
                array (
                    'permission_id' => 55,
                    'role_id' => 1,
                ),
                88 => 
                array (
                    'permission_id' => 55,
                    'role_id' => 3,
                ),
                89 => 
                array (
                    'permission_id' => 56,
                    'role_id' => 1,
                ),
                90 => 
                array (
                    'permission_id' => 56,
                    'role_id' => 3,
                ),
                91 => 
                array (
                    'permission_id' => 57,
                    'role_id' => 1,
                ),
                92 => 
                array (
                    'permission_id' => 57,
                    'role_id' => 3,
                ),
                93 => 
                array (
                    'permission_id' => 58,
                    'role_id' => 1,
                ),
                94 => 
                array (
                    'permission_id' => 58,
                    'role_id' => 3,
                ),
                95 => 
                array (
                    'permission_id' => 59,
                    'role_id' => 1,
                ),
                96 => 
                array (
                    'permission_id' => 59,
                    'role_id' => 3,
                ),
                97 => 
                array (
                    'permission_id' => 60,
                    'role_id' => 1,
                ),
                98 => 
                array (
                    'permission_id' => 60,
                    'role_id' => 3,
                ),
                99 => 
                array (
                    'permission_id' => 61,
                    'role_id' => 1,
                ),
                100 => 
                array (
                    'permission_id' => 61,
                    'role_id' => 3,
                ),
                101 => 
                array (
                    'permission_id' => 67,
                    'role_id' => 1,
                ),
                102 => 
                array (
                    'permission_id' => 67,
                    'role_id' => 3,
                ),
                103 => 
                array (
                    'permission_id' => 68,
                    'role_id' => 1,
                ),
                104 => 
                array (
                    'permission_id' => 68,
                    'role_id' => 3,
                ),
                105 => 
                array (
                    'permission_id' => 69,
                    'role_id' => 1,
                ),
                106 => 
                array (
                    'permission_id' => 69,
                    'role_id' => 3,
                ),
                107 => 
                array (
                    'permission_id' => 71,
                    'role_id' => 1,
                ),
                108 => 
                array (
                    'permission_id' => 71,
                    'role_id' => 3,
                ),
                109 => 
                array (
                    'permission_id' => 72,
                    'role_id' => 1,
                ),
                110 => 
                array (
                    'permission_id' => 72,
                    'role_id' => 3,
                ),
                111 => 
                array (
                    'permission_id' => 73,
                    'role_id' => 1,
                ),
                112 => 
                array (
                    'permission_id' => 73,
                    'role_id' => 3,
                ),
                113 => 
                array (
                    'permission_id' => 74,
                    'role_id' => 1,
                ),
                114 => 
                array (
                    'permission_id' => 74,
                    'role_id' => 3,
                ),
                115 => 
                array (
                    'permission_id' => 75,
                    'role_id' => 1,
                ),
                116 => 
                array (
                    'permission_id' => 75,
                    'role_id' => 3,
                ),
                117 => 
                array (
                    'permission_id' => 76,
                    'role_id' => 1,
                ),
                118 => 
                array (
                    'permission_id' => 76,
                    'role_id' => 3,
                ),
                119 => 
                array (
                    'permission_id' => 77,
                    'role_id' => 1,
                ),
                120 => 
                array (
                    'permission_id' => 77,
                    'role_id' => 3,
                ),
                121 => 
                array (
                    'permission_id' => 78,
                    'role_id' => 1,
                ),
                122 => 
                array (
                    'permission_id' => 78,
                    'role_id' => 3,
                ),
                123 => 
                array (
                    'permission_id' => 79,
                    'role_id' => 1,
                ),
                124 => 
                array (
                    'permission_id' => 79,
                    'role_id' => 3,
                ),
                125 => 
                array (
                    'permission_id' => 80,
                    'role_id' => 1,
                ),
                126 => 
                array (
                    'permission_id' => 80,
                    'role_id' => 3,
                ),
                127 => 
                array (
                    'permission_id' => 81,
                    'role_id' => 1,
                ),
                128 => 
                array (
                    'permission_id' => 81,
                    'role_id' => 3,
                ),
                129 => 
                array (
                    'permission_id' => 87,
                    'role_id' => 1,
                ),
                130 => 
                array (
                    'permission_id' => 87,
                    'role_id' => 3,
                ),
                131 => 
                array (
                    'permission_id' => 88,
                    'role_id' => 1,
                ),
                132 => 
                array (
                    'permission_id' => 88,
                    'role_id' => 3,
                ),
                133 => 
                array (
                    'permission_id' => 89,
                    'role_id' => 1,
                ),
                134 => 
                array (
                    'permission_id' => 89,
                    'role_id' => 3,
                ),
                135 => 
                array (
                    'permission_id' => 90,
                    'role_id' => 1,
                ),
                136 => 
                array (
                    'permission_id' => 90,
                    'role_id' => 3,
                ),
                137 => 
                array (
                    'permission_id' => 91,
                    'role_id' => 1,
                ),
                138 => 
                array (
                    'permission_id' => 91,
                    'role_id' => 3,
                ),
                139 => 
                array (
                    'permission_id' => 92,
                    'role_id' => 1,
                ),
                140 => 
                array (
                    'permission_id' => 92,
                    'role_id' => 3,
                ),
                141 => 
                array (
                    'permission_id' => 93,
                    'role_id' => 1,
                ),
                142 => 
                array (
                    'permission_id' => 93,
                    'role_id' => 3,
                ),
                143 => 
                array (
                    'permission_id' => 94,
                    'role_id' => 1,
                ),
                144 => 
                array (
                    'permission_id' => 94,
                    'role_id' => 3,
                ),
                145 => 
                array (
                    'permission_id' => 95,
                    'role_id' => 1,
                ),
                146 => 
                array (
                    'permission_id' => 95,
                    'role_id' => 3,
                ),
                147 => 
                array (
                    'permission_id' => 96,
                    'role_id' => 1,
                ),
                148 => 
                array (
                    'permission_id' => 96,
                    'role_id' => 3,
                ),
                149 => 
                array (
                    'permission_id' => 102,
                    'role_id' => 1,
                ),
                150 => 
                array (
                    'permission_id' => 102,
                    'role_id' => 3,
                ),
                151 => 
                array (
                    'permission_id' => 103,
                    'role_id' => 1,
                ),
                152 => 
                array (
                    'permission_id' => 103,
                    'role_id' => 3,
                ),
                153 => 
                array (
                    'permission_id' => 107,
                    'role_id' => 1,
                ),
                154 => 
                array (
                    'permission_id' => 107,
                    'role_id' => 3,
                ),
                155 => 
                array (
                    'permission_id' => 108,
                    'role_id' => 1,
                ),
                156 => 
                array (
                    'permission_id' => 109,
                    'role_id' => 1,
                ),
                157 => 
                array (
                    'permission_id' => 111,
                    'role_id' => 1,
                ),
                158 => 
                array (
                    'permission_id' => 112,
                    'role_id' => 1,
                ),
                159 => 
                array (
                    'permission_id' => 112,
                    'role_id' => 3,
                ),
                160 => 
                array (
                    'permission_id' => 113,
                    'role_id' => 1,
                ),
                161 => 
                array (
                    'permission_id' => 113,
                    'role_id' => 3,
                ),
                162 => 
                array (
                    'permission_id' => 114,
                    'role_id' => 1,
                ),
                163 => 
                array (
                    'permission_id' => 114,
                    'role_id' => 3,
                ),
                164 => 
                array (
                    'permission_id' => 115,
                    'role_id' => 1,
                ),
                165 => 
                array (
                    'permission_id' => 115,
                    'role_id' => 3,
                ),
                166 => 
                array (
                    'permission_id' => 116,
                    'role_id' => 1,
                ),
                167 => 
                array (
                    'permission_id' => 116,
                    'role_id' => 3,
                ),
                168 => 
                array (
                    'permission_id' => 117,
                    'role_id' => 1,
                ),
                169 => 
                array (
                    'permission_id' => 117,
                    'role_id' => 3,
                ),
                170 => 
                array (
                    'permission_id' => 118,
                    'role_id' => 1,
                ),
                171 => 
                array (
                    'permission_id' => 118,
                    'role_id' => 3,
                ),
                172 => 
                array (
                    'permission_id' => 119,
                    'role_id' => 1,
                ),
                173 => 
                array (
                    'permission_id' => 119,
                    'role_id' => 3,
                ),
                174 => 
                array (
                    'permission_id' => 120,
                    'role_id' => 1,
                ),
                175 => 
                array (
                    'permission_id' => 120,
                    'role_id' => 3,
                ),
                176 => 
                array (
                    'permission_id' => 121,
                    'role_id' => 1,
                ),
                177 => 
                array (
                    'permission_id' => 121,
                    'role_id' => 3,
                ),
                178 => 
                array (
                    'permission_id' => 122,
                    'role_id' => 1,
                ),
                179 => 
                array (
                    'permission_id' => 122,
                    'role_id' => 3,
                ),
                180 => 
                array (
                    'permission_id' => 123,
                    'role_id' => 1,
                ),
                181 => 
                array (
                    'permission_id' => 123,
                    'role_id' => 3,
                ),
                182 => 
                array (
                    'permission_id' => 124,
                    'role_id' => 1,
                ),
                183 => 
                array (
                    'permission_id' => 124,
                    'role_id' => 3,
                ),
                184 => 
                array (
                    'permission_id' => 125,
                    'role_id' => 1,
                ),
                185 => 
                array (
                    'permission_id' => 125,
                    'role_id' => 3,
                ),
                186 => 
                array (
                    'permission_id' => 126,
                    'role_id' => 1,
                ),
                187 => 
                array (
                    'permission_id' => 126,
                    'role_id' => 3,
                ),
                188 => 
                array (
                    'permission_id' => 132,
                    'role_id' => 1,
                ),
                189 => 
                array (
                    'permission_id' => 132,
                    'role_id' => 3,
                ),
                190 => 
                array (
                    'permission_id' => 133,
                    'role_id' => 1,
                ),
                191 => 
                array (
                    'permission_id' => 133,
                    'role_id' => 3,
                ),
                192 => 
                array (
                    'permission_id' => 134,
                    'role_id' => 1,
                ),
                193 => 
                array (
                    'permission_id' => 134,
                    'role_id' => 3,
                ),
                194 => 
                array (
                    'permission_id' => 135,
                    'role_id' => 1,
                ),
                195 => 
                array (
                    'permission_id' => 135,
                    'role_id' => 3,
                ),
                196 => 
                array (
                    'permission_id' => 136,
                    'role_id' => 1,
                ),
                197 => 
                array (
                    'permission_id' => 136,
                    'role_id' => 3,
                ),
                198 => 
                array (
                    'permission_id' => 137,
                    'role_id' => 1,
                ),
                199 => 
                array (
                    'permission_id' => 137,
                    'role_id' => 3,
                ),
                200 => 
                array (
                    'permission_id' => 138,
                    'role_id' => 1,
                ),
                201 => 
                array (
                    'permission_id' => 138,
                    'role_id' => 3,
                ),
                202 => 
                array (
                    'permission_id' => 139,
                    'role_id' => 1,
                ),
                203 => 
                array (
                    'permission_id' => 139,
                    'role_id' => 3,
                ),
                204 => 
                array (
                    'permission_id' => 140,
                    'role_id' => 1,
                ),
                205 => 
                array (
                    'permission_id' => 140,
                    'role_id' => 3,
                ),
                206 => 
                array (
                    'permission_id' => 141,
                    'role_id' => 1,
                ),
                207 => 
                array (
                    'permission_id' => 141,
                    'role_id' => 3,
                ),
                208 => 
                array (
                    'permission_id' => 142,
                    'role_id' => 1,
                ),
                209 => 
                array (
                    'permission_id' => 142,
                    'role_id' => 3,
                ),
                210 => 
                array (
                    'permission_id' => 143,
                    'role_id' => 1,
                ),
                211 => 
                array (
                    'permission_id' => 143,
                    'role_id' => 3,
                ),
                212 => 
                array (
                    'permission_id' => 144,
                    'role_id' => 1,
                ),
                213 => 
                array (
                    'permission_id' => 144,
                    'role_id' => 3,
                ),
                214 => 
                array (
                    'permission_id' => 145,
                    'role_id' => 1,
                ),
                215 => 
                array (
                    'permission_id' => 145,
                    'role_id' => 3,
                ),
                216 => 
                array (
                    'permission_id' => 146,
                    'role_id' => 1,
                ),
                217 => 
                array (
                    'permission_id' => 146,
                    'role_id' => 3,
                ),
                218 => 
                array (
                    'permission_id' => 147,
                    'role_id' => 1,
                ),
                219 => 
                array (
                    'permission_id' => 147,
                    'role_id' => 3,
                ),
                220 => 
                array (
                    'permission_id' => 148,
                    'role_id' => 1,
                ),
                221 => 
                array (
                    'permission_id' => 148,
                    'role_id' => 3,
                ),
                222 => 
                array (
                    'permission_id' => 149,
                    'role_id' => 1,
                ),
                223 => 
                array (
                    'permission_id' => 149,
                    'role_id' => 3,
                ),
                224 => 
                array (
                    'permission_id' => 150,
                    'role_id' => 1,
                ),
                225 => 
                array (
                    'permission_id' => 150,
                    'role_id' => 3,
                ),
                226 => 
                array (
                    'permission_id' => 151,
                    'role_id' => 1,
                ),
                227 => 
                array (
                    'permission_id' => 151,
                    'role_id' => 3,
                ),
                228 => 
                array (
                    'permission_id' => 152,
                    'role_id' => 1,
                ),
                229 => 
                array (
                    'permission_id' => 152,
                    'role_id' => 3,
                ),
                230 => 
                array (
                    'permission_id' => 153,
                    'role_id' => 1,
                ),
                231 => 
                array (
                    'permission_id' => 153,
                    'role_id' => 3,
                ),
                232 => 
                array (
                    'permission_id' => 154,
                    'role_id' => 1,
                ),
                233 => 
                array (
                    'permission_id' => 154,
                    'role_id' => 3,
                ),
                234 => 
                array (
                    'permission_id' => 155,
                    'role_id' => 1,
                ),
                235 => 
                array (
                    'permission_id' => 155,
                    'role_id' => 3,
                ),
                236 => 
                array (
                    'permission_id' => 156,
                    'role_id' => 1,
                ),
                237 => 
                array (
                    'permission_id' => 156,
                    'role_id' => 3,
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
