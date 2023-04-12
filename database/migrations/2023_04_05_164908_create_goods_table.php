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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->comment('分类id')->default(0);
            $table->unsignedBigInteger('brand_id')->comment('品牌id')->default(0);
            $table->tinyInteger('saleable')->comment('是否在售0:未上架;1:已上架;')->default(0);
            $table->tinyInteger('recommendable')->comment('是否推荐0:不推荐;1:推荐;')->default(0);
            $table->unsignedInteger('sale_count')->comment('销售数量')->default(0);
            $table->decimal('min_price', 10)->comment('商品最低价')->default(0);
            $table->decimal('max_price', 10)->comment('商品最高价')->default(0);
            $table->string('picture')->comment('推荐等单个展示图')->default('');
            $table->json('album_pics')->comment('相册图片，当前商品所有的sku通用，如果sku中有单独的相册将覆盖这个部分');
            $table->json('detail')->comment('详情描述，目前值能使用图片');
            $table->string('unit', 30)->comment('单位')->default('个');
            $table->softDeletes()->comment('删除时间');
            $table->timestamps();

            $table->index(['deleted_at', 'saleable', 'recommendable', 'sale_count']);
            $table->index(['category_id', 'brand_id', 'deleted_at', 'saleable']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods');
    }
};
