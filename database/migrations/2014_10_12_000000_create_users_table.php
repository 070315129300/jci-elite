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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('pemail')->unique();
            $table->string('dob');
            $table->string('jemail')->unique();
            $table->string('phone');
            $table->string('gender');
            $table->string('maritalstatus');
            $table->string('nextofkin');
            $table->string('occupation');
            $table->string('address');
            $table->string('religion');
            $table->string('nationality');
            $table->string('stateoforigin');
            $table->string('socialmediahandle');
            $table->string('workstatus');
            $table->string('dateinducted');
            $table->string('noblehousestatus');
            $table->string('currentposition');
            $table->string('image');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
