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
        Schema::create('category_specs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->comment('分类表id')->index();
            $table->string('name', 200)->comment('规格名称');
            $table->unsignedTinyInteger('required')->comment('规格是否必填0:可以省略;1:必填');
            $table->unsignedTinyInteger('search_type')->comment('搜索类型0:不进行检索;1:文字检索;2:范围检索;3:列表检索')->default(1);
            $table->json('value_list')->comment('值的列表，当 search_type 为3时必填');
            $table->unsignedTinyInteger('has_template')->comment('是否有产品模板0:没有;1:有');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_specs');
    }
};
