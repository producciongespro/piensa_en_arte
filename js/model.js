'use strict';

function Model () {

}

Model.prototype.conectFormAjax = function ( path, formData, mCallBack  ) {
    //console.log(formData);


    jQuery.ajax({
        url: path,
        type:'POST',
        dataType:'json',
        data: formData,
        beforeSend:function(){
            console.log("enviando");
        }
      })
      .done(function(response){
        console.log('done');        
        mCallBack(response);

      })
      .fail(function(resp){
        console.log('Problemas al enviar datos');
        console.log(resp.responseText);
        
      })
      .always(function(){
        //console.log("completed");
    });

}
