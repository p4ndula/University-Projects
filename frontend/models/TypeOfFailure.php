<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "type_of_failure".
 *
 * @property int $failure_no
 * @property string $failure_type
 * @property string $failure_discription
 *
 * @property Categories[] $categories
 * @property Jobs[] $jobs
 */
class TypeOfFailure extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_of_failure';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['failure_type', 'failure_discription'], 'required'],
            [['failure_type'], 'string', 'max' => 50],
            [['failure_discription'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'failure_no' => 'Failure No',
            'failure_type' => 'Failure Type',
            'failure_discription' => 'Failure Discription',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['failure_no' => 'failure_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['job_type_of_failure' => 'failure_type']);
    }
}
