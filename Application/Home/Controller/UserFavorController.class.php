<?php

namespace Home\Controller;

use Service\GoodsService;

/**
 * 用户收藏
 * @author   Devil
 * @blog     http://gong.gg/
 * @version  0.0.1
 * @datetime 2016-12-01T21:51:08+0800
 */
class UserFavorController extends CommonController
{
    /**
     * [_initialize 前置操作-继承公共前置方法]
     * @author   Devil
     * @blog     http://gong.gg/
     * @version  0.0.1
     * @datetime 2016-12-03T12:39:08+0800
     */
    public function _initialize()
    {
        // 调用父类前置方法
        parent::_initialize();

        // 是否登录
        $this->Is_Login();
    }
    
    /**
     * 商品收藏
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2018-10-09
     * @desc    description
     */
    public function Goods()
    {
        // 参数
        $params = array_merge($_POST, $_GET);
        $params['user'] = $this->user;

        // 分页
        $number = 10;

        // 条件
        $where = GoodsService::UserGoodsFavorListWhere($params);

        // 获取总数
        $total = GoodsService::GoodsFavorTotal($where);

        // 分页
        $page_params = array(
                'number'    =>  $number,
                'total'     =>  $total,
                'where'     =>  $params,
                'url'       =>  U('Home/UserFavor/Goods'),
            );
        $page = new \Library\Page($page_params);
        $this->assign('page_html', $page->GetPageHtml());

        // 获取列表
        $data_params = array(
            'limit_start'   => $page->GetPageStarNumber(),
            'limit_number'  => $number,
            'where'         => $where,
        );
        $data = GoodsService::GoodsFavorList($data_params);
        $this->assign('data_list', $data['data']);

        // 参数
        $this->assign('params', $params);
        $this->display('Goods');
    }

    /**
     * 商品收藏取消
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2018-09-13
     * @desc    description
     */
    public function Cancel()
    {
        // 开始处理
        $params = $_POST;
        $params['user'] = $this->user;
        $ret = GoodsService::GoodsFavor($params);
        $this->ajaxReturn($ret['msg'], $ret['code'], $ret['data']);
    }
}
?>