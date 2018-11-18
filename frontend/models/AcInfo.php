<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ac_info".
 *
 * @property string $ac_serial_number
 * @property string $ac_purchursed_date
 * @property string $ac_make_company
 * @property string $ac_model_number
 * @property string $ac_system_create_time
 * @property string $ac_model_type
 * @property string $ac_discription
 * @property int $ac_installed_customer_no
 * @property string $ac_installed_customer_name
 * @property string $ac_supplier
 * @property string $last_modified
 * @property string $last_modified_by
 * @property int $ac_userful_time
 * @property string $ac_type
 *
 * @property Customer $acInstalledCustomerName
 * @property Employee $lastModifiedBy
 * @property Supplier $acSupplier
 * @property Customer $acInstalledCustomerNo
 * @property AcParts[] $acParts
 * @property Jobs[] $jobs
 * @property Service[] $services
 */
class AcInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ac_serial_number', 'ac_purchursed_date', 'ac_make_company', 'ac_model_number', 'ac_system_create_time', 'ac_model_type', 'ac_discription', 'ac_installed_customer_no', 'ac_installed_customer_name', 'ac_supplier', 'last_modified_by', 'ac_userful_time', 'ac_type'], 'required'],
            [['ac_purchursed_date', 'ac_system_create_time', 'last_modified'], 'safe'],
            [['ac_installed_customer_no', 'ac_userful_time'], 'integer'],
            [['ac_serial_number', 'ac_make_company', 'ac_model_number', 'ac_model_type', 'ac_installed_customer_name', 'ac_supplier', 'last_modified_by', 'ac_type'], 'string', 'max' => 50],
            [['ac_discription'], 'string', 'max' => 100],
            [['ac_serial_number'], 'unique'],
            [['ac_installed_customer_name'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['ac_installed_customer_name' => 'customer_name']],
            [['last_modified_by'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['last_modified_by' => 'emp_name']],
            [['ac_supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['ac_supplier' => 'supplier_name']],
            [['ac_installed_customer_no'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['ac_installed_customer_no' => 'customer_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ac_serial_number' => 'Ac Serial Number',
            'ac_purchursed_date' => 'Ac Purchursed Date',
            'ac_make_company' => 'Ac Make Company',
            'ac_model_number' => 'Ac Model Number',
            'ac_system_create_time' => 'Ac System Create Time',
            'ac_model_type' => 'Ac Model Type',
            'ac_discription' => 'Ac Discription',
            'ac_installed_customer_no' => 'Ac Installed Customer No',
            'ac_installed_customer_name' => 'Ac Installed Customer Name',
            'ac_supplier' => 'Ac Supplier',
            'last_modified' => 'Last Modified',
            'last_modified_by' => 'Last Modified By',
            'ac_userful_time' => 'Ac Userful Time',
            'ac_type' => 'Ac Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcInstalledCustomerName()
    {
        return $this->hasOne(Customer::className(), ['customer_name' => 'ac_installed_customer_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastModifiedBy()
    {
        return $this->hasOne(Employee::className(), ['emp_name' => 'last_modified_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcSupplier()
    {
        return $this->hasOne(Supplier::className(), ['supplier_name' => 'ac_supplier']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcInstalledCustomerNo()
    {
        return $this->hasOne(Customer::className(), ['customer_no' => 'ac_installed_customer_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcParts()
    {
        return $this->hasMany(AcParts::className(), ['part_installed_ac_unit' => 'ac_serial_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['job_item_serial_number' => 'ac_serial_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['service_item_serial_number' => 'ac_serial_number']);
    }
}
