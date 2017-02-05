<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersExtension extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes()->after('updated_at');
            $table->string('company_name')->nullable()->before('created_at');
            $table->char('country', 2)->nullable()->after('company_name');
            $table->string('language')->default('en')->after('country');
            $table->string('time_zone')->nullable()->after('language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropColumn([
                'company_name',
                'country',
                'language',
                'time_zone'
            ]);
        });
    }
}
