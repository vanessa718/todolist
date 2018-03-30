(function() {
	var timer = 500;

	/* Toggle forms */
	$('[aria-controls]').click(function() {
		/* Search HTML bloc with an id equal to the value of my button (this) */
		var $bloc = $('#' + $(this).attr("aria-controls"));

		$bloc.slideToggle(timer, function() {
			if($bloc.is(':visible')) {
				$bloc.attr("aria-expanded","true");
			} else {
				$bloc.attr("aria-expanded","false");
			}
		});
	});

	/* Filter category */
	$('#cat-list a').click(function() {
		var $cat = $(this),
			catId = $cat.data('cat');

		if(!$cat.hasClass('active')) {
			/* Change active category */
			$('#cat-list .active').removeClass('active');
			$cat.addClass('active');

			/* Toggle tasks */
			if(catId == "*") {
				$('#tasks li').show();
			} else {
				$('#tasks li').each(function() {
					var $task = $(this);

					if($task.data('cat') == catId) {
						$task.show();
					} else {
						$task.hide();
					}
				});
			}
		}

		return false;
	});
})();	


