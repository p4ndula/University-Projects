<?php
namespace frontend\rbac;

use frontend\models\Lines;
use frontend\models\LoanExecutives;
use yii;
use yii\rbac\Rule;
use yii\filters\AccessControl;

/**
 * Checks if authorID matches user passed via params
 */
class SectionOperatorRule extends Rule
{
    public $name = 'viewOwnSectionSummary';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
        ];
    }

    /**
     * @param string|int $user the user ID.
     * @param Item $item the role or permission that this rule is associated with
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return bool a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        if (isset(Yii::$app->request->queryParams['id'])) {
            $line = Lines::find()->where(['id' => Yii::$app->getRequest()->getQueryParam('id')])->one();
            if (null != $line && $line->executive_id == Yii::$app->user->id) {
                return true;
            }
            return false;
        }
        return true;
    }
}
