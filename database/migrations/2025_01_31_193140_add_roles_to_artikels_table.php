<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('artikels', function (Blueprint $table) {
            $table->string('role')->default('editor')->after('id'); // Tambahkan kolom role
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('artikels', function (Blueprint $table) {
            $table->dropColumn('role'); // Hapus kolom role saat rollback
        });
    }
};
