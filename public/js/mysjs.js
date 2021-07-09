$(function() {
	$('#Select1').on('change', onSelectUser);
});

function onSelectUser(){
	var user_id = $(this).val();

	if(!user_id)
		$('#Select2').html('<option value="">seleccione el programa</option>');


	$.get('/api/usuarios/'+user_id+'/programas', function(data) {
		var html_select = '<option value="Todas">Todas</option>';
		for (var i=0; i<data.length; ++i)
			html_select +='<option value="'+data[i].id_A+'">'+data[i].Asignatura+'</option>';
		$('#Select2').html(html_select);
	});
}
