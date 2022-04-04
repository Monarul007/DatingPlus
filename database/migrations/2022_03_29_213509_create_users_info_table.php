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
        Schema::create('users_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('username')->unique();
            $table->date('birthday')->nullable();
            $table->enum('sex', ['male', 'female', 'others'])->nullable();
            $table->enum('matchSex', ['male', 'female', 'others'])->nullable();
            $table->set('bodyType', ['average', 'athletic', 'slim', 'curvy', 'fat'])->nullable();
            $table->string('height')->nullable();
            $table->enum('religion', ['christian', 'muslim', 'others'])->nullable();
            $table->set('lookingFor', ['dating', 'relationship', 'casual', 'flirt', 'chat', 'friendship', 'others'])->nullable();
            $table->enum('lifeStyles', ['smoker', 'non-smoker', 'trying-to-quit', 'social-smoker'])->nullable();
            $table->enum('drinking', ['non-drinker', 'social-drinker', 'drinks-frequently', 'trying-to-quit'])->nullable();
            $table->enum('workout', ['gym-rat', 'active', 'moderately-active'])->nullable();
            $table->set('interests', ['music', 'cooking', 'shopping', 'gym-fitness', 'travelling', 'swimming', 'party', 'singing', 'dance', 'games', 'social-networking', 'video', 'pets', 'photography', 'highking', 'reading', 'sports'])->nullable();
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
        Schema::dropIfExists('users_info');
    }
};
