$(document).ready(function() {

	$('#login_form').unbind('submit').bind('submit',  function() {
		/* Act on the event */
	    var form=$(this);
	    var url=form.attr('action');
	    var type=form.attr('method');
	    $.ajax({
	    	url:url,
	    	type:type,
	    	data:form.serialize(),
	    	dataType:'json',
	    	success:function(response){
	    		if(response.success == true){
                     window.location=response.message;
	    		}
	    		else{

	    			if(response.message instanceof Object){

	    				 $.each(response.message, function(index, val) {

	    				 	 /* iterate through array or object */
	    				 	 var key=$('#' +index);
	    				 	 key.closest('.wrap-input100')
	    				 	 .removeClass('hass-error')
	    				 	 .removeClass('hass-success')
	    				 	 .addClass(val.length > 0 ? 'hass-error' : 'hass-success')
	    				 	 .find('.text-danger').remove();
	    				 	 key.after(val);

	    				 });

	    			}

	    			else{

	    			}

	    		}
	    	}
	    })
	     return false;
	});
});