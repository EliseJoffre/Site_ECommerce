$(document).ready(function(){
	var div1 = $('<div>').attr('id', 'formulaire')
		.attr('class', 'container');
	var endiv1 = $('</div>');
	$('body').append(div1,endiv1);

	var form = $('<form></form>');
	$('#formulaire').append(form);

	var button = ('<button>').attr('type', 'submit')
		.attr('class', 'btn btn-default');
	$('form').append(button);

});







/*

	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	</div>


	<button type="submit" class="btn btn-default">Submit</button>

*/
