<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enrolle".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property integer $gender
 * @property string $group_num
 * @property string $email
 * @property integer $points
 * @property string $birth_date
 * @property integer $resident
 */
class Enrolle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enrolle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'group_num', 'email', 'points', 'birth_date'], 'required'],
            [['gender',  'resident'], 'boolean'],
            [['points'],'integer', 'max'=>600],
            ['gender', 'default', 'value' => true],
            ['resident', 'default', 'value' => true],
            ['birth_date', 'date', 'format' => 'php:Y-m-d', 'message'=>'Неверный формат даты, укажите год, месяц, число через дефис, 1999-09-29'],
            ['name', 'valid_len_name'],
            ['last_name','valid_len_lname'],
            ['group_num', 'valid_grup'],
            [['email'], 'email'],
            [['email'],'unique']
        ];
    }
    public function valid_grup($attribute)
    {
    	if(mb_strlen($this->$attribute)>1 && mb_strlen($this->$attribute)<6){
        if(!preg_match('/^[a-zA-ZА-Яа-я0-9]+$/',$this->$attribute)){
          $this->addError($attribute, 'Значение группы могут быть цифры или буквы');
        }
      }else{
        $this->addError($attribute, 'Значение группы от 2 до 5 цифр или букв');
      }
    }
    public function valid_len_name($attribute)
    {
      if(mb_strlen($this->$attribute)>10) $this->addError($attribute, 'Имя не должно быть длинее 30 символов');
    }
    public function valid_len_lname($attribute)
    {
      if(mb_strlen($this->$attribute)>50) $this->addError($attribute, 'Фамилия не должна быть длинее 50 символов');
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'last_name' => 'Фамилия',
            'gender' => 'Пол',
            'group_num' => 'Номер группы',
            'email' => 'Email',
            'points' => 'Суммарное число баллов',
            'birth_date' => 'Дата рождения',
            'resident' => 'Местный/Иногородний',
            'fullsearch'=>'Поиск'
        ];
    }
}
