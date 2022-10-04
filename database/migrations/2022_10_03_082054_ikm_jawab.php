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
        Schema::create('ikm_jawab', function (Blueprint $t) {
            $t->uuid('ikm_jawab_id')->primary();
            $t->uuid('opd_id');
            $t->longText('isi')->nullable();
            $t->timestamps();
        });
        DB::statement('ALTER TABLE ikm_jawab ALTER COLUMN ikm_jawab_id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ikm_jawab');
    }
};
