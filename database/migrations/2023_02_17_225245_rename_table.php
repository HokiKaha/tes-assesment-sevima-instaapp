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
        Schema::rename('postingan', 'postingans');
        Schema::rename('postingan_gambar', 'postingan_gambars');
        Schema::rename('postingan_komentar', 'postingan_komentars');
        Schema::rename('postingan_like', 'postingan_likes');
        Schema::rename('follower', 'followers');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
