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
        Schema::create('spec_templates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->comment('分类表id')->index();
            $table->string('name', 200)->comment('规格名称');
            $table->string('value', 600)->comment('规格值');
            $table->string('value_type', 20)->comment('值的类型string:字符串;json:json数组;year:年份;date:日期;date_time:日期时间;time:时间')->default('string');
            $table->unsignedTinyInteger('updatable')->comment('是否可以修改0:不可以,1:可以;')->default(0);
            $table->unsignedTinyInteger('selectable')->comment('是否可以多选0:不可以,1:可以;')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spec_templates');
    }
};
