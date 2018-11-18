<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $service_job_number
 * @property string $service_job_type
 * @property string $service_sheduled_date
 * @property string $service_item_serial_number
 * @property string $service_job_status
 * @property string $service_reshedule_date
 * @property string $service_customer_name
 * @property int $service_customer_contact_no
 * @property string $customer_rating
 * @property string $customer_address
 * @property string $service_job_customer_type
 *
 * @property AcInfo $serviceItemSerialNumber
 * @property Customer $serviceCustomerName
 * @property Customer $customerAddress
 * @property Customer $serviceJobCustomerType
 * @property Customer $customerRating
 * @property Customer $serviceCustomerContactNo
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_job_type', 'service_sheduled_date', 'service_item_serial_number', 'service_job_status', 'service_reshedule_date', 'service_customer_name', 'service_customer_contact_no', 'customer_rating', 'customer_address', 'service_job_customer_type'], 'required'],
            [['service_sheduled_date', 'service_reshedule_date'], 'safe'],
            [['service_customer_contact_no'], 'integer'],
            [['service_job_type', 'service_item_serial_number', 'service_job_status', 'service_customer_name', 'customer_rating', 'service_job_customer_type'], 'string', 'max' => 50],
            [['customer_address'], 'string', 'max' => 200],
            [['service_item_serial_number'], 'exist', 'skipOnError' => true, 'targetClass' => AcInfo::className(), 'targetAttribute' => ['service_item_serial_number' => 'ac_serial_number']],
            [['service_customer_name'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['service_customer_name' => 'customer_name']],
            [['customer_address'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_address' => 'customer_address']],
            [['service_job_customer_type'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['service_job_customer_type' => 'customer_type']],
            [['customer_rating'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_rating' => 'customer_rating']],
            [['service_customer_contact_no'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['service_customer_contact_no' => 'customer_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_job_number' => 'Service Job Number',
            'service_job_type' => 'Service Job Type',
            'service_sheduled_date' => 'Service Sheduled Date',
            'service_item_serial_number' => 'Service Item Serial Number',
            'service_job_status' => 'Service Job Status',
            'service_reshedule_date' => 'Service Reshedule Date',
            'service_customer_name' => 'Service Customer Name',
            'service_customer_contact_no' => 'Service Customer Contact No',
            'customer_rating' => 'Customer Rating',
            'customer_address' => 'Customer Address',
            'service_job_customer_type' => 'Service Job Customer Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceItemSerialNumber()
    {
        return $this->hasOne(AcInfo::className(), ['ac_serial_number' => 'service_item_serial_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceCustomerName()
    {
        return $this->hasOne(Customer::className(), ['customer_name' => 'service_customer_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAddress()
    {
        return $this->hasOne(Customer::className(), ['customer_address' => 'customer_address']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceJobCustomerType()
    {
        return $this->hasOne(Customer::className(), ['customer_type' => 'service_job_customer_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerRating()
    {
        return $this->hasOne(Customer::className(), ['customer_rating' => 'customer_rating']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceCustomerContactNo()
    {
        return $this->hasOne(Customer::className(), ['customer_no' => 'service_customer_contact_no']);
    }
}
