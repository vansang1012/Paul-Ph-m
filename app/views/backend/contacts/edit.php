<div id="cms-tab">	<p class="title">Hệ thống quản lý liên hệ</p>	<ul class="main">		<li class="main"><a href="<?php echo CMS_BACKEND.'/contacts/index'.CMS_SUFFIX;?>" class="main">Quản lý liên hệ</a></li>		<li class="main"><a href="<?php echo CMS_BACKEND.'/contacts/add'.CMS_SUFFIX;?>" class="main">Thêm liên hệ mới</a></li>	</ul>	<div class="cms-clear"></div></div><!-- #cms-tab --><div id="cms-container">	<div id="cms-form">		<?php		$data['post_data'] = isset($post_data)?$post_data:NULL;		$data['button_action'] = '<input type="submit" name="add" value="Thay đổi thông tin liên hệ" class="button" />';		$this->load->view('backend/contacts/_form', $data);		?>		<div class="cms-clear"></div>	</div><!-- #cms-form -->	<div class="cms-clear"></div></div><!-- #cms-container -->