$(function menuBuilder() {

	$("section").each(function() {

		var thisHeadline = $(this).find('h2');

		if (thisHeadline.length) {
			var $headline = thisHeadline.html().toLowerCase();
			var $trimmed = $headline.replace(/\s/g, "");
			// console.log($trimmed);
			var $builtLink = '<li><a class="c-block-fill" href="#'+ $trimmed +'"></a>'+ $headline +'</a></li>';
			$('.mainNav ul').append($builtLink);
			$(thisHeadline).attr('id', $trimmed);
		}
  });

});
