function changeToSection(section)
{
	$('section').hide();		
	$('section#'+section).show();
}

$(document).ready(function()
{
	
	$("section#form form").validate(
	{
		onkeyup: false,
		onclick: false,
		onfocusout: false,
		errorPlacement: function(error, element) 
		{
		},
		highlight: function(element, errorClass, validClass) 
		{
		    $(element).addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function(element, errorClass, validClass) 
		{
		    $(element).removeClass(errorClass).addClass(validClass);
		},
		invalidHandler: function(event, validator)
		{
			$('section#form form fieldset').popover('show');
		},
		submitHandler: function(form)
		{
			$.ajax({
                type: "POST",
                url: 'index.php/register',
                data: $(form).serialize(),
                success: function(data, textStatus, jqXHR)
                {
                	changeToSection('thanks');
                }
			});
		}
	});
});