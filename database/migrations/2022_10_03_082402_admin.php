<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
        Schema::create('admin', function (Blueprint $t) {
            $t->uuid('admin_id')->primary();
            $t->uuid('opd_id')->nullable();
            $t->text('nama')->nullable();
            $t->text('mail')->nullable();
            $t->text('pwd')->nullable();
            $t->text('nohp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ikm');
    }
};
