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
        Schema::create('audiences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("first_name");
            $table->string("last_name");
            $table->foreignId("campaign_id")->constrained()->onDelete("cascade");
            $table->string("email")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("whatsapp_number")->nullable();
            $table->string("facebook_handler")->nullable();
            $table->string("twitter_handler")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audiences');
    }
};
