<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $empno
 * @property string $emp_name
 * @property string $emp_role
 * @property string $emp_system_status
 * @property string $emp_Join_Date
 * @property string $designation
 * @property string $address
 * @property string $gender
 *
 * @property AcInfo[] $acInfos
 * @property AcParts[] $acParts
 * @property TblRole $empRole
 * @property Jobs[] $jobs
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['emp_name', 'emp_role', 'emp_system_status', 'emp_Join_Date', 'designation', 'address', 'gender'], 'required'],
            [['emp_Join_Date'], 'safe'],
            [['emp_name', 'emp_system_status', 'designation', 'address', 'gender'], 'string', 'max' => 100],
            [['emp_role'], 'string', 'max' => 50],
            [['emp_role'], 'exist', 'skipOnError' => true, 'targetClass' => TblRole::className(), 'targetAttribute' => ['emp_role' => 'role_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'empno' => 'Empno',
            'emp_name' => 'Emp Name',
            'emp_role' => 'Emp Role',
            'emp_system_status' => 'Emp System Status',
            'emp_Join_Date' => 'Emp  Join  Date',
            'designation' => 'Designation',
            'address' => 'Address',
            'gender' => 'Gender',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcInfos()
    {
        return $this->hasMany(AcInfo::className(), ['last_modified_by' => 'emp_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcParts()
    {
        return $this->hasMany(AcParts::className(), ['last_modified_by' => 'emp_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpRole()
    {
        return $this->hasOne(TblRole::className(), ['role_name' => 'emp_role']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['job_assigned_technician' => 'emp_name']);
    }
}
