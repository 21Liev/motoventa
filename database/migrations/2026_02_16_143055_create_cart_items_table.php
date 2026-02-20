<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // para soportar motos y equipo en el mismo carrito:
            $table->string('item_type'); // 'moto' o 'equipo'
            $table->unsignedBigInteger('item_id');

            $table->integer('qty')->default(1); // podés dejarlo, aunque no uses cantidades
            $table->timestamps();

            $table->unique(['user_id', 'item_type', 'item_id']); // evita duplicados
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_items');
    }
};
