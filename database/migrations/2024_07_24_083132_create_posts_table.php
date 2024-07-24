<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('body');
            $table->integer('likes', false, true);
            $table->foreignIdFor(User::class, 'author')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table){
            $table->id();
            $table->string('body', 512);
            $table->foreignIdFor(USer::class, 'user_id')->onDelete('cascade');
            $table->foreignIdFor(Post::class, 'post_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
