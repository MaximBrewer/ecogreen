<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
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

            \DB::table('permissions')->delete();

            \DB::table('permissions')->insert(array (
                0 =>
                    array (
                        'id' => 1,
                        'key' => 'browse_admin',
                        'table_name' => NULL,
                        'created_at' => '2020-08-23 17:10:46',
                        'updated_at' => '2020-08-23 17:10:46',
                    ),
                1 =>
                    array (
                        'id' => 2,
                        'key' => 'browse_bread',
                        'table_name' => NULL,
                        'created_at' => '2020-08-23 17:10:46',
                        'updated_at' => '2020-08-23 17:10:46',
                    ),
                2 =>
                    array (
                        'id' => 3,
                        'key' => 'browse_database',
                        'table_name' => NULL,
                        'created_at' => '2020-08-23 17:10:46',
                        'updated_at' => '2020-08-23 17:10:46',
                    ),
                3 =>
                    array (
                        'id' => 4,
                        'key' => 'browse_media',
                        'table_name' => NULL,
                        'created_at' => '2020-08-23 17:10:46',
                        'updated_at' => '2020-08-23 17:10:46',
                    ),
                4 =>
                    array (
                        'id' => 5,
                        'key' => 'browse_compass',
                        'table_name' => NULL,
                        'created_at' => '2020-08-23 17:10:46',
                        'updated_at' => '2020-08-23 17:10:46',
                    ),
                5 =>
                    array (
                        'id' => 6,
                        'key' => 'browse_menus',
                        'table_name' => 'menus',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                6 =>
                    array (
                        'id' => 7,
                        'key' => 'read_menus',
                        'table_name' => 'menus',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                7 =>
                    array (
                        'id' => 8,
                        'key' => 'edit_menus',
                        'table_name' => 'menus',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                8 =>
                    array (
                        'id' => 9,
                        'key' => 'add_menus',
                        'table_name' => 'menus',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                9 =>
                    array (
                        'id' => 10,
                        'key' => 'delete_menus',
                        'table_name' => 'menus',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                10 =>
                    array (
                        'id' => 11,
                        'key' => 'browse_roles',
                        'table_name' => 'roles',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                11 =>
                    array (
                        'id' => 12,
                        'key' => 'read_roles',
                        'table_name' => 'roles',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                12 =>
                    array (
                        'id' => 13,
                        'key' => 'edit_roles',
                        'table_name' => 'roles',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                13 =>
                    array (
                        'id' => 14,
                        'key' => 'add_roles',
                        'table_name' => 'roles',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                14 =>
                    array (
                        'id' => 15,
                        'key' => 'delete_roles',
                        'table_name' => 'roles',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                15 =>
                    array (
                        'id' => 16,
                        'key' => 'browse_users',
                        'table_name' => 'users',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                16 =>
                    array (
                        'id' => 17,
                        'key' => 'read_users',
                        'table_name' => 'users',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                17 =>
                    array (
                        'id' => 18,
                        'key' => 'edit_users',
                        'table_name' => 'users',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                18 =>
                    array (
                        'id' => 19,
                        'key' => 'add_users',
                        'table_name' => 'users',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                19 =>
                    array (
                        'id' => 20,
                        'key' => 'delete_users',
                        'table_name' => 'users',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                20 =>
                    array (
                        'id' => 21,
                        'key' => 'browse_settings',
                        'table_name' => 'settings',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                21 =>
                    array (
                        'id' => 22,
                        'key' => 'read_settings',
                        'table_name' => 'settings',
                        'created_at' => '2020-08-23 17:10:47',
                        'updated_at' => '2020-08-23 17:10:47',
                    ),
                22 =>
                    array (
                        'id' => 23,
                        'key' => 'edit_settings',
                        'table_name' => 'settings',
                        'created_at' => '2020-08-23 17:10:48',
                        'updated_at' => '2020-08-23 17:10:48',
                    ),
                23 =>
                    array (
                        'id' => 24,
                        'key' => 'add_settings',
                        'table_name' => 'settings',
                        'created_at' => '2020-08-23 17:10:48',
                        'updated_at' => '2020-08-23 17:10:48',
                    ),
                24 =>
                    array (
                        'id' => 25,
                        'key' => 'delete_settings',
                        'table_name' => 'settings',
                        'created_at' => '2020-08-23 17:10:48',
                        'updated_at' => '2020-08-23 17:10:48',
                    ),
                25 =>
                    array (
                        'id' => 26,
                        'key' => 'browse_categories',
                        'table_name' => 'categories',
                        'created_at' => '2020-08-23 17:10:59',
                        'updated_at' => '2020-08-23 17:10:59',
                    ),
                26 =>
                    array (
                        'id' => 27,
                        'key' => 'read_categories',
                        'table_name' => 'categories',
                        'created_at' => '2020-08-23 17:10:59',
                        'updated_at' => '2020-08-23 17:10:59',
                    ),
                27 =>
                    array (
                        'id' => 28,
                        'key' => 'edit_categories',
                        'table_name' => 'categories',
                        'created_at' => '2020-08-23 17:10:59',
                        'updated_at' => '2020-08-23 17:10:59',
                    ),
                28 =>
                    array (
                        'id' => 29,
                        'key' => 'add_categories',
                        'table_name' => 'categories',
                        'created_at' => '2020-08-23 17:10:59',
                        'updated_at' => '2020-08-23 17:10:59',
                    ),
                29 =>
                    array (
                        'id' => 30,
                        'key' => 'delete_categories',
                        'table_name' => 'categories',
                        'created_at' => '2020-08-23 17:10:59',
                        'updated_at' => '2020-08-23 17:10:59',
                    ),
                30 =>
                    array (
                        'id' => 31,
                        'key' => 'browse_posts',
                        'table_name' => 'posts',
                        'created_at' => '2020-08-23 17:11:01',
                        'updated_at' => '2020-08-23 17:11:01',
                    ),
                31 =>
                    array (
                        'id' => 32,
                        'key' => 'read_posts',
                        'table_name' => 'posts',
                        'created_at' => '2020-08-23 17:11:01',
                        'updated_at' => '2020-08-23 17:11:01',
                    ),
                32 =>
                    array (
                        'id' => 33,
                        'key' => 'edit_posts',
                        'table_name' => 'posts',
                        'created_at' => '2020-08-23 17:11:01',
                        'updated_at' => '2020-08-23 17:11:01',
                    ),
                33 =>
                    array (
                        'id' => 34,
                        'key' => 'add_posts',
                        'table_name' => 'posts',
                        'created_at' => '2020-08-23 17:11:01',
                        'updated_at' => '2020-08-23 17:11:01',
                    ),
                34 =>
                    array (
                        'id' => 35,
                        'key' => 'delete_posts',
                        'table_name' => 'posts',
                        'created_at' => '2020-08-23 17:11:01',
                        'updated_at' => '2020-08-23 17:11:01',
                    ),
                35 =>
                    array (
                        'id' => 36,
                        'key' => 'browse_pages',
                        'table_name' => 'pages',
                        'created_at' => '2020-08-23 17:11:02',
                        'updated_at' => '2020-08-23 17:11:02',
                    ),
                36 =>
                    array (
                        'id' => 37,
                        'key' => 'read_pages',
                        'table_name' => 'pages',
                        'created_at' => '2020-08-23 17:11:02',
                        'updated_at' => '2020-08-23 17:11:02',
                    ),
                37 =>
                    array (
                        'id' => 38,
                        'key' => 'edit_pages',
                        'table_name' => 'pages',
                        'created_at' => '2020-08-23 17:11:02',
                        'updated_at' => '2020-08-23 17:11:02',
                    ),
                38 =>
                    array (
                        'id' => 39,
                        'key' => 'add_pages',
                        'table_name' => 'pages',
                        'created_at' => '2020-08-23 17:11:02',
                        'updated_at' => '2020-08-23 17:11:02',
                    ),
                39 =>
                    array (
                        'id' => 40,
                        'key' => 'delete_pages',
                        'table_name' => 'pages',
                        'created_at' => '2020-08-23 17:11:02',
                        'updated_at' => '2020-08-23 17:11:02',
                    ),
                40 =>
                    array (
                        'id' => 41,
                        'key' => 'browse_hooks',
                        'table_name' => NULL,
                        'created_at' => '2020-08-23 17:11:06',
                        'updated_at' => '2020-08-23 17:11:06',
                    ),
                41 =>
                    array (
                        'id' => 42,
                        'key' => 'browse_products',
                        'table_name' => 'products',
                        'created_at' => '2020-08-24 05:30:52',
                        'updated_at' => '2020-08-24 05:30:52',
                    ),
                42 =>
                    array (
                        'id' => 43,
                        'key' => 'read_products',
                        'table_name' => 'products',
                        'created_at' => '2020-08-24 05:30:52',
                        'updated_at' => '2020-08-24 05:30:52',
                    ),
                43 =>
                    array (
                        'id' => 44,
                        'key' => 'edit_products',
                        'table_name' => 'products',
                        'created_at' => '2020-08-24 05:30:53',
                        'updated_at' => '2020-08-24 05:30:53',
                    ),
                44 =>
                    array (
                        'id' => 45,
                        'key' => 'add_products',
                        'table_name' => 'products',
                        'created_at' => '2020-08-24 05:30:53',
                        'updated_at' => '2020-08-24 05:30:53',
                    ),
                45 =>
                    array (
                        'id' => 46,
                        'key' => 'delete_products',
                        'table_name' => 'products',
                        'created_at' => '2020-08-24 05:30:53',
                        'updated_at' => '2020-08-24 05:30:53',
                    ),
                46 =>
                    array (
                        'id' => 47,
                        'key' => 'browse_category',
                        'table_name' => 'category',
                        'created_at' => '2020-08-24 05:41:26',
                        'updated_at' => '2020-08-24 05:41:26',
                    ),
                47 =>
                    array (
                        'id' => 48,
                        'key' => 'read_category',
                        'table_name' => 'category',
                        'created_at' => '2020-08-24 05:41:26',
                        'updated_at' => '2020-08-24 05:41:26',
                    ),
                48 =>
                    array (
                        'id' => 49,
                        'key' => 'edit_category',
                        'table_name' => 'category',
                        'created_at' => '2020-08-24 05:41:26',
                        'updated_at' => '2020-08-24 05:41:26',
                    ),
                49 =>
                    array (
                        'id' => 50,
                        'key' => 'add_category',
                        'table_name' => 'category',
                        'created_at' => '2020-08-24 05:41:26',
                        'updated_at' => '2020-08-24 05:41:26',
                    ),
                50 =>
                    array (
                        'id' => 51,
                        'key' => 'delete_category',
                        'table_name' => 'category',
                        'created_at' => '2020-08-24 05:41:26',
                        'updated_at' => '2020-08-24 05:41:26',
                    ),
                51 =>
                    array (
                        'id' => 52,
                        'key' => 'browse_category_items',
                        'table_name' => 'category_items',
                        'created_at' => '2020-08-24 05:47:16',
                        'updated_at' => '2020-08-24 05:47:16',
                    ),
                52 =>
                    array (
                        'id' => 53,
                        'key' => 'read_category_items',
                        'table_name' => 'category_items',
                        'created_at' => '2020-08-24 05:47:16',
                        'updated_at' => '2020-08-24 05:47:16',
                    ),
                53 =>
                    array (
                        'id' => 54,
                        'key' => 'edit_category_items',
                        'table_name' => 'category_items',
                        'created_at' => '2020-08-24 05:47:16',
                        'updated_at' => '2020-08-24 05:47:16',
                    ),
                54 =>
                    array (
                        'id' => 55,
                        'key' => 'add_category_items',
                        'table_name' => 'category_items',
                        'created_at' => '2020-08-24 05:47:16',
                        'updated_at' => '2020-08-24 05:47:16',
                    ),
                55 =>
                    array (
                        'id' => 56,
                        'key' => 'delete_category_items',
                        'table_name' => 'category_items',
                        'created_at' => '2020-08-24 05:47:16',
                        'updated_at' => '2020-08-24 05:47:16',
                    ),
                56 =>
                    array (
                        'id' => 57,
                        'key' => 'browse_product_type_packings',
                        'table_name' => 'product_type_packings',
                        'created_at' => '2020-08-24 18:36:33',
                        'updated_at' => '2020-08-24 18:36:33',
                    ),
                57 =>
                    array (
                        'id' => 58,
                        'key' => 'read_product_type_packings',
                        'table_name' => 'product_type_packings',
                        'created_at' => '2020-08-24 18:36:33',
                        'updated_at' => '2020-08-24 18:36:33',
                    ),
                58 =>
                    array (
                        'id' => 59,
                        'key' => 'edit_product_type_packings',
                        'table_name' => 'product_type_packings',
                        'created_at' => '2020-08-24 18:36:33',
                        'updated_at' => '2020-08-24 18:36:33',
                    ),
                59 =>
                    array (
                        'id' => 60,
                        'key' => 'add_product_type_packings',
                        'table_name' => 'product_type_packings',
                        'created_at' => '2020-08-24 18:36:33',
                        'updated_at' => '2020-08-24 18:36:33',
                    ),
                60 =>
                    array (
                        'id' => 61,
                        'key' => 'delete_product_type_packings',
                        'table_name' => 'product_type_packings',
                        'created_at' => '2020-08-24 18:36:33',
                        'updated_at' => '2020-08-24 18:36:33',
                    ),
                61 =>
                    array (
                        'id' => 67,
                        'key' => 'browse_content_menus',
                        'table_name' => 'content_menus',
                        'created_at' => '2020-08-29 19:55:50',
                        'updated_at' => '2020-08-29 19:55:50',
                    ),
                62 =>
                    array (
                        'id' => 68,
                        'key' => 'edit_content_menus',
                        'table_name' => 'content_menus',
                        'created_at' => '2020-08-29 19:55:50',
                        'updated_at' => '2020-08-29 19:55:50',
                    ),
                63 =>
                    array (
                        'id' => 69,
                        'key' => 'add_content_menus',
                        'table_name' => 'content_menus',
                        'created_at' => '2020-08-29 19:55:50',
                        'updated_at' => '2020-08-29 19:55:50',
                    ),
                64 =>
                    array (
                        'id' => 70,
                        'key' => 'delete_content_menus',
                        'table_name' => 'content_menus',
                        'created_at' => '2020-08-29 19:55:50',
                        'updated_at' => '2020-08-29 19:55:50',
                    ),
                65 =>
                    array (
                        'id' => 71,
                        'key' => 'read_content_menus',
                        'table_name' => 'content_menus',
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                66 =>
                    array (
                        'id' => 72,
                        'key' => 'browse_chemicals',
                        'table_name' => 'chemicals',
                        'created_at' => '2020-08-30 05:22:29',
                        'updated_at' => '2020-08-30 05:22:29',
                    ),
                67 =>
                    array (
                        'id' => 73,
                        'key' => 'read_chemicals',
                        'table_name' => 'chemicals',
                        'created_at' => '2020-08-30 05:22:29',
                        'updated_at' => '2020-08-30 05:22:29',
                    ),
                68 =>
                    array (
                        'id' => 74,
                        'key' => 'edit_chemicals',
                        'table_name' => 'chemicals',
                        'created_at' => '2020-08-30 05:22:29',
                        'updated_at' => '2020-08-30 05:22:29',
                    ),
                69 =>
                    array (
                        'id' => 75,
                        'key' => 'add_chemicals',
                        'table_name' => 'chemicals',
                        'created_at' => '2020-08-30 05:22:29',
                        'updated_at' => '2020-08-30 05:22:29',
                    ),
                70 =>
                    array (
                        'id' => 76,
                        'key' => 'delete_chemicals',
                        'table_name' => 'chemicals',
                        'created_at' => '2020-08-30 05:22:29',
                        'updated_at' => '2020-08-30 05:22:29',
                    ),
                71 =>
                    array (
                        'id' => 77,
                        'key' => 'browse_propositions',
                        'table_name' => 'propositions',
                        'created_at' => '2020-08-30 05:40:03',
                        'updated_at' => '2020-08-30 05:40:03',
                    ),
                72 =>
                    array (
                        'id' => 78,
                        'key' => 'read_propositions',
                        'table_name' => 'propositions',
                        'created_at' => '2020-08-30 05:40:03',
                        'updated_at' => '2020-08-30 05:40:03',
                    ),
                73 =>
                    array (
                        'id' => 79,
                        'key' => 'edit_propositions',
                        'table_name' => 'propositions',
                        'created_at' => '2020-08-30 05:40:03',
                        'updated_at' => '2020-08-30 05:40:03',
                    ),
                74 =>
                    array (
                        'id' => 80,
                        'key' => 'add_propositions',
                        'table_name' => 'propositions',
                        'created_at' => '2020-08-30 05:40:03',
                        'updated_at' => '2020-08-30 05:40:03',
                    ),
                75 =>
                    array (
                        'id' => 81,
                        'key' => 'delete_propositions',
                        'table_name' => 'propositions',
                        'created_at' => '2020-08-30 05:40:03',
                        'updated_at' => '2020-08-30 05:40:03',
                    ),
                76 =>
                    array (
                        'id' => 87,
                        'key' => 'browse_active_substance',
                        'table_name' => 'active_substance',
                        'created_at' => '2020-08-31 08:08:51',
                        'updated_at' => '2020-08-31 08:08:51',
                    ),
                77 =>
                    array (
                        'id' => 88,
                        'key' => 'read_active_substance',
                        'table_name' => 'active_substance',
                        'created_at' => '2020-08-31 08:08:51',
                        'updated_at' => '2020-08-31 08:08:51',
                    ),
                78 =>
                    array (
                        'id' => 89,
                        'key' => 'edit_active_substance',
                        'table_name' => 'active_substance',
                        'created_at' => '2020-08-31 08:08:51',
                        'updated_at' => '2020-08-31 08:08:51',
                    ),
                79 =>
                    array (
                        'id' => 90,
                        'key' => 'add_active_substance',
                        'table_name' => 'active_substance',
                        'created_at' => '2020-08-31 08:08:51',
                        'updated_at' => '2020-08-31 08:08:51',
                    ),
                80 =>
                    array (
                        'id' => 91,
                        'key' => 'delete_active_substance',
                        'table_name' => 'active_substance',
                        'created_at' => '2020-08-31 08:08:51',
                        'updated_at' => '2020-08-31 08:08:51',
                    ),
                81 =>
                    array (
                        'id' => 92,
                        'key' => 'browse_documents',
                        'table_name' => 'documents',
                        'created_at' => '2020-08-31 09:38:14',
                        'updated_at' => '2020-08-31 09:38:14',
                    ),
                82 =>
                    array (
                        'id' => 93,
                        'key' => 'read_documents',
                        'table_name' => 'documents',
                        'created_at' => '2020-08-31 09:38:14',
                        'updated_at' => '2020-08-31 09:38:14',
                    ),
                83 =>
                    array (
                        'id' => 94,
                        'key' => 'edit_documents',
                        'table_name' => 'documents',
                        'created_at' => '2020-08-31 09:38:14',
                        'updated_at' => '2020-08-31 09:38:14',
                    ),
                84 =>
                    array (
                        'id' => 95,
                        'key' => 'add_documents',
                        'table_name' => 'documents',
                        'created_at' => '2020-08-31 09:38:14',
                        'updated_at' => '2020-08-31 09:38:14',
                    ),
                85 =>
                    array (
                        'id' => 96,
                        'key' => 'delete_documents',
                        'table_name' => 'documents',
                        'created_at' => '2020-08-31 09:38:14',
                        'updated_at' => '2020-08-31 09:38:14',
                    ),
                86 =>
                    array (
                        'id' => 102,
                        'key' => 'browse_chat_room',
                        'table_name' => 'chat_room',
                        'created_at' => '2020-08-31 15:05:14',
                        'updated_at' => '2020-08-31 15:05:14',
                    ),
                87 =>
                    array (
                        'id' => 103,
                        'key' => 'read_chat_room',
                        'table_name' => 'chat_room',
                        'created_at' => '2020-08-31 15:05:14',
                        'updated_at' => '2020-08-31 15:05:14',
                    ),
                88 =>
                    array (
                        'id' => 104,
                        'key' => 'edit_chat_room',
                        'table_name' => 'chat_room',
                        'created_at' => '2020-08-31 15:05:14',
                        'updated_at' => '2020-08-31 15:05:14',
                    ),
                89 =>
                    array (
                        'id' => 105,
                        'key' => 'add_chat_room',
                        'table_name' => 'chat_room',
                        'created_at' => '2020-08-31 15:05:14',
                        'updated_at' => '2020-08-31 15:05:14',
                    ),
                90 =>
                    array (
                        'id' => 106,
                        'key' => 'delete_chat_room',
                        'table_name' => 'chat_room',
                        'created_at' => '2020-08-31 15:05:14',
                        'updated_at' => '2020-08-31 15:05:14',
                    ),
                91 =>
                    array (
                        'id' => 107,
                        'key' => 'browse_orders',
                        'table_name' => 'orders',
                        'created_at' => '2020-08-31 18:23:46',
                        'updated_at' => '2020-08-31 18:23:46',
                    ),
                92 =>
                    array (
                        'id' => 108,
                        'key' => 'read_orders',
                        'table_name' => 'orders',
                        'created_at' => '2020-08-31 18:23:46',
                        'updated_at' => '2020-08-31 18:23:46',
                    ),
                93 =>
                    array (
                        'id' => 109,
                        'key' => 'edit_orders',
                        'table_name' => 'orders',
                        'created_at' => '2020-08-31 18:23:46',
                        'updated_at' => '2020-08-31 18:23:46',
                    ),
                94 =>
                    array (
                        'id' => 110,
                        'key' => 'add_orders',
                        'table_name' => 'orders',
                        'created_at' => '2020-08-31 18:23:46',
                        'updated_at' => '2020-08-31 18:23:46',
                    ),
                95 =>
                    array (
                        'id' => 111,
                        'key' => 'delete_orders',
                        'table_name' => 'orders',
                        'created_at' => '2020-08-31 18:23:46',
                        'updated_at' => '2020-08-31 18:23:46',
                    ),
                96 =>
                    array (
                        'id' => 112,
                        'key' => 'browse_brands',
                        'table_name' => 'brands',
                        'created_at' => '2020-09-28 19:36:23',
                        'updated_at' => '2020-09-28 19:36:23',
                    ),
                97 =>
                    array (
                        'id' => 113,
                        'key' => 'read_brands',
                        'table_name' => 'brands',
                        'created_at' => '2020-09-28 19:36:23',
                        'updated_at' => '2020-09-28 19:36:23',
                    ),
                98 =>
                    array (
                        'id' => 114,
                        'key' => 'edit_brands',
                        'table_name' => 'brands',
                        'created_at' => '2020-09-28 19:36:23',
                        'updated_at' => '2020-09-28 19:36:23',
                    ),
                99 =>
                    array (
                        'id' => 115,
                        'key' => 'add_brands',
                        'table_name' => 'brands',
                        'created_at' => '2020-09-28 19:36:23',
                        'updated_at' => '2020-09-28 19:36:23',
                    ),
                100 =>
                    array (
                        'id' => 116,
                        'key' => 'delete_brands',
                        'table_name' => 'brands',
                        'created_at' => '2020-09-28 19:36:23',
                        'updated_at' => '2020-09-28 19:36:23',
                    ),
                101 =>
                    array (
                        'id' => 117,
                        'key' => 'browse_license',
                        'table_name' => 'license',
                        'created_at' => '2020-09-30 13:59:04',
                        'updated_at' => '2020-09-30 13:59:04',
                    ),
                102 =>
                    array (
                        'id' => 118,
                        'key' => 'read_license',
                        'table_name' => 'license',
                        'created_at' => '2020-09-30 13:59:04',
                        'updated_at' => '2020-09-30 13:59:04',
                    ),
                103 =>
                    array (
                        'id' => 119,
                        'key' => 'edit_license',
                        'table_name' => 'license',
                        'created_at' => '2020-09-30 13:59:04',
                        'updated_at' => '2020-09-30 13:59:04',
                    ),
                104 =>
                    array (
                        'id' => 120,
                        'key' => 'add_license',
                        'table_name' => 'license',
                        'created_at' => '2020-09-30 13:59:04',
                        'updated_at' => '2020-09-30 13:59:04',
                    ),
                105 =>
                    array (
                        'id' => 121,
                        'key' => 'delete_license',
                        'table_name' => 'license',
                        'created_at' => '2020-09-30 13:59:04',
                        'updated_at' => '2020-09-30 13:59:04',
                    ),
                106 =>
                    array (
                        'id' => 122,
                        'key' => 'browse_norms',
                        'table_name' => 'norms',
                        'created_at' => '2020-09-30 19:23:36',
                        'updated_at' => '2020-09-30 19:23:36',
                    ),
                107 =>
                    array (
                        'id' => 123,
                        'key' => 'read_norms',
                        'table_name' => 'norms',
                        'created_at' => '2020-09-30 19:23:36',
                        'updated_at' => '2020-09-30 19:23:36',
                    ),
                108 =>
                    array (
                        'id' => 124,
                        'key' => 'edit_norms',
                        'table_name' => 'norms',
                        'created_at' => '2020-09-30 19:23:36',
                        'updated_at' => '2020-09-30 19:23:36',
                    ),
                109 =>
                    array (
                        'id' => 125,
                        'key' => 'add_norms',
                        'table_name' => 'norms',
                        'created_at' => '2020-09-30 19:23:36',
                        'updated_at' => '2020-09-30 19:23:36',
                    ),
                110 =>
                    array (
                        'id' => 126,
                        'key' => 'delete_norms',
                        'table_name' => 'norms',
                        'created_at' => '2020-09-30 19:23:36',
                        'updated_at' => '2020-09-30 19:23:36',
                    ),
                111 =>
                    array (
                        'id' => 132,
                        'key' => 'browse_faqs',
                        'table_name' => 'faqs',
                        'created_at' => '2020-10-02 07:33:08',
                        'updated_at' => '2020-10-02 07:33:08',
                    ),
                112 =>
                    array (
                        'id' => 133,
                        'key' => 'read_faqs',
                        'table_name' => 'faqs',
                        'created_at' => '2020-10-02 07:33:08',
                        'updated_at' => '2020-10-02 07:33:08',
                    ),
                113 =>
                    array (
                        'id' => 134,
                        'key' => 'edit_faqs',
                        'table_name' => 'faqs',
                        'created_at' => '2020-10-02 07:33:08',
                        'updated_at' => '2020-10-02 07:33:08',
                    ),
                114 =>
                    array (
                        'id' => 135,
                        'key' => 'add_faqs',
                        'table_name' => 'faqs',
                        'created_at' => '2020-10-02 07:33:08',
                        'updated_at' => '2020-10-02 07:33:08',
                    ),
                115 =>
                    array (
                        'id' => 136,
                        'key' => 'delete_faqs',
                        'table_name' => 'faqs',
                        'created_at' => '2020-10-02 07:33:08',
                        'updated_at' => '2020-10-02 07:33:08',
                    ),
                116 =>
                    array (
                        'id' => 137,
                        'key' => 'browse_fruits',
                        'table_name' => 'fruits',
                        'created_at' => '2020-10-03 14:17:46',
                        'updated_at' => '2020-10-03 14:17:46',
                    ),
                117 =>
                    array (
                        'id' => 138,
                        'key' => 'read_fruits',
                        'table_name' => 'fruits',
                        'created_at' => '2020-10-03 14:17:46',
                        'updated_at' => '2020-10-03 14:17:46',
                    ),
                118 =>
                    array (
                        'id' => 139,
                        'key' => 'edit_fruits',
                        'table_name' => 'fruits',
                        'created_at' => '2020-10-03 14:17:46',
                        'updated_at' => '2020-10-03 14:17:46',
                    ),
                119 =>
                    array (
                        'id' => 140,
                        'key' => 'add_fruits',
                        'table_name' => 'fruits',
                        'created_at' => '2020-10-03 14:17:46',
                        'updated_at' => '2020-10-03 14:17:46',
                    ),
                120 =>
                    array (
                        'id' => 141,
                        'key' => 'delete_fruits',
                        'table_name' => 'fruits',
                        'created_at' => '2020-10-03 14:17:46',
                        'updated_at' => '2020-10-03 14:17:46',
                    ),
            ));
        } catch(Exception $e) {
            throw new Exception('Exception occur ' . $e);

            \DB::rollBack();
        }

        \DB::commit();
    }
}
