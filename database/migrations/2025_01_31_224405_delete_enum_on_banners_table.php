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
        Schema::table('banners', function (Blueprint $table) {
            // Rename kolom lama agar tidak hilang datanya
            if (Schema::hasColumn('banners', 'creation_method')) {
                $table->renameColumn('creation_method', 'old_creation_method');
            }
        });

        Schema::table('banners', function (Blueprint $table) {
            // Tambahkan kolom baru dengan enum yang diperbaiki
            $table->enum('creation_method', ['form', 'coding'])->default('form')->after('old_creation_method');
        });

        // Pindahkan data dari kolom lama ke kolom baru
        \DB::statement("UPDATE banners SET creation_method = 'coding' WHERE old_creation_method = 'text'");
        \DB::statement("UPDATE banners SET creation_method = 'form' WHERE old_creation_method = 'form'");

        Schema::table('banners', function (Blueprint $table) {
            // Hapus kolom lama setelah data dipindahkan
            $table->dropColumn('old_creation_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            // Rename kolom saat rollback agar tidak kehilangan data
            $table->renameColumn('creation_method', 'old_creation_method');
        });

        Schema::table('banners', function (Blueprint $table) {
            // Buat ulang kolom enum lama dengan 'text'
            $table->enum('creation_method', ['form', 'text'])->default('form')->after('old_creation_method');
        });

        // Kembalikan nilai yang diubah
        \DB::statement("UPDATE banners SET creation_method = 'text' WHERE old_creation_method = 'coding'");
        \DB::statement("UPDATE banners SET creation_method = 'form' WHERE old_creation_method = 'form'");

        Schema::table('banners', function (Blueprint $table) {
            // Hapus kolom sementara
            $table->dropColumn('old_creation_method');
        });
    }
};
