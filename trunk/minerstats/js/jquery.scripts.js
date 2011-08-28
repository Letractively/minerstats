$(document).ready(function() 
{ 

	
	$('table.stats').fixedtableheader(); 

	$.tablesorter.addParser(
	{
		id: "formated",
		is: function(s) 
		{
			var s1 = s.replace(/\s{1,}/g,"");
			return /^\d{1,}$/.test(s1);
		},
		format: function(s) 
		{
			var s1 = s.replace(/\s{1,}/g,"");
			return $.tablesorter.formatInt(s1);
		},
		type: "numeric"
	});

	$('table[name="ranks"]').tablesorter( 
	{
		sortList: [[1,1]],
		headers: 
		{
			1:{sorter: "formated"},
			2:{sorter: "formated"},
			3:{sorter: "formated"},
			4:{sorter: "formated"}
		}
	}); 

	$('table[name="stats"]').tablesorter( 
	{
		headers: 
		{
			1:{sorter: "formated"},
			2:{sorter: "formated"},
			3:{sorter: "formated"},
			4:{sorter: "formated"}
		}
	}); 
	

	$('div#item').click(function() 
	{
		$(location).attr('href', $(this).attr('href'));
	});

	$('input[name="playerID"]').qtip(
	{	
		show: 
		{
			event: 'click mouseenter focus'
		},
		 position: 
		 {
			my: 'middle left', 
			at: 'middle right'
		},
		content: 
		{
			attr: 'title'
		}
	});

	$('input[name="password1"]').qtip(
	{	
		show: 
		{
			event: 'click mouseenter focus'
		},
		 position: 
		 {
			my: 'middle left', 
			at: 'middle right'
		},
		content: 
		{
			attr: 'title'
		}
	});
		
	$('img[title]').qtip(
	{ 
		position: 
		{
			my: 'middle left', 
			at: 'middle right'
		},
		style: 
		{ 
			tip: true,
			classes: 'ui-tooltip-dark'
		}
	});
		

	$('a.logout').click(function()
	{
		$(location).attr('href', 'redirects/red.logout.php');
	});
	
	/////////////////////////////////////////////////////
	// LOGGING EVENTS & FUNCTIONS ///////////////////////
	/////////////////////////////////////////////////////
	$('a.login').click(function() 
	{
		$('div.login-bg').fadeIn('fast');
		$('div#login-form').fadeIn('fast');
		$('input[name="mc-login"]').css('border', '1px solid #CCCCCC');
		$('input[name="password"]').css('border', '1px solid #CCCCCC');		
		
	});
	
	$('div.login-bg').click(function() 
	{
		$(this).fadeOut('fast');
		$('div#login-form').fadeOut('fast');
	});
	
	//Logging events
	$('input.submit[name="logging"]').click(function() 
	{
		$.post("ajax/ajax.login.php", 
		{ 
			login: $('input[name="mc-login"]').val(), 
			password: $('input[name="password"]').val() 
		},
		function(data) 
		{
			
			if(data == "logging")
			{
				$('input.textbox').css('border', '1px solid #CCCCCC');
				$('div.info-label[name="logging"]').slideDown('fast');
				$('div.login-bg').delay('800').fadeOut('fast');
				$('div#login-form').delay('800').fadeOut('fast', function() 
				{
					$(location).attr('href', 'index.php');
				});
								
			}
			else
			{
				if(data == "username error")
				{
					$('input[name="login"]').css('border', '1px solid #FF5555');	
				}
				if(data == "password error")
				{
					$('input[name="password"]').css('border', '1px solid #FF5555');	
				}		
			}
		});
	});
	
	//Activation events
	$('input.submit[name="activation"]').click(function() 
	{
		$.post("ajax/ajax.activation.php", 
		{ 
			email: $('input[name="email"]').val(), 
			playerID: $('input[name="playerID"]').val(), 
			password1: $('input[name="password1"]').val(),
			password2: $('input[name="password2"]').val() 
		},
		function(data) 
		{	
			var error = data.split('|');
			
			$('input.textbox').css('border', '1px solid #CCCCCC');
			
			if(error[0] == "email error")
			{
				$('input[name="email"]').css('border', '1px solid #FF5555');		
				$('div.info.error').slideDown('fast').html(error[1]);
			}
			if(error[0] == "playerID error")
			{
				$('input[name="playerID"]').css('border', '1px solid #FF5555');		
				$('div.info.error').slideDown('fast').html(error[1]);
			}
			if(error[0] == "password1 error")
			{
				$('input[name="password1"]').css('border', '1px solid #FF5555');	
				$('div.info.error').slideDown('fast').html(error[1]);					
			}
			if(error[0] == "password2 error")
			{
				$('input[name="password2"]').css('border', '1px solid #FF5555');	
				$('div.info.error').slideDown('fast').html(error[1]);								
			}
			if(error[0] == "password matching error")
			{
				$('input[name="password1"]').css('border', '1px solid #FF5555');
				$('input[name="password2"]').css('border', '1px solid #FF5555');
				$('div.info.error').slideDown('fast').html(error[1]);								
			}			
			if(!data)
			{
				$('div.info.error').slideUp('fast');	
				$('div.info-label[name="activation"]').slideDown('fast');
				$('input[name="email"]').val('');
				$('input[name="playerID"]').val('');
				$('input[name="password1"]').val('');
				$('input[name="password2"]').val('');
				$('input.submit[name="activation"]').attr('disabled', 'true');
				$('input.submit[name="activation"]').css('color', '#C8C8C8');
			}
			
		});
	});
	
	
	
}); 