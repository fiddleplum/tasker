<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name='viewport' content='width=device-width, initial-scale=1, user-scalable=0'>
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css"/>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
<div id="header">
	<div id="title">Tasker</div>
	<button onclick="toggleNewTaskPanel();">New Task</button>
</div>
<div id="new_task"><form><input type="text"/><input type="submit" value=">"/></form></div>
<div id="content">
</div>
<script>
var new_task_on = false;
function toggleNewTaskPanel() {
	if(!new_task_on) $('#new_task').animate({'height': '32px'}, 100, 'swing');
	else $('#new_task').animate({'height': '0px'}, 100, 'swing');
	new_task_on = !new_task_on;
}
</script>
</body>
</html>