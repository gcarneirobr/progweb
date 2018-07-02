<?php

namespace common\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "curso".
 *
 * @property int $id
 * @property string $sigla
 * @property string $descricao
 * @property string $nome
 * 
 * @property User[] $users
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'sigla', 'nome'], 'required', 'message' => 'Este campo é obrigatório'],
            [['descricao'], 'string'],
            [['sigla'], 'string', 'max' => 4, 'message' => 'A sigla deve ter apenas 4 caracteres'],
            [['nome'], 'string', 'max' => 45, 'message' => 'O nome deve ter no máximo 45 caracteres']

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'sigla' => 'Sigla',
            'descricao' => 'Descrição', 
            'numeroAlunos' => 'Número de alunos'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id_curso' => 'id']);
    }

    public function getNumeroAlunos() {
        return User::find()->where(['id_curso' => $this->id])->count();
    }

}
