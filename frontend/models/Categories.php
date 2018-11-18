<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $category_number
 * @property string $category_name
 * @property int $failure_no
 *
 * @property TypeOfFailure $failureNo
 * @property Jobs[] $jobs
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name', 'failure_no'], 'required'],
            [['failure_no'], 'integer'],
            [['category_name'], 'string', 'max' => 50],
            [['failure_no'], 'exist', 'skipOnError' => true, 'targetClass' => TypeOfFailure::className(), 'targetAttribute' => ['failure_no' => 'failure_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_number' => 'Category Number',
            'category_name' => 'Category Name',
            'failure_no' => 'Failure No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFailureNo()
    {
        return $this->hasOne(TypeOfFailure::className(), ['failure_no' => 'failure_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['job_category' => 'category_name']);
    }
}
