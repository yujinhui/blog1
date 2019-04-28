<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//前台首页
Route::get('/','IndexController@index');
//注册
Route::get('/login/reg','LoginController@reg');
//发送邮件
Route::post('/login/send','LoginController@send');
//验证邮箱是否存在
Route::post('/login/checkname','LoginController@checkname');
//注册信息入库
Route::post('/login/zc','LoginController@zc');
//登录
Route::get('/login/login','LoginController@login');
//处理登录
Route::post('/login/loginin','LoginController@loginin');
//退出登录
Route::get('/login/loginout','LoginController@loginout');
//商品详情
Route::get('goods/{goods_id}','GoodsController@goods');
//获取分类下的商品
Route::get('/cate/{cate_id}','GoodsController@cateInfo');
//加入购物车
Route::post('car/{goods_id}','GoodsController@car');
//购物车列表
Route::get('/carlist','GoodsController@carlist');
//更改购买数量
Route::post('checkBuyNum','GoodsController@checkBuyNum');
//商品总价
Route::post('countTotal','GoodsController@countTotal');
//收获地址页面
Route::get('/address','GoodsController@address');
//三级联动
Route::post('getArea','GoodsController@getArea');
//添加收货地址
Route::post('addAddress','GoodsController@addAddress');
//下单判断是否登录
Route::get('/pay/isLogin','PayController@isLogin');
//订单列表
Route::get('/pay/paylist','PayController@paylist');
//结算
Route::post('/pay/jiesuan','PayController@jiesuan');
//支付宝
Route::get('/pay/payMoney','PayController@payMoney');
//支付同步通知
Route::get('/pay/success','PayController@paySuccess');
//支付异步通知
Route::post('/pay/alipay','PayController@paySuccess');


//周考
////列表
Route::get('/list/index','ListController@index');
////详情页
Route::get('/list/xq','ListController@xq');
////删除
Route::get('list/del/{goods_id}','ListController@del');
////修改
Route::get('list/edit/{goods_id}','ListController@edit');
////处理修改
Route::post('list/doedit','ListController@doedit');