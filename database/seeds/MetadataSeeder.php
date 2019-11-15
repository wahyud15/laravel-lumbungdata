<?php

use Illuminate\Database\Seeder;

class MetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		 Eloquent::unguard();
        $this->command->info('Import Tabel Metadata');

        $path = 'database/seeds/metadata.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Tabel Metadata sudah di import');
    }
}
