// JavaScript Document

$(document).ready(function(){
   		
		//=====Popover sign in module=======//
		$('#si').popover({
			'animation' : true,
			'html' : true,
			'placement' : 'bottom',
			'trigger' : 'click',
			'content' : '<form name="login_form" method="POST" action="/wtn/ci/account/login"><label>Email</label><input type="text" name="email" /><label>Password</label><input type="password" name="password" /><input type="submit" value="Login" class="btn" /> <a href="#" id="si_cxl">Cancel</a></form>',
		}); 
		
		//=====scrollTo sign up form=======//
		$('#su').click(function(){		
			$.scrollTo('#slider', 1000, 'swing');
			
			return false;	
		});
				
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
				url : '/wtn/ci/ajax_controller/update_mbr_rate',
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
		
		//==== Returns updated member average - rating system
		var get_new_rate = function(id){
			
			$.ajax({
				url : '/wtn/ci/ajax_controller/get_mbr_rate/'+id,
				type : 'POST',
				success : function(data){
					var newrate = data;
					$('#mbr_rating_container').find('h4').empty();
					$('#mbr_rating_container').find('h4').append(data+'%');
				}
			});
				
		};
		
		//=====Add member commment function=======//
		$('#mbr_comment_btn').click(function(){
			
			//creates variables from form elements
			var mid = $('#mbr_comment_form').find('#member_id').attr('value');
			var uid = $('#mbr_comment_form').find('#user_id').attr('value');
			var up = $('#mbr_comment_form').find('#user_photo').attr('value');
			var un = $('#mbr_comment_form').find('#user_name').attr('value');
			var com = $('#mbr_comment_form').find('#comment').attr('value');
			var tp = $('#mbr_comment_form').find('#comment_type').attr('value');			
			
			$.ajax({
				url : '/wtn/ci/ajax_controller/add_mbr_comment',
				type : 'POST',
				data : {
					'user_id' : uid,
					'user_photo' : up,
					'member_id' : mid,
					'comment' : com,
					'user_name' : un,
					'comment_type' : tp
				},
				success: function(data){
					console.log(data);			
				}
			});
			
			update_mbr_comments(mid);
			$('#mbr_comment_form').find('textarea').val('');
			return false;			
		});
		
		//=====Pulls updated member comments and repopulates the page=======//
		var update_mbr_comments = function(id){
			
			$.ajax({
				url : '/wtn/ci/ajax_controller/get_mbr_comments/'+id,
				type : 'POST',
				dataType:"json",
				success : function(data){
					
					var html = '';
					
					for(var i=0, j=data.length; i<j; i++){
						var un = data[i].display_name;
						var up = data[i].user_photo;
						var co = data[i].comment;
						var dt = data[i].data_time;
						
						console.log(up);
						
						html += '<div class="user_comment"><img src="'+up+'"><div class="comment_hook"><!-- Img applied via CSS --></div><div class="user_master_comment"><p class="comment_user">'+un+' Says:</p><p>'+co+'</p><p class="comment_date">Posted: '+dt+'</p></div></div>';
					}//end for loop
					
					$('.mbr_dtl').find('.user_comment').remove();
					$('.mbr_dtl').prepend(html);
					console.log(html);
					
				}//end sucess function
			});
		};
		
		//=====Add bill commment function=======//
		$('#bill_comment_btn').click(function(){
			
			//creates variables from form elements
			var bid = $('#bill_comment_form').find('#bill_id').attr('value');
			var uid = $('#bill_comment_form').find('#user_id').attr('value');
			var up = $('#bill_comment_form').find('#user_photo').attr('value');
			var un = $('#bill_comment_form').find('#user_name').attr('value');
			var com = $('#bill_comment_form').find('#comment').attr('value');
			var tp = $('#bill_comment_form').find('#comment_type').attr('value');
			
			$.ajax({
				url : '/wtn/ci/ajax_controller/add_bill_comment',
				type : 'POST',
				data : {
					'user_id' : uid,
					'user_photo' : up,
					'bill_id' : bid,
					'comment' : com,
					'user_name' : un,
					'comment_type' : tp
				},
				success: function(data){
					console.log(data);			
				}
			});
			
			update_mbr_comments(bid);
			$('#bill_comment_form').find('textarea').val('');
			return false;			
		});
		
		//=====Pulls updated member comments and repopulates the page=======//
		var update_mbr_comments = function(id){
			
			$.ajax({
				url : '/wtn/ci/ajax_controller/get_bill_comments/'+id,
				type : 'POST',
				dataType:"json",
				success : function(data){
					
					var html = '';
					
					for(var i=0, j=data.length; i<j; i++){
						var un = data[i].display_name;
						var up = data[i].user_photo;
						var co = data[i].comment;
						var dt = data[i].data_time;
						
						console.log(up);
						
						html += '<div class="user_comment"><img src="'+up+'"><div class="comment_hook"><!-- Img applied via CSS --></div><div class="user_master_comment"><p class="comment_user">'+un+' Says:</p><p>'+co+'</p><p class="comment_date">Posted: '+dt+'</p></div></div>';
					}//end for loop
					
					$('.bill_dtl').find('.user_comment').remove();
					$('.bill_dtl').prepend(html);
					console.log(html);
					
				}//end sucess function
			});
		};		
		
		//adds member vote on bill when thumb icon is clicked, works for either
		$('.thumb').click(function(){
			
			var uid = $(this).attr('data-userId');
			var bid = $(this).attr('data-billId');
			var type = $(this).attr('data-type');
			var vote = $(this).attr('data-vote');
			
			$.ajax({
				url : '/wtn/ci/ajax_controller/update_bill_vote',
				type : 'POST',
				data : {
					'user_id' : uid,
					'bill_id' : bid,
					'type' : type,
					'vote' : vote	
				},
				success : function(data){
					console.log(data);
				}
			});
			
			//activates correct thumb on user click
			$(this).addClass('active');
			$(this).siblings('.thumb').removeClass('active');
			
			//runs function to update vote stats
			update_mbr_votes(bid);
			return false;	
		})
		
		//pulls updated stats for bill votes via ajax
		var update_mbr_votes = function(id){
			
			$.ajax({
				url : '/wtn/ci/ajax_controller/get_bill_vote/'+id,
				type : 'POST',
				dataType:"json",
				success : function(data){
					//retrieves vote stats and updates fields accordingly
					$('.approval_rating').html(data[0]+'%');
					$('.disapproval_rating').html(data[1]+'%');
				}
				
			});//end ajax call
			
		}//end update member votes function
							
		//=====Hover effect for Members in the news modules=======//
		$('.mbrholder').hover(
			function(){
				$(this).css({'background-color' : '#e3d9c3'});
			},
			function(){
				$(this).css({'background-color' : 'transparent'});
		});
		
		//=====Hover effect for Bills in the news modules=======//
		$('.module.news').hover(
			function(){
				$(this).find('h3').css({'text-decoration' : 'underline'});
			},
			function(){
				$(this).find('h3').css({'text-decoration' : 'none'});
		});
		
		//=====initialize carousel for auto-start=======//
		$('.carousel').carousel({
			interval : 4000	
		});
				
		//=====Fixes model z-indexing issue for modals=======//
		$('.modal').appendTo($('body'));
		
 });
 //end of JS file