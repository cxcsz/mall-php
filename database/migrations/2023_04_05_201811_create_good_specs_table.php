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
        Schema::create('good_specs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('good_id')->comment('商品id')->index();
            $table->unsignedBigInteger('template_id')->comment('参数模板id')->default(0)->index();
            $table->string('name', 200)->comment('规格名称');
            $table->string('value', 600)->comment('规格值');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('good_specs');
    }
};
