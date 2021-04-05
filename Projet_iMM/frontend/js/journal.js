$(function () {
    var query = window.location.href.split("?");
    var id = query[1];
    var url = "../backend/journal_read.php?" + id;
    var urld = "config.html?" + id;
    var urlj = "journal.html?" + id;
    var urla = "aliments.html?" + id;
    var urlp = "profil.html?" + id;
    
    $("#getid_d").attr("href",urld);
    $("#getid_j").attr("href",urlj);
    $("#getid_a").attr("href",urla);
    $("#getid_p").attr("href",urlp);
    
    var table = $('#myTableJ').DataTable({        
    "ajax":{
        url: url,	
        type:'GET',
    },
    columns:[
        {data:null},
        {data:"id"}, //**
        {data:"name_aliment"},
        {data:"date"},
        {data:"quantite"}
        ]
    });
    table.on('order.dt search.dt', function() {
        table.column(0, {
            search: 'applied',
            order: 'applied'
        }).nodes().each(function(cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();
    $('#myTableJ tbody').on('click', 'tr', function () {
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
        $("#addJournal").modal()
    });

    $("#addJournalsInfo").on('click', function() {
        if ($("#addJournalModal").find('input').val() !== '') {
            var journalNom = $("#journalNom").val()
            var journalDate = $("#journalDate").val()
            var journalQuantite = $("#journalQuantite").val()
            var data = {"name_aliment":journalNom, "date":journalDate, "quantite":journalQuantite};
            var urlpost = "../backend/journal_create.php?" + id;
            $.ajax({
                url: urlpost,
                type: 'POST',
                async : false,
                dataType:'json',
                ContentType: "application/json; charset=utf-8",
                data: JSON.stringify(data),
                success: function(result){
                    alert("Réussir d'ajouter");
                    window.location.href = "journal.html?" + id;
                },
                error:function(result){
                    alert("Error"+JSON.stringify(result));
                }
            })
        }else {
            alert("il faut remplir tous les champs");
        }
    })

    $("#cancelAdd").on('click', function() {
        console.log('cancelAdd');
        $("#addJournalModal").find('input').val('')
    })

    //Delete
    $('#btn_delete').click(function () {
        if (table.rows('.selected').data().length) {
            $("#deleteJournal").modal()
        }else {
            alert('Il faut choisir un article');
        }
    });

    $('#delete').click(function () {
        var data = table.rows(['.selected']).data()[0];
        data ={"id":data.id}; 
        var urldelete = "../backend/journal_delete.php?" + id;
        $.ajax({
            url: urldelete,
            type: 'POST',
            async : false,
            dataType:'json',
            ContentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            success: function(result){
                alert("Réussir de suprimer");
                window.location.href = "journal.html?" + id;
            },
            error:function(result){
                alert("Error"+JSON.stringify(result));
            }
        })
    });

    //Update
    $('#btn_update').click(function () {
        if (table.rows('.selected').data().length) {
            $("#updateJournalInfo").modal()
        }else {
            alert('Choisir un article');
        }
    });

    $("#saveUpdate").on('click', function() {
        var updateJournal = table.rows(['.selected']).data()[0];
        var updateJournalId = updateJournal.id;
        var updateJournalNom = $("#updateJournalNom").val()
        var updateJournalDate = $("#updateJournalDate").val()
        var updateJournalQuantite = $("#updateJournalQuantite").val()
        var data = {"id":updateJournalId, "name_aliment":updateJournalNom, "date":updateJournalDate, "quantite":updateJournalQuantite};
        var urlupdate =  "../backend/journal_update.php?" + id;
        $.ajax({
            url:urlupdate,
            type: 'POST',
            async : false,
            dataType:'json',
            ContentType: "application/json; charset=utf-8",
            data: JSON.stringify(data),
            success: function(result){
                alert("Réussir de mettre à jour");
                window.location.href = "journal.html?" + id;
            },
            error:function(result){
                alert("Error"+JSON.stringify(result));
            }
        })
    })

    $("#cancelUpdate").click(function() {
        console.log('cancelAdd');
        $("#updateJournalModal").find('input').val('')
    })
});