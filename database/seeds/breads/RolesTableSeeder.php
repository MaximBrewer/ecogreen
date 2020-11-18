<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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

        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'name' => 'admin',
                    'display_name' => 'Администратор',
                    'created_at' => '2020-09-02 15:26:17',
                    'updated_at' => '2020-09-02 15:26:17',
                ),
                1 => 
                array (
                    'id' => 2,
                    'name' => 'user',
                    'display_name' => 'Обычный Пользователь',
                    'created_at' => '2020-09-02 15:26:17',
                    'updated_at' => '2020-09-02 15:26:17',
                ),
                2 => 
                array (
                    'id' => 3,
                    'name' => 'admin web',
                    'display_name' => 'Admin web',
                    'created_at' => '2020-09-02 18:10:35',
                    'updated_at' => '2020-09-02 18:10:35',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}
