<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%psb_classify}}".
 *
 * @property int $id
 * @property string $c_key 分类KEY
 * @property string $sort_id 排序
 * @property string $name 名称
 * @property string $description 描述
 * @property string $keywords 关键字
 * @property string $json_data Json数据
 * @property string $parent_id 父类ID
 * @property string $is_using 是否启用
 * @property string $created_at
 * @property string $updated_at
 */
class PsbClassify extends \yii\db\ActiveRecord
{

    static public $parent_id = 'S0';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%psb_classify}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'parent_id', 'is_using', 'is_type'], 'required'],
            [['sort_id',], 'integer'],
            [['description', 'is_using'], 'string'],
            [['c_key', 'parent_id'], 'string', 'max' => 55],
            [['name'], 'string', 'max' => 85],
            [['keywords'], 'string', 'max' => 155],
            [['json_data'], 'string', 'max' => 255],

            [['sort_id',], 'default', 'value' => 1],
            [['keywords',], 'default', 'value' => '暂无!!'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c_key'       => '分类关键KEY',
            'sort_id'     => '分类排序',
            'name'        => '分类名称',
            'description' => '分类描述',
            'keywords'    => '分类关键词',
            'json_data'   => 'Json 数据',
            'parent_id'   => '父类分类',
            'is_using'    => '是否启用',
            'is_type'     => '分类类型',
            'created_at'  => '添加数据时间',
            'updated_at'  => '更新数据时间',
        ];
    }

    /**
     * 列表
     *
     * @param null $parent_id
     * @param string $type
     * @return array|PsbClassify[]|\yii\db\ActiveRecord[]
     */
    static public function findByAll($parent_id = null, $type = 'Supply')
    {

        $parent_id = empty($parent_id) ? static::$parent_id : $parent_id;

        return static::find()->where(['parent_id' => $parent_id, 'is_type' => $type])
            ->orderBy('sort_id', SORT_DESC)
            ->asArray()
            ->all();
    }

    /**
     * 获取分类
     *
     * @param null $parent_id
     * @param null $type
     * @return array
     */
    public function getCls($parent_id = null, $type = 'Supply')
    {

        $parent_id = empty($parent_id) ? $this->parent_id : $parent_id;

        // 初始化
        $result = array();

        switch ($type) {

            default:
            case 'Supply':
                $result['S0'] = '顶级父类 !!';
                break;

            case 'Purchase':
                $result['P0'] = '顶级父类 !!';
                break;

            case 'Bid':
                $result['B0'] = '顶级父类 !!';
                break;
        }

        // 产品分类
        $dataClassify = static::findByAll($parent_id, $type);

        $result[ $this->parent_id ] = '顶级分类 !!';

        foreach ($dataClassify as $key => $value) {

            $result[ $value['c_key'] ] = $value['name'];

            $child = $this->recursionClsSelect($value);

            if (empty($child))
                continue;

            $result = array_merge($result, $child);
        }

        return $result;
    }

    /**
     * 无限分类(选项框)
     *
     * @param $data
     * @param int $num
     */
    public function recursionClsSelect($data, $num = 1)
    {

        if (empty($data))
            return;

        // 初始化
        $result = array();
        $symbol = null;

        $child = static::findByAll($data['c_key']);

        if (empty($child))
            return;

        if ($num != 0) {
            for ($i = 0; $i <= $num; $i++) {
                $symbol .= '――';
            }
        }

        foreach ($child as $key => $value) {

            $result[ $value['c_key'] ] = $symbol . $value['name'];

            $childData = $this->recursionClsSelect($value, ($num + 1));

            if (empty($childData))
                continue;

            $result = array_merge($result, $childData);
        }

        return $result;
    }
}
