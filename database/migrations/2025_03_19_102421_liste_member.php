<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('membres', function (Blueprint $row) {
           $row->id();
           $row->string('nom');
           $row->string('prenom');
           $row->string('email');
           $row->string('ville');
           $row->string('pays');
           $row->date('date');
           $row->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
