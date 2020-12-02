$(document).ready(function  () {
	$('.search').keyup(function  () {
		var search = $('.search').val();
		var length = search.length;
		if (length >= 3) {
			$('.searchDropdown').css("display","block");
			// $('.searchDropdown').html(search);
			$.ajax({
				type:"post",
				url:"search.php",
				data:"query="+search,
				success:function  (data) {
					$('.searchDropdown').html(data);
				}
			});
		} else{
			$('.searchDropdown').css("display","none");
		}
	});
});