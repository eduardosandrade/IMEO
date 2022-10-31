$(document).ready(function() {

$('.minhaTabela').click(function(){

	if(confirm('Tem certeza USUARIO?')){

			$('#minhaDiv').css('background','#000000');

	}

	
});



 
$("#ramsizegb").keyup(function() {
      $("#ramsizegb").val(this.value.match(/[0-9]*/));
 });
 
$("#armazenamento").keyup(function() {
      $("#armazenamento").val(this.value.match(/[0-9]*/));
 });

$('#usuario').change(function (){
    $('#idusuario').val(+$(this).val()+1);
 });

$('#so').change(function (){
    $('#idso').val(+$(this).val()+1);
 });
 
 $('#xmlfile').click(function(){
	
	$('#xmlfile').val($(this).val());
});

$('#btn_confirma_atualizar').click(function(){
	alert("atualizado com sucesso!")
	
});

$('#btn_confirma_adicionar').click(function(){
	alert("adicionar com sucesso!")
	
});


$('#minhaTabela tr').click(function(e){
	
	e.preventDefault;
	var local = $(location).attr('href');
	var id = $(this).find('td').eq(0).text();
	
	
	
});


$('.btn_edit').click(function(){
	
	var local = $(location).attr('href');
	var id = $(this).attr("id");
	document.location = local+'/'+id+'/atualizar';
	
});

$('.btn_delete').click(function(){
	
	var local = $(location).attr('href');
	var id = $(this).attr("id");
	
	if (confirm('Tem certeza que quer realmente deletar?')) {
		alert('deletado com sucesso!!!!');
        document.location = local+'/'+id+'/deletar';
    }
		
});

$('.btn_info').click(function(){
	
	var local = $(location).attr('href');
	var id = $(this).attr("id");
	document.location = local+'/'+id+'/info';
	
});

$('#tabelaTeste').click(function() {
	
	
});

























});





