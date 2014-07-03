<<!DOCTYPE html>
<html>
<head>
	<script language="javascript">
	var img=new Array(".jpg","2.jpg","3.jpg");
var count=0;
function start()
{
	if(count==img.length)
	{
	count=0;
	}
	document.getElementById("abc").src=img[count];
	count++;
	setTimeout("start()",1000);
}
</script>
</head>
<body onload="start()">
<img id="abc">
</body>
</html>