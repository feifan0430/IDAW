function inscrire(){
    const name = document.getElementById('name').value;　　　　　　
    const password = document.getElementById('password').value;
    const age = document.getElementById('age').value;
    const sexe =  document.getElementById('sexe').value;
    const sport = document.getElementById('sport').value;
    const data = {"name":name, "password":password, "age":age, "sexe":sexe, "sport":sport};　　　　　　　　　　　　　　
    const url = "../backend/inscrit.php";
    $.ajax({
        url: url,
        type: 'POST',
        async : false,
        dataType : 'json',
        ContentType: "application/json; charset=utf-8",
        data: JSON.stringify(data),
        success: function(result){
            alert("Réussir de s'inscrire");
            window.location.href = "index.html";
        },
        error:function(result){
            alert("Error"+JSON.stringify(result));
        }
    })
}