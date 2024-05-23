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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->bigInteger('ID_number')->uniqid()->nullable();

            $table->date('birth_date')->nullable();


            $table->string('certificate')->nullable();
            $table->string('specialization')->nullable();

            $table->enum('type', ['student', 'private_sector', 'government_sector'])->nullable();
            $table->enum('membership_type', ['affiliate', 'innovative'])->nullable();            $table->enum('type',['empowerment_program','Social_innovation_program'])->nullable();
            $table->enum('social_security_beneficiary',['yes','no'])->default('no');
            //$table->string('program_type')->nullable();

          //  $table->string('workplace')->nullable();

            $table->enum('status',['pending','approved','rejected'])->default('pending');
            $table->boolean('isReply')->default(0);
            $table->enum('type_program',['empowerment_program','Social_innovation_program'])->nullable();
            $table->boolean('remember_me')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
