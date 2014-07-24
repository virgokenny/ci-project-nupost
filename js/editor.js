
var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
	'lineNumbers': true
});

$('.CodeMirror').keyup(function () {
	$('#preview').load('../../app/preview', {
		'rst': editor.getValue()
	});
}).keyup(); // Trigger the event right away when loaded.

