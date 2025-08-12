<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('g_number', 50)->nullable();
            $table->date('date')->nullable();
            $table->date('last_change_date')->nullable();
            $table->string('supplier_article',50)->nullable();
            $table->string('tech_size',50)->nullable();
            $table->bigInteger('barcode')->nullable();
            $table->decimal('total_price', 65, 10)->nullable();
            $table->string('discount_percent',50)->nullable();
            $table->boolean('is_supply')->nullable();
            $table->boolean('is_realization')->nullable();
            $table->string('promo_code_discount',50)->nullable();
            $table->string('warehouse_name',50)->nullable();
            $table->string('country_name',50)->nullable();
            $table->string('oblast_okrug_name',50)->nullable();
            $table->string('region_name',50)->nullable();
            $table->bigInteger('income_id',)->nullable();
            $table->string('sale_id',50)->nullable();
            $table->string('odid',50)->nullable();
            $table->string('spp',50)->nullable();
            $table->decimal('for_pay', 65, 10)->nullable();
            $table->decimal('finished_price', 65, 10)->nullable();
            $table->decimal('price_with_disc', 65, 10)->nullable();
            $table->bigInteger('nm_id',)->nullable();
            $table->string('subject',50)->nullable();
            $table->string('category',50)->nullable();
            $table->string('brand',50)->nullable();
            $table->string('is_storno',50)->nullable();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
