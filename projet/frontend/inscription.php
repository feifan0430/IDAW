<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        i Manger Mieux - inscription
    </title>
    <link rel="stylesheet" type="text/css" href="inscription.css" media="screen" />
</head>

<body> 
    <div id="title">
        <br/>
        <h1>IMT <i>i Manger Mieux</i></h1>
    </div>

    <div id="block">
        <form id="inscription_form" >
	        <table> 
                <tr>
		            <th>Compte : </th>
		            <td><label><input type="text" id="name"></label></td>
		        </tr> 
                <tr>
		            <th>Mot de passe : </th>
		            <td><label><input type="password" id="password"></label></td>
		        </tr> 
                <tr>
		            <th>Age : </th>
		            <td>
                        <label>
			                <select id="age">
				                <option value="NULL">**Sélectionner**</option>
				                <option value="40-">40-</option>
  				                <option value="40-60">40-60</option>
  				                <option value="60+">60+</option>
  			                </select>
			            </label>
		            </td>
		        </tr>
                <tr>
		            <th>Sexe : </th>
		            <td>
			            <label>
				            <select id="sexe">
                                <option value="NULL">**Sélectionner**</option>
					            <option value="Male">Homme</option>
					            <option value="Female">Femme</option>
				            </select>
			            </label>
		            </td>
		        </tr> 
                <tr>
		            <th>Niveau sportive : </th>
		            <td>
                        <label>
			                <select id="sport">
                                <option value="NULL">**Sélectionner**</option>
			                    <option value="rare">bas</option>
 			                    <option value="moyen">moyen</option>
  			                    <option value="souvent">élevé</option>
  		                    </select>
		                </label>
		            </td>
		            <th></th>
		        </tr>
                <tr>
                    <th></th>
                    <td><input type="button" value="submit" onclick="inscrire()"/></td>
                </tr>
	        </table>
        </form>
    </div>
</body>

<script type="text/javascript">
	function inscrire(){

		const name = document.getElementById('name').value;　　　　　　
		const password = document.getElementById('password').value;
		const age = document.getElementById('age').value;
		const sexe =  document.getElementById('sexe').value;
		const sport = document.getElementById('sport').value;
		const data = {"name":name, "password":password, "age":age, "sexe":sexe, "sport":sport};　　　　　　　　　　　　　　
		const url = "../../backend/inscrire.php";

		$.ajax({
			url: url,
			type: 'POST',
			async : false,
			dataType : 'json',
			ContentType: "application/json; charset=utf-8",
			data: JSON.stringify(data),
			success: function(result){
				alert("Réussir de s'inscrire");
				window.location.href = "login.html";
			},
			error:function(result){
				alert("Error"+JSON.stringify(result));
			}
		})
	}
</script>
</html>