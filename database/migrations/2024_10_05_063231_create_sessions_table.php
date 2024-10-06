<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // id as varchar(255)
            $table->unsignedBigInteger('user_id')->nullable(); // user_id as bigint unsigned
            $table->string('ip_address', 45)->nullable(); // ip_address as varchar(45)
            $table->text('user_agent')->nullable(); // user_agent as text
            $table->longText('payload'); // payload as longtext
            $table->integer('last_activity'); // last_activity as int
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->index('user_id'); // Adding index for user_id
            $table->index('last_activity'); // Adding index for last_activity
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions'); // Jadvalni o'chirish
    }
};
