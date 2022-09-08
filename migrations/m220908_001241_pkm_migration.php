<?php

use yii\db\Migration;

/**
 * Class m220908_001241_pkm_migration
 */
class m220908_001241_pkm_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pokemon', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'image' => $this->string(2500)->defaultValue('images/defaultImage.png')->notNull(),
        ]);

        $this->batchInsert(
            'pokemon',
            ['name', 'image'],
            [
                ['Bulbasaur', 'uploads/1662523538_bulbasaur.png'],
                ['Caterpie', 'uploads/1662523555_caterpie.png'],
                ['Charmander', 'uploads/1662523563_charmander.png'],
                ['Chikorita', 'uploads/1662523572_chikorita.png'],
                ['Eeve', 'uploads/1662523582_eeve.png'],
                ['Meowth', 'uploads/1662523591_meowth.png'],
                ['Squirtle', 'uploads/1662523613_squirtle.png'],
                ['Totodile', 'uploads/1662523620_totodile.png'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220908_001241_pkm_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220908_001241_pkm_migration cannot be reverted.\n";

        return false;
    }
    */
}
