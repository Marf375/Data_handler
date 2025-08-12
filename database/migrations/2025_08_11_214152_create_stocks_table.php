<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->date('last_change_date')->nullable();
            $table->string('supplier_article',50)->nullable();
            $table->string('tech_size',50)->nullable();
            $table->bigInteger('barcode')->nullable();
            $table->Integer('quantity')->nullable();
            $table->boolean('is_supply')->nullable();
            $table->boolean('is_realization')->nullable();
            $table->Integer('quantity_full')->nullable();
            $table->string('warehouse_name',50)->nullable();
            $table->Integer('in_way_to_client')->nullable();
            $table->Integer('in_way_from_client')->nullable();
            $table->bigInteger('nm_id')->nullable();
            $table->string('subject',50)->nullable();
            $table->string('category',50)->nullable();
            $table->string('brand',50)->nullable();
            $table->bigInteger('sc_code')->nullable();
            $table->decimal('price', 10, 0)->nullable();
            $table->string('discount',50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
