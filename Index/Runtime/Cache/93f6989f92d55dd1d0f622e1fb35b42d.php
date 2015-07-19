<?php if (!defined('THINK_PATH')) exit();?>
<html><head lang="zh"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>淘点通系统</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/-3_files/dialog.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/datepicker.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jslider.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jslider.blue.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jslider.plastic.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jslider.round.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jslider.round.plastic.css">

    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/dialog.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/bootstrap-datepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="__PUBLIC__/js/bootstrap-datepicker.zh-CN.js" charset="UTF-8"></script>
    <script type="text/javascript" src="__PUBLIC__/js/menu.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.dependClass.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/jquery.slider-min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/task_create.js"></script>
	
	<style type="text/css" media="screen">
	 .layout { padding: 50px; font-family: Georgia, serif; }
	 .layout-slider { margin-bottom: 60px; width: 50%; }
	 .layout-slider-settings { font-size: 12px; padding-bottom: 10px; }
	 .layout-slider-settings pre { font-family: Courier; }
	</style>
	
</head>
<body>

<!--侧边栏-->
<!--侧边栏-->
<div class="menu">
    <h1 class="title">淘点通后台系统</h1>
    <ul class="menu_main_list_area">
    	
        <li 
        <?php
 if ($Think.MODULE_NAME=='Index') { echo 'class="mueu_main_list active"'; } else{ echo 'class="mueu_main_list"'; } ?>
        >
            <a class="mueu_main_title" href="<?php echo U('Index/index');?>">
                <i class="icon icon_user"></i>
                <span>个人信息</span>
            </a>
        </li>
        
        <li 
            <?php
 if ($Think.MODULE_NAME=='Notification') { echo 'class="mueu_main_list active"'; } else{ echo 'class="mueu_main_list"'; } ?>
        >
            <a class="mueu_main_title" href="<?php echo U('Notification/index');?>">
                <i class="icon icon_email"></i>
                <span>消息通知</span>
                            </a>
        </li>

        <li 
        <?php
 if ($Think.MODULE_NAME=='Sendtask') { echo 'class="mueu_main_list active"'; } else{ echo 'class="mueu_main_list"'; } ?>
        >
            <a class="mueu_main_title" href="<?php echo U('Sendtask/index');?>">
                <i class="icon icon_task"></i>
                <span>发布任务</span>
            </a>
        </li>

        <li 
         <?php
 if ($Think.MODULE_NAME=='Mytask') { echo 'class="mueu_main_list active"'; } else{ echo 'class="mueu_main_list"'; } ?>
        >
            <a class="mueu_main_title" href="<?php echo U('Mytask/index');?>">
                <i class="icon icon-signal"></i>
                <span>我的任务</span>
            </a>
        </li>
        
        <li 
    <?php
 if ($Think.MODULE_NAME=='Gotask') { echo 'class="mueu_main_list active"'; } else{ echo 'class="mueu_main_list"'; } ?>
        >
            <a class="mueu_main_title" href="<?php echo U('Gotask/Index');?>">
                <i class="icon icon-prifit"></i>
                <span>挂机赚分</span>
            </a>
        </li>
        
        <li
    <?php
 if ($Think.MODULE_NAME=='Pay') { echo 'class="mueu_main_list active"'; } else{ echo 'class="mueu_main_list"'; } ?>
        >
            <!-- <a class="mueu_main_title" href="<?php echo U('Pay/index');?>">
                <i class="icon icon-charge"></i>
                <span style="color:#ff0000">积分充值</span>
                <span class="new_message">New</span>
            </a> -->
        </li>
        <!--
        <li class="mueu_main_list">
            <a class="mueu_main_title" href="./houtai-1.htm">
                <i class="icon icon-trade"></i>
                <span>积分转让</span>
            </a>
        </li>
        -->
        <li 
    <?php
 if ($Think.MODULE_NAME=='Daili') { echo 'class="mueu_main_list active"'; } else{ echo 'class="mueu_main_list"'; } ?>
        >
            <!-- <a class="mueu_main_title" href="<?php echo U('Daili/index');?>">
                <i class="icon icon-agent"></i>
                <span style="color: #ff0000;">代理</span>
                <span class="new_message">New</span>
            </a> -->
        </li>
        
                
    </ul>
