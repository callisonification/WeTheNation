// JavaScript Document

$(document).ready(function(){
   		
		//=====Popover sign in module=======//
		$('#si').popover({
			'animation' : true,
			'html' : true,
			'placement' : 'bottom',
			'trigger' : 'click',
			'content' : '<form name="login_form" method="POST" action="http://localhost/wtn/ci/account/login"><label>Email</label><input type="text" name="email" /><label>Password</label><input type="password" name="password" /><input type="submit" value="Login" class="btn" /> <a href="#" id="si_cxl">Cancel</a></form>',
		}); 
		
		//=====scrollTo sign up form=======//
		$('#su').click(function(){		
			$.scrollTo('#slider', 1000, 'swing');
			
			return false;	
		});
		$('#si_cxl').click(function(){
			console.log('fire!');	
		})
				
		//=====scrollTo member state=======//
		$('.states a').click(function(){
			var state = $(this).attr('href').toString();
			$.scrollTo(state+' H3', 1000, 'swing');
			
			return false;
		});
		
		//=====Rating stars hover effect=======/		
		$('li .star').hover(
			function(){
				$(this).addClass('active');
				$(this).parent().prevAll().find('.star').addClass('active');			
			},
			function(){
				$(this).removeClass('active');
				$(this).parent().prevAll().find('.star').removeClass('active');
		});
		
		//=====Rating stars click effect=======/		
		$('li .star').click(function(){
			
			//creates variables from data attributes attached to each star icon
			var mid = $(this).attr('data-memberId');
			var uid = $(this).attr('data-userId');
			var val = $(this).attr('data-value');
			
			//takes data attributes and  send them to PHP script (model)
			$.ajax({
				url : 'http://localhost/wtn/ci/ajax_controller/update_mbr_rate',
				type : 'POST',
				data : {
					'user_id' : uid,
					'member_id' : mid,
					'type' : 'rate',
					'rate_value' : val	
				},
				success: function(data){
					console.log(data);			
				}
			});
						
			//adds the 'voted' class to $(this) and its prev siblings
			//removes class 'voted' from next siblings if user changes vote
			$(this).addClass('voted');
			$(this).parent().prevAll().find('.star').addClass('voted');
			$(this).parent().nextAll().find('.star').removeClass('voted').removeClass('active');
			
			get_new_rate(mid);
			
			//prevent default action
			return false;		
		});
		
		var get_new_rate = function(id){
			
			$.ajax({
				url : 'http://localhost/wtn/ci/ajax_controller/get_mbr_rate/'+id,
				type : 'POST',
				success : function($data){
					console.log($data);	
				}
			});
				
		}
		
		//=====Add member commment function=======//
		$('#comment_btn').click(function(){
			
			//creates variables from form elements
			var mid = $('#mbr_comment_form').find('#member_id').attr('value');
			var uid = $('#mbr_comment_form').find('#user_id').attr('value');
			var un = $('#mbr_comment_form').find('#user_name').attr('value');
			var com = $('#mbr_comment_form').find('#comment').attr('value');
			
			$.ajax({
				url : 'http://localhost/wtn/ci/ajax_controller/add_mbr_comment',
				type : 'POST',
				data : {
					'user_id' : uid,
					'member_id' : mid,
					'comment' : com,
					'user_name' : un
				},
				success: function(data){
					console.log(data);			
				}
			});			
			
			return false;			
		});
								
		//=====Hover effect for Members in the news modules=======//
		$('.mbrholder').hover(
			function(){
				$(this).css({'background-color' : '#e3d9c3'});
			},
			function(){
				$(this).css({'background-color' : 'transparent'});
		});
		
		//=====Hover effect for Bills in the news modules=======//
		$('.module.news p').hover(
			function(){
				$(this).css({'text-decoration' : 'underline'});
			},
			function(){
				$(this).css({'text-decoration' : 'none'});
		});
		
		//=====initialize carousel for auto-start=======//
		$('.carousel').carousel({
			interval : 4000	
		});
				
		//=====Fixes model z-indexing issue for modals=======//
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