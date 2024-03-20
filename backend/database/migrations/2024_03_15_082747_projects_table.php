<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('image')->nullable();
            $table->string('repo_link');
            $table->string('demo_link');
            $table->timestamps();
        
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
