<?php

use App\Enums\InvestmentStatus;
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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('account_id')->constrained('accounts')->onDelete('cascade');
            $table->unsignedBigInteger('amount')->nullable()->default(0);
            $table->unsignedBigInteger('equity')->nullable()->default(0);
            $table->string('currency')->default('USD');
            $table->string('status')->default(InvestmentStatus::Active());
            $table->timestamp('start_date');
            $table->timestamp('maturity_date');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('interest_earned')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
