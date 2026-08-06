<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->id();
            $table->string('voter_code', 30)->unique();
            $table->string('name',100);
            $table->enum('role', ['student','teacher', 'admin']);
            $table->string('class',30)->nullable();
            $table->string('position',100)->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
            $table->index('role');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('voters');
    }
};
