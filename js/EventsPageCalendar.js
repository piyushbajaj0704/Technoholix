(function($) {
	$(function () {
		if(useQtips){
			applyStyles();
		}
		
		$("#calendar-nav a").livequery("click", function() {
			$("#calendar-box").load($(this).text("Loading...").attr("href"), null, function(){
				if(useQtips){
					applyStyles();
				}
			});
			return false;
		});
		
		function applyStyles()
		{
			jQuery.each(jQuery("table.calendar-table .has-event a"), function(i, el) {
				
				var title = jQuery(this).next("ul").html();
				
				jQuery(this).qtip({
									content: title,
									show: {
										event: "mouseover"
									},
									hide: {
										event: "mouseout"
									},
									style: {
										classes: "qtip-bootstrap"
									},
									position: {
										at: "right center",
										my: "bottom left"
									}
								}
				);
			});
		}
	})
})(jQuery);