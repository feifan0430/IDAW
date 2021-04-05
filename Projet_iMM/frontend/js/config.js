$(function () {
    var query = window.location.href.split("?");
    var id = query[1];
    var urlget = "../backend/config.php?" + id;
    var urld = "config.html?" + id;
    var urlj = "journal.html?" + id;
    var urla = "aliments.html?" + id;
    var urlp = "profil.html?" + id;
    $("#getid_d").attr("href",urld);
    $("#getid_j").attr("href",urlj);
    $("#getid_a").attr("href",urla);
    $("#getid_p").attr("href",urlp);
    //Update
    $('#btn_update').click(function () {
        $("#choisirDateinfo").modal()
    });
    $("#saveUpdate").on('click', function() {
        var choisirDatebegin = $("#choisirDatebegin").val()
        var choisirDateend = $("#choisirDateend").val()
        var data = {"date_begin":choisirDatebegin, "date_end":choisirDateend}
        var urlupdate =  "../backend/config.php?" + id;
        $.ajax({
            url:urlupdate,
            type: 'POST',
            async : false,
            dataType:'json',
            ContentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            success: function(result){
                alert("Réussir de choisir");
                document.getElementById("energie").innerText =result.energie;
                document.getElementById("glucide").innerText = result.glucide;
                document.getElementById("lipide").innerText = result.lipide;
                document.getElementById("proteine").innerText = result.proteine;
                document.getElementById("sel").innerText = result.sel;
                document.getElementById("sucre").innerText = result.sucre;
            },
            error:function(result){
                alert("Error");
            }
        })
    });
});
