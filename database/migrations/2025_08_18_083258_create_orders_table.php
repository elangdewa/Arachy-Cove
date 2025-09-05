<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Tahap 1: tambah kolom (nullable dulu biar aman ke data lama)
        Schema::table('orders', function (Blueprint $table) {
            $table->char('order_code', 36)->nullable()->after('id');                 // public ID (UUID)
            $table->char('guest_access_key', 32)->nullable()->after('order_code');   // token magic link
            $table->string('tracking_carrier', 40)->nullable()->after('payment_method');
            $table->string('tracking_number', 64)->nullable()->after('tracking_carrier');
            $table->timestamp('shipped_at')->nullable()->after('updated_at');
            $table->timestamp('delivered_at')->nullable()->after('shipped_at');
        });

        // Tahap 2: backfill nilai untuk baris lama (MySQL/MariaDB)
        DB::statement("UPDATE orders SET order_code = UUID() WHERE order_code IS NULL");
        DB::statement("UPDATE orders SET guest_access_key = REPLACE(UUID(),'-','') WHERE guest_access_key IS NULL");

        // Tahap 3: kunci & index
        // (ubah order_code jadi NOT NULL – gunakan raw agar tidak perlu doctrine/dbal)
        DB::statement("ALTER TABLE orders MODIFY order_code CHAR(36) NOT NULL");

        Schema::table('orders', function (Blueprint $table) {
            $table->unique('order_code', 'idx_orders_order_code');
            $table->index(['guest_email', 'order_code'], 'idx_orders_guest_lookup');
            $table->index('tracking_number', 'idx_orders_tracking');
        });
    }

    public function down(): void
    {
        // Hapus index dulu
        Schema::table('orders', function (Blueprint $table) {
            $table->dropUnique('idx_orders_order_code');
            $table->dropIndex('idx_orders_guest_lookup');
            $table->dropIndex('idx_orders_tracking');
        });

        // Kembalikan kolom
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'delivered_at',
                'shipped_at',
                'tracking_number',
                'tracking_carrier',
                'guest_access_key',
                'order_code',
            ]);
        });
    }
};
