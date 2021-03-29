<!DOCTYPE html>
<html lang="fr">
<head>
	<title>IMT i Manger Mieux</title>
    <link rel="stylesheet" type="text/css" href="config.css" media="screen" />
</head>

<body>
    <div id="title" align="center">
        <br/>
        <h1>IMT <i>i Manger Mieux</i></h1>
    </div>

    <div id="navigation" align="center">
        <ul>
            <li><a id="getid_config" href="config.php">Config</a></li>
            <li><a id="getid_journal" href="journal.php">Journal</a></li>
            <li><a id="getid_aliments" href="aliments.php">Aliments</a></li>
            <li><a id="getid_profil" href="profil.php">Profil</a></li>
        </ul>
    </div>

    <div>
	    <table id="myTable" align="center">
			<thead>
				<tr>
                    <th>Energie(kJ)</th>
                    <td id="energie">Choisir la periode</td>
                </tr>
				<tr>
                    <th>Glucide</th>
                    <td id="glucide">Choisir la periode</td></tr>
				<tr>
                    <th>Lipide</th><td id="lipide">Choisir la periode</td>
                </tr>
                <tr>
                    <th>Proteine</th>
                    <td id="proteine">Choisir la periode</td></tr>
                <tr>
                    <th>Sel</th>
                    <td id="sel">Choisir la periode</td>
                </tr>
                <tr>
                    <th>Sucre</th>
                    <td id="sucre">Choisir la periode</td>
                </tr>
			</thead>
		</table>	
        <button id="btn_update" type="button" class="btn bg-info">
            Choisir   
        </button>
    </div>
</body>
</html>

<script>
	$(function () {
		var query = window.location.href.split("?");
		var id = query[1];
		//var urlget = ".php?" + id;
        var urlc = "config.php?" + id;
        var urlj = "journal.php?" + id;
        var urla = "aliments.php?" + id;
        var urlp = "profil.php?" + id;

        $("#getid_config").attr("href",urld);
        $("#getid_journal").attr("href",urlj);
        $("#getid_aliments").attr("href",urla);
        $("#getid_profil").attr("href",urlp);

      	$.ajax({
			// TODO
		})
	});
</script>