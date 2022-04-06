(function(){

	//accordian menus
	var $allTitles = $('#th-accordian > dt');

	$('#th-accordian > dt').click(function(e) {
		var $currentTarget = $(e.currentTarget);
		if (!$currentTarget.hasClass('is-active')) {
			$allTitles.removeClass('is-active').next().slideUp();
			$currentTarget.addClass('is-active').next().slideDown();
		} else {
			$allTitles.removeClass('is-active').next().slideUp();
		}
	});
  
//     $('.js-mobile-nav-toggle').click(function() {
//       alert('mobile-nav');
//     };
	
})();
