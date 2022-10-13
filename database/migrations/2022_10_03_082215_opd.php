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
        Schema::create('opd', function (Blueprint $t) {
            $t->uuid('opd_id')->primary();
            $t->text('nama_opd')->nullable();
            $t->text('nama_singkat')->nullable();
            $t->text('alamat')->nullable();
            $t->text('nama_kepala')->nullable();
            $t->text('logo')->nullable();
            $t->timestamps();
        });
        DB::statement('ALTER TABLE opd ALTER COLUMN opd_id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opd');
    }
};
