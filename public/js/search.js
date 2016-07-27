$(document).ready(function(){
	var timer;
	function up(){
		timer=setTimeout(function(){
			var keyword=$('#keyword').val();
			if(keyword.length>1){
			$.post('http://larajob.app/search',{keyword:keyword},function(match){
			$('#result_box').html(match);
		    });
			}
		},500);
	}

	function down(){
		clearTimeout(timer);

	}

	$('#keyword').keyup(up);
	$('#keyword').keydown(down);
	// $('#keyword').submit(up);


	
});