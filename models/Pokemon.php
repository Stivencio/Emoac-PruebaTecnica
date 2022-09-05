<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pokemon".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 */
class Pokemon extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pokemon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            // [['image'], 'string', 'max' => 2500],

            //Se crea un campo 'file' para que se pueda interpretar
            [['file'], 'file', 'extensions' => 'jpg,png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'file' => 'Image',
        ];
    }
}
