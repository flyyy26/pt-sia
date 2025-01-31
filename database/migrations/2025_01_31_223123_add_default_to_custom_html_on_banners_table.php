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
            $table->string('custom_html')->default('Default Code')->change();
        });
    }

    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('custom_html')->nullable()->change(); // atau menghapus default jika perlu
        });
    }
};
