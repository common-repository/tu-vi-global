function canxuong_tinhluong(){
	jQuery("#response_area").html("Loading...");	
	jQuery.post(
		the_ajax_script.ajaxurl, jQuery("#theForm").serialize()
		,
			function(response_content){
				jQuery("#response_area").html(response_content);
			}
		);
}