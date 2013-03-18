$("#sub").click( function() {
 $.post( $("#dirSubmit").attr("action"), 
         $("#dirSubmit :input").serializeArray(), 
         function(info){ $("#result").html(info); 
  });
});

$("#dirSubmit").submit( function() {
  return false;	
});
function clearInput() {
	$("#dirSubmit :input").each( function() {
	   $(this).val('');
	});
}