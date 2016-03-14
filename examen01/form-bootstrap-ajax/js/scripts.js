/*
$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});
*/

jQuery(document).ready(function() {
     
    /*
        Fullscreen background
    */
    $.backstretch("img/coding-924920.jpg");
    $.backstretch("resize");
});

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var telefono = $("#telefono").val();
    var telefono2 = $("#telefono2").val();
    var estado = $("#estado").val();
    var seguro = $("#seguro").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        url: "php/proceso.php",
        data: "name=" + name + "&telefono=" + telefono + "&telefono2=" + telefono2+ "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}
function formSuccess(){
    $("#contactForm")[0].reset();
	submitMSG(true, "Mensaje enviado!")
}

function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
        var msgClasses;
    if(valid){
        msgClasses = "h3 text-center tada animated text-success";
    } else {
        msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
