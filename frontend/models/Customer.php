<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $customer_no
 * @property string $customer_name
 * @property string $customer_type
 * @property string $customer_address
 * @property string $customer_rating
 * @property int $customer_contact_no
 * @property string $customer_contact_point
 * @property string $customer_email
 *
 * @property AcInfo[] $acInfos
 * @property AcInfo[] $acInfos0
 * @property AcParts[] $acParts
 * @property Jobs[] $jobs
 * @property Jobs[] $jobs0
 * @property Jobs[] $jobs1
 * @property Jobs[] $jobs2
 * @property Jobs[] $jobs3
 * @property Service[] $services
 * @property Service[] $services0
 * @property Service[] $services1
 * @property Service[] $services2
 * @property Service[] $services3
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_name', 'customer_type', 'customer_address', 'customer_rating', 'customer_contact_no', 'customer_contact_point', 'customer_email'], 'required'],
            [['customer_contact_no'], 'integer'],
            [['customer_name', 'customer_type', 'customer_address', 'customer_contact_point', 'customer_email'], 'string', 'max' => 100],
            [['customer_rating'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_no' => 'customer No',
            'customer_name' => 'customer Name',
            'customer_type' => 'customer Type',
            'customer_address' => 'customer Address',
            'customer_rating' => 'customer Rating',
            'customer_contact_no' => 'customer Contact No',
            'customer_contact_point' => 'customer Contact Point',
            'customer_email' => 'customer Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcInfos()
    {
        return $this->hasMany(AcInfo::className(), ['ac_installed_customer_name' => 'customer_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcInfos0()
    {
        return $this->hasMany(AcInfo::className(), ['ac_installed_customer_no' => 'customer_no']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAcParts()
    {
        return $this->hasMany(AcParts::className(), ['part_installed_customer' => 'customer_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs()
    {
        return $this->hasMany(Jobs::className(), ['job_customer_name' => 'customer_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs0()
    {
        return $this->hasMany(Jobs::className(), ['job_customer_address' => 'customer_address']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs1()
    {
        return $this->hasMany(Jobs::className(), ['job_customer_contact_point' => 'customer_contact_point']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs2()
    {
        return $this->hasMany(Jobs::className(), ['job_customer_type' => 'customer_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobs3()
    {
        return $this->hasMany(Jobs::className(), ['job_customer_email' => 'customer_email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['service_customer_name' => 'customer_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices0()
    {
        return $this->hasMany(Service::className(), ['customer_address' => 'customer_address']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices1()
    {
        return $this->hasMany(Service::className(), ['service_job_customer_type' => 'customer_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices2()
    {
        return $this->hasMany(Service::className(), ['customer_rating' => 'customer_rating']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices3()
    {
        return $this->hasMany(Service::className(), ['service_customer_contact_no' => 'customer_no']);
    }
}
