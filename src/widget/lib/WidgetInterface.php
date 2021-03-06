<?php
/**
 * Windwork
 * 
 * 一个用于快速开发高并发Web应用的轻量级PHP框架
 * 
 * @copyright Copyright (c) 2008-2017 Windwork Team. (http://www.windwork.org)
 * @license   http://opensource.org/licenses/MIT
 */
namespace wf\widget;

/**
 * Widget接口
 *
 * @package     wf.widget
 * @author      cm <cmpan@qq.com>
 * @link        http://docs.windwork.org/manual/wf.widget.html
 * @since       0.1.0
 */
interface WidgetInterface{

	/**
	 * 执行Widget
	 * @param mixed $params = null
	 */
	abstract public function excute($params = null);
}
