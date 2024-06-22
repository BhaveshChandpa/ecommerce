<?php

use App\Models\Category;
use App\Models\Tax;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignIdFor(Category::class);
            $table->unsignedBigInteger('subcategory_id')->constrained('categories');
            $table->double('price');
            $table->double('basic_price');
            $table->string('image');
            $table->foreignIdFor(Tax::class);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
