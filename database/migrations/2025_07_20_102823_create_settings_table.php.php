<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_setting', 100);
            $table->text('nilai');
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
