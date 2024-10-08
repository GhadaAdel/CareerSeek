<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User; 

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('employers', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('name');
    //         $table->timestamps();
    //     });
    // }

    public function up(): void
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(User::class);
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
