<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('withdrawal_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2); // Montant demandé
            $table->decimal('fee', 10, 2); // Frais de 5%
            $table->decimal('net_amount', 10, 2); // Montant net après frais
            $table->enum('status', ['pending', 'approved', 'rejected', 'completed'])->default('pending');
            $table->string('withdrawal_type'); // Type de retrait (BTC, USDT, etc.)
            $table->string('withdrawal_address'); // Adresse de retrait
            $table->text('admin_notes')->nullable(); // Notes de l'admin
            $table->timestamp('processed_at')->nullable(); // Date de traitement
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('withdrawal_requests');
    }
};