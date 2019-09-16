$(document).ready(function(){
	$("img").click(function(){
    	$("demo").after('<div class="form-group" class="demo"><label for="inputEmail" class="control-label">Imagen</label><input class="form-control" name="imagen" class="img" type="file" required></div>');
	}); 	
});