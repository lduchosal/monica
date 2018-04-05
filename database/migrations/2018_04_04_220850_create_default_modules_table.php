<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_contact_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('translation_key');
            $table->boolean('delible')->default(0);
            $table->boolean('active')->default(1);
            $table->boolean('migrated')->default(0);
            $table->timestamps();
        });

        DB::table('default_contact_modules')->insert([
        [
            'key' => 'love_relationships',
            'translation_key' => 'relationship_type_group_love',
        ],
        [
            'key' => 'family_relationships',
            'translation_key' => 'relationship_type_group_family',
        ],
        [
            'key' => 'other_relationships',
            'translation_key' => 'relationship_type_group_other',
        ],
        [
            'key' => 'pets',
            'translation_key' => 'pets_title',
        ],
        [
            'key' => 'contact_information',
            'translation_key' => 'section_contact_information',
        ],
        [
            'key' => 'addresses',
            'translation_key' => 'contact_address_title',
        ],
        [
            'key' => 'how_you_met',
            'translation_key' => 'introductions_sidebar_title',
        ],
        [
            'key' => 'work_information',
            'translation_key' => 'work_information',
        ],
        [
            'key' => 'food_preferences',
            'translation_key' => 'food_preferencies_title',
        ],
        [
            'key' => 'notes',
            'translation_key' => 'section_personal_notes',
        ],
        [
            'key' => 'phone_calls',
            'translation_key' => 'call_title',
        ],
        [
            'key' => 'activities',
            'translation_key' => 'activity_title',
        ],
        [
            'key' => 'reminders',
            'translation_key' => 'section_personal_reminders',
        ],
        [
            'key' => 'tasks',
            'translation_key' => 'section_personal_tasks',
        ],
        [
            'key' => 'gifts',
            'translation_key' => 'gifts_title',
        ],
        [
            'key' => 'debts',
            'translation_key' => 'debt_title',
        ], ]);
    }
}
