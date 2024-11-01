<?php
 /*
 Plugin Name: Tu Vi Global
 Plugin URI: http://blog.casanova.vn/plugin-can-xuong-tinh-luong-doan-so-menh-tron-doi/
 Description: Cân xương tính lượng đoán số mệnh
 Version: 1.0
 Author: Nguyen Duc Manh
 Author URI: http://casanova.vn
 */

 require_once('func.php');

// enqueue and localise scripts
 wp_enqueue_style( 'casanova.vn', plugin_dir_url( __FILE__ ) . 'casanova.vn.css');
 wp_enqueue_script( 'my-ajax-handle', plugin_dir_url( __FILE__ ) . 'ajax.js', array( 'jquery' ) );
 wp_localize_script( 'my-ajax-handle', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
 // THE AJAX ADD ACTIONS
 add_action( 'wp_ajax_the_ajax_hook', 'the_action_function' );
 add_action( 'wp_ajax_nopriv_the_ajax_hook', 'the_action_function' ); // need this to serve non logged in users
 
 
 // THE FUNCTION
 function the_action_function(){
	 $fullname = trim($_POST['fullname']);
	 $gender = $_POST['gender'];
	 $dd	 = $_POST['day'];
	 $mm 	 = $_POST['month'];
	 $yy	 = $_POST['year'];
	 $giosinh	=	$_POST['giosinh'];
	 
	 $error	=	"";
	 
	 if(empty($fullname) || empty($dd)|| empty($mm) || empty($yy)){
	 	$error	.=	'<div class="csnv_error">Bạn vui lòng nhập đầy đủ họ tên và ngày, tháng, năm sinh</div>';
	 }
	 
	 if(empty($error)){
	 	$canxuong	=	canxuong($dd,$mm,$yy,$giosinh);
		
		echo '<div class="csnv_arrow">&darr;<br />KẾT QUẢ</div><div class="csnv_wraper">';
		echo '<div class="csnv_info">
			<h3>Thông tin</h3>
			Họ tên: <strong>'.$fullname.'</strong>
			<br />Sinh ngày: <strong><em>'.$dd.'/'.$mm.'/'.$yy.'</em></strong> dương lịch (tức ngày <strong><em>'.$canxuong['amlich'].'</em></strong> âm lịch) vào  <strong><em>'.convertGiosinh($giosinh).'</em></strong>
			<br />Can chi của bạn: <strong>'.$canxuong["canchi"].'</strong>
		
			</div>';
		
		echo '<div class="csnv_w"><h3>Lượng chỉ</h3>Bạn được <strong>'.$canxuong["w"].'</strong> lượng</div>';
		echo '<div class="csnv_poetry"><h3>Quẻ bài</h3>'.nl2br($canxuong["poetry"]).'</div>';
		echo '<div class="csnv_msg"><h3>Ý nghĩa</h3>'.$canxuong["message"].'</div>';
		echo '<div class="csnv_author">Tác giả: <b>CASANOVA</b></div>';
		echo "</div><!-- End csnv_wraper -->";
	 }
	 else{
	 	echo $error;
	 }
	 
	 die();
 }
 
 // ADD EG A FORM TO THE PAGE
 function ajax_canxuong(){
	 ob_start();
 ?>
 <div class="csnv_form">
 <form id="theForm">
     <p>Họ tên: <input id="fullname" name="fullname" type="text" class="csnv_text" /></p>
     <p>Giờ sinh: 
     <select name="giosinh" id="giosinh">
     	<option value="1">Giờ Tý (23h - 01h)</option>
        <option value="2">Giờ Sửu (01h - 03h)</option>
        <option value="3">Giờ Dần (03h - 05h)</option>
        <option value="4">Giờ Mẹo (05h - 07h)</option>
        <option value="5">Giờ Thìn (07h - 09h)</option>
        <option value="6">Giờ Tỵ (09h - 11h)</option>
        <option value="7">Giờ Ngọ (11h - 13h)</option>
        <option value="8">Giờ Mùi (13h - 15h)</option>
        <option value="9">Giờ Thân (15h - 17h)</option>
        <option value="10">Giờ Dậu (17h - 19h)</option>
        <option value="11">Giờ Tuất (19h - 21h)</option>
        <option value="12">Giờ Hợi (21h - 23h)</option>
     </select>
     </p>
     <p>Năm sinh
     	<select id="day" name="day">
        	<option value="">Ngày</option>
			<?php for($i=1;$i<=31;$i++):?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php endfor;?>
        </select>
        <select id="month" name="month">
        	<option value="">Tháng</option>
        	<?php for($j=1;$j<=12;$j++):?>
            <option value="<?php echo $j;?>"><?php echo $j;?></option>
			<?php endfor;?>
        </select>
        <select id="year" name="year">
        	<option value="">Năm</option>
        	<?php for($k=1900;$k<=intval(date("Y"));$k++):?>
            <option value="<?php echo $k;?>"><?php echo $k;?></option>
			<?php endfor;?>
        </select>
     </p>
     <input name="action" type="hidden" value="the_ajax_hook" />
     <input id="submit_button" class="csnv_button" value = "Xem kết quả" type="button" onClick="canxuong_tinhluong();" />
 </form>
 </div>
 <div id="response_area"></div>
 <?php
 	$output_string=ob_get_contents();;
	ob_end_clean();
	return $output_string;
 }
 add_shortcode("casanova_canxuong", "ajax_canxuong");
 add_filter('widget_text', 'do_shortcode');
 ?>