<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[tooof]].
 *
 * @see tooof
 */
class TypefQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return tooof[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return tooof|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
