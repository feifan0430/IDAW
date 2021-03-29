<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        i Manger Mieux
    </title>
    <link rel="stylesheet" type="text/css" href="index.css" media="screen" />
</head>

<body> 
	<div id="title">
        <br/>
        <h1>IMT <i>i Manger Mieux</i></h1>
    </div>

    <div id="block">
        <form id="login_form" >
	        <table> 
                <tr>
		            <th>Compte : </th>
		            <td><input type="text" id="name"></td>
		        </tr> 
                <tr>
		            <th>Mot de passe : </th>
		            <td><input type="password" id="password"></td>
		        </tr> 
                <tr>
		            <th></th>
		            <td><input type="button" value="Se connecter.." onclick="login()" /></td>
		        </tr>
	        </table>
            <br/>
	        <b>Pas de Compte ? </b>
	        <a href="inscription.php"> S'inscrire </a>
        </form>
    </div>
</body>


<script type="text/javascript">
	function login(){

		const name = document.getElementById('name').value;　　　　　　
		const password = document.getElementById('password').value;
		const user = {"name":name, "password":password};　　　　　　　　　　　　　　
		const url = "../../backend/login.php";

		$.ajax({
			url: url,
			type: 'POST',
			async : false,
			dataType:'json',
			ContentType: "application/json; charset=utf-8",
			data: JSON.stringify(user),
			success: function(result){
				alert("Réussir de se connecter");
                window.location.href = "config.php?id=" + JSON.stringify(result);
			},
			error:function(result){
				alert("Login ou mot de pass n'est pas correct");
			}
		})
	}
</script>
</html>