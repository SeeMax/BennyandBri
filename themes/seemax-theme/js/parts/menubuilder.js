$(function menuBuilder() {

	$("section").each(function() {

		if (screen.width >= 1025){
    	var $h2 = $(this).find('text');
		} else {
			var $h2 = $(this).find('h2');
		}

		if ($h2.length) {
			var $headline = $h2.html().toLowerCase();
			var $trimmed = $headline.replace(/\s/g, "");
			// console.log($trimmed);
			var $builtLink = '<li><a class="c-block-fill" href="#'+ $trimmed +'"></a>'+ $headline +'</a></li>';
			$('.mainNav ul').append($builtLink);
			$($h2).attr('id', $trimmed);
		}
  });

});
