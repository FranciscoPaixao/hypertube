<?php
/**
 * Created by PhpStorm.
 * User: sandruse
 * Date: 15.09.17
 * Time: 15:47
 */

namespace app\models;

use yii\db\ActiveRecord;

class Imdb extends ActiveRecord
{

    public static function tableName(){
        return 'imdb_id';
    }

    public function attributeLabels()
    {
        return [

        ];
    }

    public function rules()
    {
        return [

        ];
    }

}