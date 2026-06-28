<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {

            $table->id();
            $table->foreignId('student_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('class_room_id')
                ->constrained('classes')
                ->cascadeOnDelete();
            $table->foreignId('section_id')
                ->constrained('sections')
                ->cascadeOnDelete();
            $table->date('attendance_date');
            $table->enum('status', [
                'P',
                'A',
                'L'
            ]);

            $table->string('remarks')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
