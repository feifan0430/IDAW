$(function () {
    var query = window.location.href.split("?");
    var id = query[1];
    var urlget = "../backend/profil_read.php?" + id;
    var urld = "config.html?" + id;
    var urlj = "journal.html?" + id;
    var urla = "aliments.html?" + id;
    var urlp = "profil.html?" + id;
    $("#getid_d").attr("href",urld);
    $("#getid_j").attr("href",urlj);
    $("#getid_a").attr("href",urla);
    $("#getid_p").attr("href",urlp);

    $.ajax({
        url: urlget, 
        type: 'GET', 
        success: function(result){
            document.getElementById("NOM_USER").innerText =result.name;
            document.getElementById("age").innerText = result.age;
            document.getElementById("sexe").innerText = result.sexe;
            document.getElementById("sport").innerText = result.sport;
        },
    });

    //Update
    $('#btn_update').click(function () {
        $("#updateprofilInfo").modal()
    });

    $("#saveUpdate").on('click', function() {
        var updateprofilAge = $("#updateprofilAge").val()
        var updateprofilSexe = $("#updateprofilSexe").val()
        var updateprofilSport = $("#updateprofilSport").val()
        var data = {"age":updateprofilAge, "sexe":updateprofilSexe, "sport":updateprofilSport}
        var urlupdate =  "../backend/profil_update.php?" + id;
        $.ajax({
            url:urlupdate,
            type: 'POST',
            async : false,
            dataType:'json',
            ContentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            success: function(result){
                alert("Réussir de mettre à jour");
                window.location.href = "profil.html?" + id;
            },
            error:function(result){
                alert("Error"+JSON.stringify(result));
            }
        })
    });
});