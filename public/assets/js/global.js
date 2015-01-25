// Required for AJAX POST call

$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-Token': $('meta[name="_token"]').attr('content')
		}
	});
});

function DisableAddItemToolFormButton(bool) {
	if ($('.btn').length > 0) {
		$('.btn').attr('disabled', bool);
	}
	return false;
}