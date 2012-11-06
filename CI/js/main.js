// JavaScript Document

$(document).ready(function(){
   		
		//=====Popover sign in module=======//
		$('#si').popover({
			'animation' : true,
			'html' : true,
			'placement' : 'bottom',
			'trigger' : 'click',
			'content' : '<form name="login_form" method="POST" action="http://www.wethenation.us/alpha/account/login"><label>Email</label><input type="text" name="email" /><label>Password</label><input type="password" name="password" /><input type="submit" value="Login" class="btn" /> <a href="#">Cancel</a></form>',
		}); 
		
		//=====scrollTo sign up form=======//
		$('#su').click(function(){		
			$.scrollTo('#slider', 1000, 'swing');
			
			return false;	
		});
		
//		$('.customtooltip').tooltip({
//			'animation' : true,
//			'placement' : 'right',
//		});
		
		//=====Fixes model z-indexing issue=======//
		$('.modal').appendTo($('body'));
		
		//=====add inner coment action=======//
		$('.add_comment a').click(function(){
			$('.inline_comment').css({'display' : 'block'});
			
			return false;	
		});
		$('.inline_comment a').click(function(){
			$('.inline_comment').find('textarea').val('');					
			$('.inline_comment').find('textarea').attr('placeholder', 'Add comment');	
			$('.inline_comment').css({'display' : 'none'});
			
			return false;	
		});
 });
 //end of JS file