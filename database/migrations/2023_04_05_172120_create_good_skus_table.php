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
        Schema::create('good_skus', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('good_id')->comment('商品表id')->default(0)->index();
            $table->string('title', 1000)->comment('标题')->default('');
            $table->json('params')->comment('sku 信息');
            $table->json('album_pics')->comment('相册图片');
            $table->unsignedInteger('stock')->comment('sku 库存数')->default(0);
            $table->unsignedInteger('low_stock')->comment('sku 预警库存数,0 表示不预警')->default(0);
            $table->softDeletes()->comment('删除时间');
            $table->timestamps();
            $table->index(['deleted_at', 'stock', 'low_stock']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods_sku');
    }
};
