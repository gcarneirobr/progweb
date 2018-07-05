<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $id_curso;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['id_curso', 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Usuário',
            'email' => 'E-mail',
            'id_curso' => 'Curso',
            'created_at' => 'Criado em',
            'update_at' => 'Atualizado em'
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->status = User::STATUS_ACTIVE;
        $user->created_at = $user->updated_at = time();
        $user->setPassword($this->password);
        $user->id_curso = $this->id_curso;
        $user->generateAuthKey();
        
        var_dump($user);

        $resultUserSave = $user->save(false);

        var_dump($resultUserSave);

        return $resultUserSave ? $user : null;
    }
}
