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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200)->comment('分类名称')->default('');
            $table->unsignedTinyInteger('level')->comment('分类的级别')->default(0);
            $table->unsignedBigInteger('parent_id')->comment('父分类的id,根级别为0')->default(0);
            $table->integer('sort')->comment('分类的排序')->default(0);
            $table->softDeletes()->comment('删除时间');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
