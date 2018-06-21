<html>
<head>
<script>
function showUser(str)
{
	if (str == "")
	{
		document.getElementById("txtHint").innerHTML = "";
		return;
	}
	if (window.XMLHttpRequest) {
		xmlhttp= new XMLHttpRequest();
	} else {
		if (window.ActiveXObject)
			try {
				xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				return NULL;
			}
		}
	}
	
	xmlhttp.onreadystatechange = function ()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "Messages_admin.php?q=" + str, true);
	xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select name="statut" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="1">Lus</option>
<option value="2">Non lus</option>
</select>
</form>
<br />
<div id="txtHint"><b>Liste des messages</b></div>

</body>
</html>
