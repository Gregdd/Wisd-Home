<html>
<head>
	<meta charset="utf-8" />
    <title>Messagerie</title>
    <link rel="stylesheet" href="Messages_admin.css" />
    
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

<div id="txtHint"><b>Liste des messages</b></div>
<form>
<select name="statut" onchange="showUser(this.value)">
<option value="all">Afficher tous les messages</option>
<option value="Lu">Traités</option>
<option value="nonLu">Non traités</option>
</select>
</form>
<br />


</body>
</html>
