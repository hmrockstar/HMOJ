$(document).ready(function(){
	//code here...
	var code = $(".codemirror-textarea");
	var editor = CodeMirror.fromTextArea(code, {
		lineNumbers : true,
		styleActiveLine: true,
    	matchBrackets: true,
    	theme : 'ambiance'    	
	});
});
