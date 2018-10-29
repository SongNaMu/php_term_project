<!doctype html>
<html>
<head>
<title> tui editor</title>
<script src="./tui/bower_components/jquery/dist/jquery.js"></script>
<script src='./tui/bower_components/markdown-it/dist/markdown-it.js'></script>
<script src="./tui/bower_components/to-mark/dist/to-mark.js"></script>
<script src="./tui/bower_components/tui-code-snippet/dist/tui-code-snippet.js"></script>
<script src="./tui/bower_components/codemirror/lib/codemirror.js"></script>
<script src="./tui/bower_components/highlightjs/highlight.pack.js"></script>
<script src="./tui/bower_components/squire-rte/build/squire-raw.js"></script>
<script src="./tui/bower_components/tui-editor/dist/tui-editor-Editor.js"></script>
<link rel="stylesheet" href="./tui/bower_components/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="./tui/bower_components/highlightjs/styles/github.css">
<link rel="stylesheet" href="./tui/bower_components/tui-editor/dist/tui-editor.css">
<link rel="stylesheet" href="./tui/bower_components/tui-editor/dist/tui-editor-contents.css">
<head>
<body>
<h1>tui</h1>
<div id="editSection"</div>

<script>
	var editor = new tui.Editor({
		el: document.querySelector('#editSection'),
		initialEditType: 'markdown',
		previewStyle: 'vertical',
		height: '300px'
	});
</script>

</body>
</html>
