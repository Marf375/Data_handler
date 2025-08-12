<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('income_id', )->nullable();
            $table->string('number',50 )->nullable();
            $table->date('date', )->nullable();
            $table->date('last_change_date', )->nullable();
            $table->string('supplier_article',50 )->nullable();
            $table->string('tech_size',50 )->nullable();
            $table->bigInteger('barcode' )->nullable();
            $table->integer('quantity' )->nullable();
            $table->decimal('total_price',65,0 )->nullable();
            $table->date('date_close')->nullable();
            $table->string('warehouse_name',50 )->nullable();
            $table->string('nm_id',50 )->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
