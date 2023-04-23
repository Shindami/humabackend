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
        Schema::create('form_data_contact', function (Blueprint $table) {
            $table->id();
            $table->string('fn');
            $table->string('ln');
            $table->string('pa');
            $table->string('province');
            $table->string('cor');
            $table->string('relationship');
            $table->string('iempn');
            $table->string('ieea');
            $table->string('min');
            $table->string('address1');
            $table->string('postal1');
            $table->string('province1');
            $table->string('cor1');
            $table->string('iempn1');
            $table->string('ieea1');
            $table->string('pn');
            $table->string('address2');
            $table->string('postal2');
            $table->string('province2');
            $table->string('cor2');
            $table->string('iempn2');
            $table->string('ieea2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data_contact');
    }
};
