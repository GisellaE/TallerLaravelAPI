<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id(); 
            $table->string('phone_brand', 100); 
            $table->string('phone_model', 100); 
            $table->decimal('phone_price', 10, 2)->default(0.00); 
            $table->integer('phone_display_size')->nullable(); 
            $table->boolean('phone_is_smartphone')->default(true); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};




