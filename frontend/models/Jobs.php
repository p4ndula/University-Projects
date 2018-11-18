<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "jobs".
 * This is the model class for table "tbl_jobs".
 *
 * @property int $job_number
 * @property string $job_type_of_failure
 * @property string $job_category
 * @property string $job_status
 * @property string $job_created_time
 * @property string $job_modified_time
 * @property string $job_discription
 * @property string $job_technician_status
 * @property string $job_assigned_technician
 * @property string $job_customer_name
 * @property string $job_customer_address
 * @property string $job_item_serial_number
 * @property string $job_solution
 * @property string $job_completed_date_time
 * @property int $job_completion_period
 * @property int $job_revisit_count
 * @property string $job_customer_contact_point
 * @property string $job_customer_type
 * @property string $job_customer_email
 * @property int $job_completion_price
 * @property string $job_payment_status
 * @property string $job_payment_method
 *
 * @property Employee $jobAssignedTechnician
 * @property Customer $jobCustomerName
 * @property AcInfo $jobItemSerialNumber
 * @property Customer $jobCustomerAddress
 * @property Customer $jobCustomerContactPoint
 * @property Customer $jobCustomerType
 * @property Customer $jobCustomerEmail
 * @property TypeOfFailure $jobTypeOfFailure
 * @property Categories $jobCategory
 */
class Jobs extends \yii\db\ActiveRecord
{
    ///Job Type
    const CUSTOMER_COOPERATE = 'Cooperate';
    const CUSTOMER_PERSONAL = 'Personal';

    //status
    const JOB_STATUS_PENDING = 'Pending';
    const JOB_STATUS_INPROGRESS = 'Inprogress';
    const JOB_STATUS_COMPLETED = 'Completed';

    //toGet Profile
    public $name;

    //tech status
    const TECH_STATUS_ASSIGNED = 'Assigned';
    const TECH_STATUS_RETURNED = 'Return';

    //payment method
    const PAYMENT_METHOD_AGREEMENT = 'Agreement';
    const PAYMENT_METHOD_CREDIT = 'Credit';
    const PAYMENT_METHOD_FREE = 'Free';

    //payment status
    const PAYMENT_STATUS_PAID = 'Paid';
    const PAYMENT_STATUS_DUE = 'Due';
    const PAYMENT_STATUS_COMPLETE = 'Complete';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['job_type_of_failure', 'job_category', 'job_status', 'job_created_time', 'job_discription', 'job_technician_status', 'job_assigned_technician', 'job_customer_name',
//                'job_customer_address', 'job_item_serial_number', 'job_solution', 'job_completed_date_time', 'job_completion_period', 'job_revisit_count', 'job_customer_contact_point',
//                'job_customer_type', 'job_customer_email', 'job_completion_price', 'job_payment_status', 'job_payment_method'], 'required'],
            [['job_created_time', 'job_modified_time', 'job_completed_date_time'], 'safe'],
            [['job_completion_period', 'job_revisit_count', 'job_completion_price'], 'integer'],
            [['job_type_of_failure', 'job_category', 'job_status', 'job_technician_status', 'job_assigned_technician', 'job_customer_name'], 'string', 'max' => 50],
            [['job_discription', 'job_customer_address', 'job_item_serial_number', 'job_customer_contact_point', 'job_customer_type', 'job_customer_email', 'job_payment_status', 'job_payment_method'], 'string', 'max' => 100],
            [['job_solution','name'], 'string', 'max' => 200],
          //  [['job_assigned_technician'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['job_assigned_technician' => 'emp_name']],
            [['job_customer_name'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['job_customer_name' => 'customer_name']],
            [['job_item_serial_number'], 'exist', 'skipOnError' => true, 'targetClass' => AcInfo::className(), 'targetAttribute' => ['job_item_serial_number' => 'ac_serial_number']],
            [['job_customer_address'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['job_customer_address' => 'customer_address']],
            [['job_customer_contact_point'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['job_customer_contact_point' => 'customer_contact_point']],
            [['job_customer_type'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['job_customer_type' => 'customer_type']],
            [['job_customer_email'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['job_customer_email' => 'customer_email']],
            [['job_type_of_failure'], 'exist', 'skipOnError' => true, 'targetClass' => TypeOfFailure::className(), 'targetAttribute' => ['job_type_of_failure' => 'failure_type']],
            [['job_category'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['job_category' => 'category_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'job_number' => 'Job Number',
            'job_type_of_failure' => 'Job Type Of Failure',
            'job_category' => 'Job Category',
            'job_status' => 'Job Status',
            'job_created_time' => 'Job Created Time',
            'job_modified_time' => 'Job Modified Time',
            'job_discription' => 'Job Discription',
            'job_technician_status' => 'Job Technician Status',
            'job_assigned_technician' => 'Job Assigned Technician',
            'job_customer_name' => 'Job customer Name',
            'job_customer_address' => 'Job customer Address',
            'job_item_serial_number' => 'Job Item Serial Number',
            'job_solution' => 'Job Solution',
            'job_completed_date_time' => 'Job Completed Date Time',
            'job_completion_period' => 'Job Completion Period',
            'job_revisit_count' => 'Job Revisit Count',
            'job_customer_contact_point' => 'Job customer Contact Point',
            'job_customer_type' => 'Job customer Type',
            'job_customer_email' => 'Job customer Email',
            'job_completion_price' => 'Job Completion Price',
            'job_payment_status' => 'Job Payment Status',
            'job_payment_method' => 'Job Payment Method',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobAssignedTechnician()
    {
        return $this->hasOne(Employee::className(), ['emp_name' => 'job_assigned_technician']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobCustomerName()
    {
        return $this->hasOne(Customer::className(), ['customer_name' => 'job_customer_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobItemSerialNumber()
    {
        return $this->hasOne(AcInfo::className(), ['ac_serial_number' => 'job_item_serial_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobCustomerAddress()
    {
        return $this->hasOne(Customer::className(), ['customer_address' => 'job_customer_address']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobCustomerContactPoint()
    {
        return $this->hasOne(Customer::className(), ['customer_contact_point' => 'job_customer_contact_point']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobCustomerType()
    {
        return $this->hasOne(Customer::className(), ['customer_type' => 'job_customer_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobCustomerEmail()
    {
        return $this->hasOne(Customer::className(), ['customer_email' => 'job_customer_email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobTypeOfFailure()
    {
        return $this->hasOne(TypeOfFailure::className(), ['failure_type' => 'job_type_of_failure']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobCategory()
    {
        return $this->hasOne(Categories::className(), ['category_name' => 'job_category']);
    }
}
