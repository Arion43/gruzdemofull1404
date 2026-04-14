<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property int $user_id
 * @property string $created_at
 * @property string $date
 * @property string $time
 * @property string $weight
 * @property string $gabarite
 * @property string $address_start
 * @property string $address_finish
 * @property int $box_type_id
 * @property int $status_id
 *
 * @property BoxType $boxType
 * @property Status $status
 * @property User $user
 */
class Application extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'date', 'time', 'weight', 'gabarite', 'address_start', 'address_finish', 'box_type_id', 'status_id'], 'required'],
            [['user_id', 'box_type_id', 'status_id'], 'integer'],
            [['created_at', 'date', 'time'], 'safe'],
            [['weight', 'gabarite', 'address_start', 'address_finish'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status_id' => 'id']],
            [['box_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => BoxType::class, 'targetAttribute' => ['box_type_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Пользователь',
            'created_at' => 'Дата создания',
            'date' => 'Дата',
            'time' => 'Время',
            'weight' => 'Вес',
            'gabarite' => 'Габариты',
            'address_start' => 'Адрес отправления',
            'address_finish' => 'Адрес доставки',
            'box_type_id' => 'Тип груза',
            'status_id' => 'Статус',
        ];
    }

    /**
     * Gets query for [[BoxType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBoxType()
    {
        return $this->hasOne(BoxType::class, ['id' => 'box_type_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

}
