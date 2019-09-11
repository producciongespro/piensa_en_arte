"use strict";

var m = new Model ();

$(document).ready(function () {
    eClick();
    addEventPlayMedia ();
});



jQuery(document).on('submit','#frmLogin',function(event){
    event.preventDefault();
    var formData = $(this).serialize();
    console.log("Submnit");

    $("#shadowAjax").removeClass("invisible");

    m.conectFormAjax("server/login.php", formData, function (resp) {
        $("#shadowAjax").addClass("invisible");
        redirectUser(resp);
      } );



});


function redirectUser(resp) {
    console.log("metodo dentro de callback");
    console.log(resp.error);


        if (resp.error==false ) {
            console.log("Redireccionando");
            sessionStorage.setItem("usuario", resp.nombre);
            window.location.assign("./contenido.php");
        } else {
            console.log(resp);
            alertify
                    .alert("Piensa en Arte", "Usuario o contraseña incorrectos.", function(){
            console.log("ok");
            document.getElementById("frmLogin").reset();
            });
        }

}


function eClick(params) {
    $("#lnkTerminos").click(function (e) {
        e.preventDefault();
        //alert("dsfsd");
        $("#mdlTerminos").modal();
    });

    // $("#chkTerminos").click(function (e) {
    //     //e.preventDefault();
    //     $("#btnSignup").attr("disabled", false);
    // });

    $("#btnCrearCuenta").click(function (e) {
        e.preventDefault();
        $("#mdlTerminos").modal('hide');
        window.location.assign("./server/sign_up/index.html");
    });

}

function addEventPlayMedia () {
	$(".img-thumbnail").click(function (){

		//Crea el objeto audio lo renderiza y abre el modal

			var pathMedio =  $(this).attr("path"),
			typeMedio = pathMedio.slice(-3);


			if (typeMedio=="mp3") {
				var tmp = $("<audio id='currentMedio' preload='true' autoplay='true' controls></audio>");
				$(tmp).attr("src", pathMedio);

				$(contenedorPlayer).css("height", "");

				$("#contenedorPlayer").html(tmp);
			};

			if (typeMedio=="mp4") {
				var tmp = $("<video id='currentMedio' preload='true' autoplay='true' controls></video>");
				$(tmp).attr("src", pathMedio);

				$(contenedorPlayer).css("height", "");

				$("#contenedorPlayer").html(tmp);
			};

			if (typeMedio=="pdf") {
				var tmp = $("<embed id='currentMedio' src='"+ pathMedio +"' type='application/pdf' width='100%' height='100%'></embed>");
				$(contenedorPlayer).css("height", "420px");
				$("#contenedorPlayer").html(tmp);
			};


			$("#modalPlayer").modal();


			$("#modalPlayer").on('hide.bs.modal', function () {
					//Detiene el medio actual
					if (typeMedio=="mp3" || typeMedio=="mp4") {
						document.getElementById("currentMedio").pause();
					};
					typeMedio="";

					//Limpia el contenedor del medio
					//$("#contenedorPlayer").empty();
    	});
	})
}
