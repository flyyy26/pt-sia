<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('image')->default('coding.jpg')->change();  // Atur default image jika kosong
        });
    }

    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('image')->nullable()->change();  // Kembalikan ke nullable jika perlu
        });
    }
};
