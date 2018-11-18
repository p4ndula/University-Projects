<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ac_parts".
 *
 * @property int $part_no
 * @property string $part_purchursed_date
 * @property string $part_status
 * @property string $part_supplier
 * @property string $part_system_created_time
 * @property string $part_discription
 * @property string $part_installed_customer
 * @property string $part_installed_ac_unit
 * @property string $last_modified_time
 * @property string $last_modified_by
 * @property int $part_useful_life
 * @property string $part_type
 * @property int $part_price
 *
 * @property Supplier $partSupplier
 * @property Employee $lastModifiedBy
 * @property Customer $partInstalledCustomer
 * @property AcInfo $partInstalledAcUnit
 */
class AcParts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ac_parts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['part_no', 'part_purchursed_date', 'part_status', 'part_supplier', 'part_system_created_time', 'part_discription', 'part_installed_customer', 'part_installed_ac_unit', 'last_modified_by', 'part_useful_life', 'part_type', 'part_price'], 'required'],
            [['part_no', 'part_useful_life', 'part_price'], 'integer'],
            [['part_purchursed_date', 'part_system_created_time', 'last_modified_time'], 'safe'],
            [['part_status', 'part_supplier', 'part_installed_customer', 'part_installed_ac_unit', 'last_modified_by'], 'string', 'max' => 50],
            [['part_discription'], 'string', 'max' => 200],
            [['part_type'], 'string', 'max' => 11],
            [['part_no'], 'unique'],
            [['part_supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['part_supplier' => 'supplier_name']],
            [['last_modified_by'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['last_modified_by' => 'emp_name']],
            [['part_installed_customer'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['part_installed_customer' => 'customer_name']],
            [['part_installed_ac_unit'], 'exist', 'skipOnError' => true, 'targetClass' => AcInfo::className(), 'targetAttribute' => ['part_installed_ac_unit' => 'ac_serial_number']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'part_no' => 'Part No',
            'part_purchursed_date' => 'Part Purchursed Date',
            'part_status' => 'Part Status',
            'part_supplier' => 'Part Supplier',
            'part_system_created_time' => 'Part System Created Time',
            'part_discription' => 'Part Discription',
            'part_installed_customer' => 'Part Installed Customer',
            'part_installed_ac_unit' => 'Part Installed Ac Unit',
            'last_modified_time' => 'Last Modified Time',
            'last_modified_by' => 'Last Modified By',
            'part_useful_life' => 'Part Useful Life',
            'part_type' => 'Part Type',
            'part_price' => 'Part Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartSupplier()
    {
        return $this->hasOne(Supplier::className(), ['supplier_name' => 'part_supplier']);
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
    public function getPartInstalledCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_name' => 'part_installed_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartInstalledAcUnit()
    {
        return $this->hasOne(AcInfo::className(), ['ac_serial_number' => 'part_installed_ac_unit']);
    }
}
