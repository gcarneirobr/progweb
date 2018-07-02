<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jogada".
 *
 * @property int $id
 * @property int $pontuacao
 * @property int $id_user
 * @property string $data_hora
 *
 * @property User $user
 */
class Jogada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jogada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pontuacao', 'id_user', 'data_hora'], 'required'],
            [['id', 'pontuacao', 'id_user'], 'integer'],
            [['data_hora'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pontuacao' => 'Pontuacao',
            'id_user' => 'Usuário',
            'data_hora' => 'Data/Hora',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
