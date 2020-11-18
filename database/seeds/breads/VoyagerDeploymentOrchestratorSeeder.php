<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/breads/seeds/';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Data_typesTableSeeder::class);
        $this->call(Data_rowsTableSeeder::class);
        $this->call(Menu_itemsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
//       $this->call(RolesTableSeeder::class);
        $this->call(Permission_roleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
