$(document).ready(function(){
     var table = $('#users').DataTable();
    $('.submit').on('click', function(e) {
			e.preventDefault();
			var params = {};
			$('.f-input').each(function() {
				var i = $(this).data('col-index');
				if (params[i]) {
					params[i] += '|' + $(this).val();
				}
				else {
					params[i] = $(this).val();
				}
			});
			$.each(params, function(i, val) {
				// apply search params to datatable
				table.column(i).search(val ? val : '', false, false);
			});
			table.draw();
		});
});
