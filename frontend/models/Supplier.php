<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $supplier_no
 * @property string $supplier_name
 * @property string $supplier_type
 * @property string $s_address
 * @property int $supplier_contact_no
 * @property string $supplier_contact_point
 *
 * @property AcInfo[] $acInfos
 * @property AcParts[] $acParts
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['supplier_name', 'supplier_type', 's_address', 'supplier_contact_no', 'supplier_contact_point'], 'required'],
            [['supplier_contact_no'], 'integer'],
            [['supplier_name', 'supplier_type', 's_address', 'supplier_contact_point'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'supplier_no' => 'Supplier No',
            'supplier_name' => 'Supplier Name',
            'supplier_type' => 'Supplier Type',
            's_address' => 'S Address',
            'supplier_contact_no' => 'Supplier Contact No',
            'supplier_contact_point' => 'Supplier Contact Point',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcInfos()
    {
        return $this->hasMany(AcInfo::className(), ['ac_supplier' => 'supplier_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcParts()
    {
        return $this->hasMany(AcParts::className(), ['part_supplier' => 'supplier_name']);
    }
}