</div>
<!--右侧整体内容-->
<div class="content">
    <!--用户信息栏-->
    <!--用户信息栏-->
    <div class="header">
    <ul>
        <li><img id="avatar_small_head" src="__PUBLIC__/images/small.jpg"><span><?php echo (session('username')); ?></span></li>
        <li><span>会员等级：试用会员(剩余3天)</span></li>
        <li><span>账户积分：3892(冻结：0)</span></li>
        <li><span class="charge"><a style="color:#ff0000" href="<?php echo U('Pay/index');?>"><i class="icon-charge"></i>快速充值</a></span></li>
        <li><a style="color:#ff0000" href="http://www.tdiant.com/index/wenti.htm" target="_blank"><i class="icon_question"></i>常见问题</a></li>
        <li><a href="http://www.tdiant.com/index.htm" target="_blank"><i class="icon icon-logout"></i>首页</a></li>
        <li><a href="<?php echo U('User/index');?>" id="menu_logout"><i class="icon icon-logout"></i>退出</a></li>
    </ul>
    <p>官方群：<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=e40674bc9d6805d14100d91ac1cb39cb558c683b6535467c07ed048e5b2ebe5b"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="淘点通官方群" title="淘点通官方群"></a></p>
    <p>咨询：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1127732832&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1127732832:51" alt="点击咨询" title="点击咨询"/></a></p>
