<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('eggs'); // Force drop if exists

        Schema::create('eggs', function (Blueprint $table) {
            $table->id();
            $table->string('egg_type');
            $table->string('farm_name');
            $table->decimal('price_per_dozen', 8, 2);
            $table->integer('stock_quantity');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eggs');
    }
};