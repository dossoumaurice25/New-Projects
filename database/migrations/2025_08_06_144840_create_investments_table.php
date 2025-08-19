<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->decimal('amount', 12, 2); // Montant investi
            $table->decimal('weekly_profit', 12, 2)->default(0); // Profit hebdo
            $table->decimal('total_profit', 12, 2)->default(0); // Total gagné
            $table->decimal('daily_profit', 12, 2)->default(0); // Profit aujourd'hui
            $table->decimal('previous_day_profit', 12, 2)->default(0); // Hier
            $table->date('last_profit_date')->nullable(); // Pour les calculs journaliers

            $table->enum('status', ['pending', 'active', 'closed'])->default('pending');
            $table->enum('source', ['wallet', 'crypto'])->default('wallet');

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('investments');
    }
};
