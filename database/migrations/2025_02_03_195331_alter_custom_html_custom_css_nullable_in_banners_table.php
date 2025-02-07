<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->text('custom_html')->nullable()->change();
            $table->text('custom_css')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->text('custom_html')->nullable(false)->change();
            $table->text('custom_css')->nullable(false)->change();
        });
    }
};
