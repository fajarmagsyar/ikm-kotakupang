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
            $t->text('password')->nullable();
            $t->text('nohp')->nullable();
            $t->timestamps();
        });
        DB::statement('ALTER TABLE admin ALTER COLUMN admin_id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
