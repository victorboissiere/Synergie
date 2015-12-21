<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Setting;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data');
        });
        Setting::create([
          'data' => [
            //General settings
            'website_title' => 'Synergie',
            'admin_title' => 'Synergie',
            'admin_email' => 'contact@website.com',
            //SEO
            'website_description' => 'description',
            //Code injection
            'code_footer' => '',
            'code_header' => ''
          ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
