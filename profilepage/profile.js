const getId = (id) => {
    console.log(id);

    $.ajax({
        type: "POST",
        url : "../ContactPage/Contact.php",
        data: {id:id},
        success:function(){
            window.location.href ="../ContactPage/Contact.php";
        }
    })
}