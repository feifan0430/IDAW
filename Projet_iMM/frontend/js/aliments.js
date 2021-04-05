$(function () {
    var query = window.location.href.split("?");
    var id = query[1];//id=1 string
    var urlget = "../backend/aliments_read.php?" + id;//"" string
    var urld = "config.html?" + id;
    var urlj = "journal.html?" + id;
    var urla = "aliments.html?" + id;
    var urlp = "profil.html?" + id;
    $("#getid_d").attr("href",urld);
    $("#getid_j").attr("href",urlj);
    $("#getid_a").attr("href",urla);
    $("#getid_p").attr("href",urlp);
    var table = $('#myTable').DataTable({
        "ajax":{
            url:urlget,
            type:'GET',
        },
        columns:[
            {data:null},
            {data:"id"},
            {data:"name"},
            {data:"categorie"},
            {data:"energie"},
            {data:"glucide"},
            {data:"lipide"},
            {data:"proteine"},
            {data:"sel"},
            {data:"sucre"}
        ]
    });
    //order
    table.on('order.dt search.dt', function() {
        table.column(0, {
            search: 'applied',
            order: 'applied'
        }).nodes().each(function(cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();

    $('#myTable tbody').on('click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
             $(this).removeClass('selected');
        }else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    //Add
    $("#btn_add").click(function(){
        console.log('add');
        $("#addFood").modal()
    });

    $("#addFoodsInfo").on('click', function() {
        if ($("#addFoodModal").find('input').val() !== '') {
        var foodName = $("#foodName").val()
        var foodCategorie = $("#foodCategorie").val()
        var foodEnergie = $("#foodEnergie").val()
        var foodGlucide = $("#foodGlucide").val()
        var foodLipide = $("#foodLipide").val()
        var foodProteine = $("#foodProteine").val()
        var foodSel = $("#foodSel").val()
        var foodSucre = $("#foodSucre").val()
        var data = {"name":foodName, "categorie":foodCategorie, "energie":foodEnergie, "glucide":foodGlucide, "lipide":foodLipide, "proteine": foodProteine, "sel":foodSel, "sucre":foodSucre};
        var urlpost = "../backend/aliments_create.php?" + id;
        $.ajax({
            url: urlpost,
            type: 'POST',
            async : false,
            dataType:'json',
            ContentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            success: function(result){
                alert("Réussir d'ajouter");
                window.location.href = "aliments.html?" + id;
            },
            error:function(result){
                alert("Error"+JSON.stringify(result));
            }
        })
        }else{
            alert("il faut remplir tous les champs");
        }
    })
    $("#cancelAdd").on('click', function() {
        console.log('cancelAdd');
        $("#addFoodModal").find('input').val('')
    })

    //Delete
    $('#btn_delete').click(function () {
        if (table.rows('.selected').data().length) {
            $("#deleteFood").modal()
        } else {
            alert('Il faut choisir un article');
        }
    });
    $('#delete').click(function () {
        var data = table.rows(['.selected']).data()[0];
        data ={"id":data.id}; 
        var urldelete = "../backend/aliments_delete.php?" + id;
            $.ajax({
            url: urldelete,
            type: 'POST',
            async : false,
            dataType:'json',
            ContentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            success: function(result){
                alert("Réussir de suprimer");
                window.location.href = "aliments.html?"+ id;
            },
            error:function(result){
                alert("Error"+JSON.stringify(result));
            }
        })
    });

    //Update
    $('#btn_update').click(function () {
    if (table.rows('.selected').data().length) {
        $("#updateFoodInfo").modal()
    } else {
        alert('Choisir un article');
    }
    });

    $("#saveUpdate").on('click', function() {
        var updateFood = table.rows(['.selected']).data()[0];
        var updateFoodId = updateFood.id;
        var updateFoodName = $("#updateFoodName").val()
        var updateFoodCategorie = $("#updateFoodCategorie").val()
        var updateFoodEnergie = $("#updateFoodEnergie").val()
        var updateFoodGlucide = $("#updateFoodGlucide").val()
        var updateFoodLipide= $("#updateFoodLipide").val()
        var updateFoodProteine = $("#updateFoodProteine").val()
        var updateFoodSel = $("#updateFoodSel").val()
        var updateFoodSucre = $("#updateFoodSucre").val();
        var data = {"id":updateFoodId, "name":updateFoodName, "categorie":updateFoodCategorie, "energie":updateFoodEnergie, "glucide":updateFoodGlucide, "lipide":updateFoodLipide, "proteine": updateFoodProteine, "sel":updateFoodSel, "sucre":updateFoodSucre};
        var urlupdate = "../backend/aliments_update.php?" + id;  
        $.ajax({
            url: urlupdate,
            type: 'POST',
            async : false,
            dataType:'json',
            ContentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            success: function(result){
                alert("Réussir de mettre à jour");
                window.location.href = "aliments.html?" + id;
            },
            error:function(result){
                alert("Error"+JSON.stringify(result));
            }
        })
    })
    $("#cancelUpdate").click(function() {
        console.log('cancelAdd');
        $("#updateFoodModal").find('input').val('')
    })
});