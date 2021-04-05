function login(){
    const name = document.getElementById('name').value;　　　　　　
    const password = document.getElementById('password').value;
    const user = {"name":name, "password":password};　　　　　　　　　　　　　　
    const url = "../backend/index.php";
    $.ajax({
        url: url,
        type: 'POST',
        async : false,
        dataType:'json',
        ContentType: "application/json; charset=utf-8",
        data: JSON.stringify(user),
        success: function(result){
            alert("Réussir de se connecter");
            window.location.href = "config.html?id=" + JSON.stringify(result);
        },
        error:function(result){
            alert("Login ou mot de pass n'est pas correct");
        }
    })
}