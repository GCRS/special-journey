<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Organization;

class SeedOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Organization::create([
            'organization_name' => 'Organization One',
            'slug'  => 'organization'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Organization::where('organization_name', 'Organization One')->delete();
    }
}
