<?php
/**
 * 用户后台登录注册等操作
 */
class UserAction extends Action{
	public function index(){
		$_SESSION["userid"]=null;
		$_SESSION["username"]=null;
		
		$this->display("User/index");
	}

	/**
	 * 登录验证会员信息
	 * @return [type] [description]
	 */
	public function login(){

		$email=$_REQUEST["login_email"];
		$password=md5($_REQUEST["login_password"]);


		//得出邮件和密码进行验证
		$db=M("account");
		$where=array("email"=>$email);
		$data=$db->where($where)->find();
		if (!empty($data)){
			if ($data["password"]==$password) {
				// $this->success('登录成功');
				//生成session
				$_SESSION["userid"]=$data["accountid"];
				$_SESSION["username"]=$data["email"];

				//直接调入首页控制器
				$this->display("Index/index");
				return;
			}
			else{
				$this->error('登录失败');
			}
		}
		else{
			$this->error('登录失败');
		}
	}

	/**
	 * 用户退出
	 */
	public function toexit(){
		
		$this->display("User/index");
	}

	/**
	 * 用户注册
	 * @return [type] [description]
	 */
	public function register(){
		$register_password1=$_REQUEST['register_password1'];
		$register_password2=$_REQUEST['register_password2'];
		$register_email=$_REQUEST['register_email'];

		if ($register_password1!=$register_password2) {
			$this->error('重复密码输入错误......');
		}


		$db=M("account");
		$data['email']=$register_email;
		$data['password']=md5($register_password1);
		//先去找这个人有没有
		$tmp=$db->where(array("email"=>$register_email))->find();
		if (!empty($tmp)) {
			$this->error('此账号已被注册');
			return;
		}

		$re=$db->add($data);

		import('ORG.Net.Email');//导入本类
		$data['mailto'] = $register_email; //收件人
		$data['subject'] =	'淘点通'; //邮件标题
		$data['body'] =	'欢迎注册淘点通.'; //邮件正文内容
		$mail = new Email();
		if($mail->send($data))
		{
		//邮件发送成功...
			if ($re) {
				$this->success('注册成功');
			}
			else{
				$this->error("注册失败");
			}
		}
		else
		{
		//邮件发送失败...
		}

		// p($re);
		// die();
		
		
		//注册功能完善
	}

	/**
	 * 找回密码功能
	 * @return [type] [description]
	 */
	public function forgetpwd(){
		import('ORG.Net.Email');//导入本类
		$data['mailto'] = $_REQUEST['email']; //收件人
		$data['subject'] =	'淘点通'; //邮件标题
		$data['body'] =	'找回密码:<a href="'.U('User/resetpwd').'?code='.md5($_REQUEST['email']).'">点击找回</a>'; //邮件正文内容
		$mail = new Email();
		if($mail->send($data)){
			//邮件发送成功...
			
		}
	}

	/**
	 * 重置密码输出模版
	 */
	public function resetpwd(){
		$this->assign('email',$_REQUEST['email']);
		$this->display();
	}

	/**
	 * 开始进行重置密码
	 * @return [type] [description]
	 */
	public function resetpwdup(){
		$data['email']=$_REQUEST['email'];
		$where=$data;
		$data['password']=$_REQUEST['password'];

		$db=M("account");
		$re=$db->where($where)->save($data);
		if ($re) {
			$this->success('修改成功',U('Index/index'));
		}
		else{
			$this->error("修改失败");
		}
	}
}
?>