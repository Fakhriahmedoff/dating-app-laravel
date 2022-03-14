<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->enum('gender',['woman','man','prefer not to say'])->nullable();
            $table->string('profession')->nullable();
            $table->string('location')->nullable();
            $table->text('about')->nullable();
            $table->string('cover')->nullable();
            $table->string('lng')->nullable();
            $table->string('ltd')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
