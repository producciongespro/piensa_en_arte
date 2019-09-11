"use strict";
const m = new Model(), v = new V_sign_up;
var infoUser;
$(document).ready(function () {
    handlerEvents();
    $("#chkTerminos").click(function (e) {
        //e.preventDefault();
        $("#btnSignup").attr("disabled", false);
    });

});



// function loadInstances() {
//     //console.log(m.getDataSet());
//     v.instances(m.getDataSet(), $("#gorupSelectorInstance") );
//
//
// }


function handlerEvents() {
    console.log("eventos listos");

    $("#btnSignup").click(function (e) {
        e.preventDefault();
        $("#shadowAjax").removeClass("invisible");
        m.signUp($("#txtNombre").val(), $("#txtApellido1").val(), $("#txtApellido2").val(), $("#txtEmail").val(), $("#txtPass1").val(),  $("#txtPass1").val(),  function () {
            $("#shadowAjax").addClass("invisible");
          } );
    });



}
