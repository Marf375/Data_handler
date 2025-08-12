<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('g_number', 50)->nullable();
            $table->dateTime('date')->nullable();
            $table->date('last_change_date')->nullable();
            $table->string('supplier_article',50)->nullable();
            $table->string('tech_size',50)->nullable();
            $table->bigInteger('barcode',)->nullable();
            $table->decimal('total_price', 65, 13)->nullable();
            $table->integer('discount_percent')->nullable();
            $table->string('warehouse_name',50)->nullable();
            $table->string('oblast')->nullable();
            $table->bigInteger('income_id',)->nullable();
            $table->string('odid',50)->nullable();
            $table->Integer('nm_id')->nullable();
            $table->string('subject',50)->nullable();
            $table->string('category',50)->nullable();
            $table->string('brand',50)->nullable();
            $table->boolean('is_cancel')->nullable();
            $table->date('cancel_dt')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
