<?php

// database/migrations/xxxx_xx_xx_create_deposits_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('amount_usd', 10, 2);
            $table->decimal('crypto_amount', 18, 8);
            $table->string('method'); // btc, eth, usdt_bep20, usdt_trc20
            $table->enum('status', ['pending', 'approved'])->default('pending');
            $table->string('txn_hash')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('deposits');
    }
};
