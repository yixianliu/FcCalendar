<?php
/**
 * Created by Yxl.
 * User: <zccem@163.com>.
 * Date: 2018/6/11
 * Time: 17:13
 */

namespace common\widgets\iMenu;

use Yii;
use yii\widgets\InputWidget;
use common\models\Menu;
use common\models\Conf;

class MenuAdmin extends InputWidget
{

    public $config = [];

    // 当前选项
    static public $activeId = null;

    // 当前选项的一级分类
    static public $openId = null;

    static public $Admin_Parent = 'A3';

    public function init()
    {
        return;
    }

    public function run()
    {

        // TODO: Change the autogenerated stub
        parent::run();

        $result = static::MenuNavList($this->config[0]);

        return $this->render('admin', ['result' => $result]);
    }

    /**
     * 菜单导航
     *
     * @param $pid
     *
     * @return mixed
     */
    public static function MenuNavList($pid = null)
    {

        $result['menu'] = Menu::findMenuNav($pid, $language = 'zh-CN');

        static::MenuFindActive($result['menu']);

        static::MenuFindParent();

        if (!empty(static::$openId)) {

            foreach ($result['menu'] as $key => $value) {

                if ($value['m_key'] == static::$openId)
                    $result['menu'][$key]['open'] = 'On';

            }

        }

        $confData = Conf::findByData('On');

        foreach ($confData as $key => $value) {
            $result['conf'][$value['c_key']] = $value['parameter'];
        }

        return $result;
    }

    /**
     * 查找当前选项的一级栏目
     *
     * @param null $parent_id
     *
     * @return Menu|null|void
     */
    public static function MenuFindParent($parent_id = null)
    {

        if (empty(static::$activeId))
            return;

        $parent_id = empty($parent_id) ? static::$activeId : $parent_id;

        $result = Menu::findOne(['m_key' => $parent_id]);

        if (empty($result))
            return;

        if ($result['parent_id'] == static::$Admin_Parent) {
            static::$openId = $result['m_key'];
        }

        static::MenuFindParent($result['parent_id']);
    }

    /**
     * 查找当前选项
     *
     * @param $array
     */
    public static function MenuFindActive($array)
    {

        if (empty($array) || !is_array($array))
            return;

        foreach ($array as $value) {

            if (!empty($value['active']) && $value['active'] == 'On') {

                // 返回父类ID,减少一层循环
                static::$activeId = $value['parent_id'];
                break;
            }

            if (!empty($value['child'])) {
                static::MenuFindActive($value['child']);
            }

        }

        return;
    }

}