<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            $table->string('texto');
            $table->boolean('correta')->default(false);
            $table->foreignId('pergunta_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
};
