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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->uniqid()->nullable();
            $table->string('email')->uniqid()->nullable();

            $table->bigInteger('ID_number')->uniqid()->nullable();

            $table->date('birth_date');


            $table->string('certificate')->nullable();
            $table->string('specialization')->nullable();
            //باحث عن عمل موظف قطاع خاص

            $table->enum('type', ['student', 'private_sector', 'government_sector'])->nullable();
            $table->enum('membership_type', ['affiliate', 'innovative'])->nullable();

            $table->string('workplace')->nullable();

            $table->string('payment_receipt')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->boolean('isReply')->default(0);




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
