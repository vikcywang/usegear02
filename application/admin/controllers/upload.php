<?php
class Upload extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
	
		if(!isset($_SESSION['username']) && !isset($_SESSION['login_in'])){
			//重定向浏览器
			header("Location: ". base_url('login'));
			//确保重定向后，后续代码不会被执行
			exit;
		}
	}
	
	function upload($type = '') {
		/**
		 * *
		 * ckedit上传扩展
		 * 调用JS回调<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,$file,$message);</script>
		 * $fn=2,$file不为空，时为成功，$message是提示消息
		 * **
		 */
		$this->load->helper ( 'url' );
		
		$upload_path = $this->config->item('upload_path');
		$config ['upload_path'] = $upload_path . $type; //配置上传路径
		$config ['allowed_types'] = 'gif|jpg|png|jpeg'; //允许上传的文件类型
		$config ['max_size'] = '3000'; // 允许上传的文件大小
		//$config['encrypt_name']=TRUE; //上传文件随机重命名
		
		$this->load->library ( 'upload', $config ); //加载上传类，并初始化配置
		
		$fn = $this->input->get ( 'CKEditorFuncNum' ); //接收回调参数
		                                          
		//判断是否需要建立目录
		if (! is_dir ( $config ['upload_path'] )) {
			if (! mkdir ( $config ['upload_path'], 0777, TRUE )) {
				$message = '是否有权限追寻目录上传';
				$str = "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,\"\",'$message');</script>";
				exit ( $str );
			}
		}
		
		//判断是否上传成功
		if (! $this->upload->do_upload ( 'upload' )) {
			//做回调显示失败处理
			$message = '是否有权限上传';
			$str = "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,\"\",'$message');</script>";
			exit ( $str );
		} else {
			$message = '上传成功';
			$updata = $this->upload->data (); //返回上传文件的相关信息
			                               
			//这里手动处理重命名文件,原文件名+当前时间
			$rename = $updata ['raw_name'] . date ( "_Y_m_d_h" ) . $updata ['file_ext'];
			$renamepath = $updata ['file_path'] . $rename;
			
			//重命名文件
			if (! rename ( $updata ['full_path'], $renamepath )) {
				//做回调显示失败处理
				$message = '重命名失败';
				$str = "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,\"\",'$message');</script>";
				exit ( $str );
			}
			
			//如需要可以做文件信息写入数据库处理
			
			//$filename=base_url().'uploads/'.$rename;
			$filename = str_replace('/admin','',base_url()).str_replace('../','',$config ['upload_path']) . '/' . $rename;
			
			//回调
			$str = "<script type=\"text/javascript\">window.parent.CKEDITOR.tools.callFunction($fn,'$filename','$message');</script>"; //关键$filename这里记得加上''，不然会出错
			exit ( $str );
		}
	}
}
?>