</div>
    <form action="<?php echo U('Sendtask/sendtask');?>" method="post">
        <div class="container">
            <div class="container-fluid">
                <!--新建任务-->
                <div class="container_form">
                    <div class="container_tab">
                        <ul class="clearFix">
                            <li class="tab tab1 tab_active"><a href="javascript:void(0);">淘宝商品搜索</a></li>
                            <!-- 
                            <li class="tab tab2"><a href="javascript:void(0);">天猫商品搜索</a></li>
                            <li class="tab tab3"><a href="javascript:void(0);">京东商品搜索</a></li>
                            <li class="tab tab4"><a href="javascript:void(0);">商品直达</a></li>
                            <li class="tab tab5"><a href="javascript:void(0);">店铺直达</a></li>
                             -->
                        </ul>
                    </div>
                    
                    <div class="tab_content tab_content1 container_form_content">
                        <div class="control-group mission_name clearFix">
                            <label class="control-label essential">* 任务名称</label>
                            <div class="controls">
	                        	<input type="text" name="task_name" id="task1_name" class="container_forms">
    	                            <p class="exp">（给任务取个名字，以便后续识别）</p>
                            	                        </div>
                        </div>
                        
                        <div class="control-group mission_key clearFix">
                            <label class="control-label essential">* 搜索关键词</label>
                            <div class="controls">
                                <input type="text" value="" name="task1_keyword" id="task_keyword" class="container_forms">
                                <p class="exp">（在手机淘宝客户端首页搜索的关键词。例如：手机）</p>
                            </div>
                        </div>
                        
                        <div class="control-group mission_id clearFix">
                            <label class="control-label">商品链接</label>
                            <div class="controls">
                                <input type="text" value="" name="task_good_url" id="task1_good_url" class="container_forms">
                                <p class="exp">（可选，可访问到此商品的链接地址。<label class="essential"> "商品链接" 和 "商品标题" 至少要设置一项</label>)</p><br>
                            </div>
                            <div class="controls">
                            	<p class="exp" style="margin-left:140px;">（可以填写PC端或无线端的商品链接，系统会提取商品ID字段，最终通过客户端访问的是移动端链接）</p><br>
                            </div>
                        </div>
                        <div class="control-group mission_title clearFix">
                            <label class="control-label">商品标题</label>
                            <div class="controls">
                                <input type="text" value="" name="good_title" id="task1_good_title" class="container_forms">
                                <p class="exp">（可选，目标商品标题名称，第一个匹配的商品将会被访问到）</p>
                            </div>
                        </div>

                        <div class="control-group mission_page clearFix">
                            <label class="control-label essential">* 页码范围</label>
                            <div class="controls">
                                <input type="text" value="" name="task_from_page" id="task1_from_page" class="container_forms_short">
                                <p>到</p>
                                <input type="text" value="" name="task_to_page" id="task1_to_page" class="container_forms_short">
                                <p class="exp">（目标商品可能出现的页码范围，例如：5到10，翻页不能超过100页，翻页超过5页将增加积分消耗）</p>
                            </div>
                        </div>
                        
                        <div class="control-group mission_page clearFix">
                            <label class="control-label">价格范围</label>
                            <div class="controls">
                                <input type="text" value="" name="task_from_price" id="task1_from_price" class="container_forms_short">
                                <p>到</p>
                                <input type="text" value="" name="task_to_price" id="task1_to_price" class="container_forms_short">
                                <p class="exp">（可选，设定商品的搜索价格范围）</p>
                            </div>
                        </div>

                        <div class="control-group mission_date clearFix">
                            <label class="control-label essential">* 有效日期</label>
                            <div class="controls">
                                <div class="date_start date form_datetime starttimeDiv">
                                    <input size="16" type="text" name="task_from_date" id="task1_from_date" value="" readonly="" class="container_forms_short">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <p>到</p>
                                <div class="date_start date form_datetime endtimeDiv">
                                    <input size="16" type="text" name="task_to_date" id="task1_to_date" value="" readonly="" class="container_forms_short">
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>
                                <p class="exp">（发布的任务，在该日期范围内可以被客户端接收到，过期之后不会再被客户端接收到）</p>
                            </div>
                        </div>
                        <div class="control-group mission_ip clearFix">
                            <label class="control-label essential">* 每日发送任务量</label>
                            <div class="controls">
                            	<div>
                                	<input style="width:100px;" type="text" value="" name="task1_max_pv_day" id="task1_max_pv_day" class="container_forms">
                                	<p class="exp">（商品目标每日最大派送任务次数，不能低于50）</p>
                                </div>
                                
                                <div style="padding-top:40px; font-size:14px;">每个时段的任务量</div>
                                
                                <div class="container_form">
                                <div class="container_form_content">
    							<table>
    							    <thead>
    							        <tr>
    							            <th>0时</th>
    							            <th>1时</th>
    							            <th>2时</th>
    							            <th>3时</th>
    							            <th>4时</th>
    							            <th>5时</th>
    							            <th>6时</th>
    							            <th>7时</th>
    							            <th>8时</th>
    							            <th>9时</th>
    							            <th>10时</th>
    							            <th>11时</th>
    							        </tr>
    							    </thead>
    							    <tbody>
    							        <tr> 
    							            <td><input id="maxPvHour0" name="maxPvHour0" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour1" name="maxPvHour1" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour2" name="maxPvHour2" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour3" name="maxPvHour3" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour4" name="maxPvHour4" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour5" name="maxPvHour5" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour6" name="maxPvHour6" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour7" name="maxPvHour7" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour8" name="maxPvHour8" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour9" name="maxPvHour9" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour10" name="maxPvHour10" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour11" name="maxPvHour11" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							        </tr>
    							    </tbody>
    							    
    							    <thead>
    							        <tr>
    							            <th>12时</th>
    							            <th>13时</th>
    							            <th>14时</th>
    							            <th>15时</th>
    							            <th>16时</th>
    							            <th>17时</th>
    							            <th>18时</th>
    							            <th>19时</th>
    							            <th>20时</th>
    							            <th>21时</th>
    							            <th>22时</th>
    							            <th>23时</th>
    							        </tr>
    							    </thead>
    							    <tbody>
    							        <tr> 
    							            <td><input id="maxPvHour12" name="maxPvHour12" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour13" name="maxPvHour13" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour14" name="maxPvHour14" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour15" name="maxPvHour15" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour16" name="maxPvHour16" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour17" name="maxPvHour17" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour18" name="maxPvHour18" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour19" name="maxPvHour19" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour20" name="maxPvHour20" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour21" name="maxPvHour21" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour22" name="maxPvHour22" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							            <td><input id="maxPvHour23" name="maxPvHour23" value="" style="width:30px;" type="text" class="container_forms maxPvHour"></td>
    							        </tr>
    							    </tbody>
    							</table>
    							<p class="exp" id="max_pv_hour_hint" style="display:none;">（调整时间派发曲线，需要增加2点积分消耗）</p>
    							</div>
    							</div>
                            </div>
                        </div>
                        <div class="control-group mission_time clearFix">
                            <label class="control-label essential">* PV停留时长</label>
                            <div class="controls" style="line-height: 0px;">
                                <span>
                                	<label class="radio_label">
	                            		<input class="choose_time" type="radio" name="task_pvdelay" id="task1_pvdelay" value="1">
	                                    <span>快速模式，不停留</span>
                                    </label>
                                    
                                    <label class="radio_label">
                                    	<input class="choose_time" type="radio" name="task_pvdelay" id="task1_pvdelay" value="2" checked="checked">
                                        <span>20-30秒随机停留时长</span>
                                    </label>
                                    <br>
                                    <label class="radio_label">
                                    	<input class="choose_time" type="radio" name="task_pvdelay" id="task1_pvdelay" value="3">
                                        <span>30-60秒随机停留时长</span>
                                    </label>
                                    <br>
                                    <label class="radio_label">
                                    	<input class="choose_time" type="radio" name="task_pvdelay" id="task1_pvdelay" value="4">
                                        <span>60-90秒随机停留时长</span>
                                    </label>
                                    <br>
                                    <label class="radio_label">
                                    	<input class="choose_time" type="radio" name="task_pvdelay" id="task1_pvdelay" value="5">
                                        <span>90-120秒随机停留时长</span>
                                    </label>
                                    <p style="width:800px; color: #41BEDD; font-size: 12px !important;">（找到商品页面后，在此页面停留的时长。如果选择快速模式，则访问完商品页面后，立刻进行下一步操作，不在商品页面停留）</p>
                                </span>
                                
                            </div>
                        </div>
                        
                        <!--
                        <div class="control-group mission_time clearFix">
    	                    <label class="control-label">是否进入店铺</label>
    	                    <div class="controls">
    	                        <span style="width:20px; padding-top:8px;">
    	                        	                        	<input type="checkbox" checked="checked" id="task1_gohome" name="task1_gohome" />
    	                        	                        </span>
    	                        
    	                        <p class="exp">（可选，如果选中，则进入商品页面后还会再次点击店铺主页，这样访客记录可在淘宝后台实时反馈）</p>
    	                    </div>
    	                </div>
    	                -->
                        
                        <div class="control-group settings_code clearFix">
                            <label class="control-label essential">* 优先级</label>
                            <div class="controls">
    							<div class="layout-slider" style="margin-top:16px;">
    								<input id="Slider4" type="slider" name="priority" value="1" style="display: none;">
    								<span class="jslider jslider_round_plastic jslider-single jslider-limitless"><table><tbody><tr><td>
    								<div class="jslider-pointer jslider-pointer-to"><i></i></div><div class="jslider-label"><span>1,0</span></div>
    								<div class="jslider-label jslider-label-to"><span>3,0</span></div>
    								<div class="jslider-value jslider-value-to"><span></span></div></td></tr></tbody></table></span>
    								<input type="hidden" id="task1_priority" name="task1_priority" value="1">
    							</div>
    							
        						<p class="exp">（优先级高的任务会被优先处理，如果你希望自己发布的任务比别人更快完成，请调高你的优先级）</p>
                            </div>
                        </div>
                        
                        <div class="control-group mission_ip clearFix">
                            <label class="control-label">任务说明</label>
                            <div class="controls">
                                <label class="exp">
                                    <p>1、发布此任务，需要消耗相应的积分，不同的选项，消耗的积分不同。<br>
                                       2、系统会按照你的任务设置，每日冻结相应的积分，以确保你的账户积分余额够用。<br>
                                       3、提交成功后，强烈建议<a href="###################">下载客户端</a>进行<a href="http://shoujiliang.com/faq.doc">任务测试（点此链接看操作指导）</a>，可以大大提高任务的完成率。<br>
                                       4、有疑问请点击 <a href="http://shoujiliang.com/faq2.doc">常见问题</a>，如果没有找到你想要的答案，再到QQ群：384213812 里提问。</p>
                                </label>
                            </div>
                        </div>
                        
                        <div class="actions clearFix">
                        	<p style="margin-left:160px; margin-bottom:10px; font-size:14px; display:none;" id="task1_price"></p>
                            <a href="javascript:void(0);" style="margin-left:160px;" class="btn confirm task1_calculate_price" id="task1_calculate_price">计算积分</a>
                            <a href="javascript:void(0);" style="margin-left:160px; display:none;" class="btn confirm submit_new_mission" id="task1_post_btn">提交任务</a>
                            <span class="erro" style="display:none;" id="task1_error_msg">积分余额不足</span>
                        </div>
                            <script type="text/javascript">
                                $("#task1_calculate_price").click(function(){
                                    alert("计算积分 准备提交");
                                    $("form").submit();
                                });
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="dialog_root"></div>

</body></html>