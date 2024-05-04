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
        Schema::create('video_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->onDelete('cascade');
            $table->string('motion_trigger');
            $table->string('mirror_overlay');
            $table->string('front_or_rear_camera');
            $table->string('camera_exposure_menu_item');
            $table->string('qr_app_protection');
            $table->string('boomerang');
            $table->string('animated_gif');
            $table->string('videos');
            $table->string('slomo');
            $table->string('boomerang_repeats');
            $table->string('boomerang_speed');
            $table->string('boomerang_bounce');
            $table->string('duration');
            $table->string('gif_number_of_photos');
            $table->string('gif_frame_duration');
            $table->string('video_maximum_duration');
            $table->string('slomo_recording_time');
            $table->string('slomo_boomerang');
            $table->string('speed');
            $table->string('add_audio_file');
            $table->string('screen_flash');
            $table->string('time_outs');
            $table->string('editing');
            $table->string('sharing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_settings');
    }
};
