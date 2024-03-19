<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects_technologies', function (Blueprint $table) {
            $table->foreignId('id_project')->constrained('projects')->onDelete('cascade');
            $table->foreignId('id_technology')->constrained('technologies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects_technologies');
    }
};
