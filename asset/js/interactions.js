$(document).ready(function(){
	//store the objects in vars
	var $btn_d = $("#btn_details");
	var $det_p = $("#details_panel");
	var $btn_hid = $("#btn_hide_details");
	//select the show details button
	$btn_d.click(function(){
		//upon click, hide the details button
		$(this).hide('fast');
		$det_p.show('fast'); //and show details panel
		$btn_hid.show('fast'); //show if hidden	
	});	
	//select the hide details button
	$btn_hid.click(function(){
		//upon click, hide button & panel
		$(this).hide('fast');
		$det_p.slideUp('fast');
		$btn_d.show('fast');
	});
	
});
