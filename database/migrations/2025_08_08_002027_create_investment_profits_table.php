<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Créer une table pour l'historique des profits
     */
    public function up(): void
    {
        Schema::create('investment_profits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('investment_id')->constrained('investments')->onDelete('cascade');
            $table->date('profit_date'); // Date du profit
            $table->decimal('daily_profit', 12, 2); // Profit du jour
            $table->decimal('base_amount', 12, 2); // Montant de base utilisé pour le calcul
            $table->decimal('profit_rate', 8, 6); // Taux utilisé (0.528571% par exemple)
            $table->decimal('cumulative_profit', 12, 2); // Profit cumulé à cette date
            $table->json('metadata')->nullable(); // Informations additionnelles
            $table->timestamps();
            
            // Index pour optimiser les requêtes
            $table->unique(['investment_id', 'profit_date']);
            $table->index('profit_date');
        });

        // Ajouter quelques colonnes utiles à la table investments existante
        Schema::table('investments', function (Blueprint $table) {
            $table->decimal('expected_total_profit', 12, 2)->default(0)->after('total_profit');
            $table->integer('days_active')->default(0)->after('last_profit_date');
            $table->decimal('average_daily_profit', 12, 2)->default(0)->after('days_active');
            $table->json('investment_metadata')->nullable()->after('source'); // Pour stocker des infos additionnelles
        });
    }

    /**
     * Supprimer les tables et colonnes
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_profits');
        
        Schema::table('investments', function (Blueprint $table) {
            $table->dropColumn([
                'expected_total_profit',
                'days_active', 
                'average_daily_profit',
                'investment_metadata'
            ]);
        });
    }
};