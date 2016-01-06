
var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
	'lineNumbers': true,
    	'indentUnit': 3
});

$('.CodeMirror').keyup(function () {
	$('#preview').load('../../app/preview', {
		'rst': editor.getValue()
	});
}).keyup(); // Trigger the event right away when loaded.

$('#save-form').submit(function () {
	$.post($(this).attr('action'), {'document': editor.getValue()}, function () {
		$('#saved').show().delay(400).fadeOut(600);
	});
	return false;
});

