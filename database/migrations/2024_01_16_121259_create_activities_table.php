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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("audience_id");
            $table->string("phone_number")->nullable();
            $table->string("whatsapp_number")->nullable();
            $table->string("facebook_handler")->nullable();
            $table->string("twitter_handler")->nullable();
            $table->string("activity");
            $table->json("data");
            $table->foreignId("event_id")->constrained()->onDelete("cascade");
            $table->foreignId("campaign_id")->constrained()->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
