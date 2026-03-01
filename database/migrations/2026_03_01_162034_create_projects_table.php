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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categoris')->onDelete('restrict')->onUpdate('cascade');
            $table->string('title', 255)->required();
            $table->mediumText('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('image_path', 255)->nullable();
            $table->boolean('status')->default(true);
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->float('budget')->nullable();
            $table->enum('project_status', ['planned', 'in_progress', 'completed'])->default('planned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
