
	/*function (){
		$('.form1').addClass('animated bounceOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
			$(this).removeClass('animated bounceOutLeft')
		});
	}*/
	function back(){
		
		var a = $('.form1');
		var b = $('.form2');
		var c = $('.form3');

		if (b.is(":visible") == true) {
			b.addClass('animated bounceOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
				$(this).removeClass('animated bounceOutLeft').addClass('hidden'),
				a.removeClass('hidden').addClass('animated bounceInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					$(this).removeClass('animated bounceInRight')
				});
			});	
		}else if(c.is(":visible") == true) {
			c.addClass('animated bounceOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
				$(this).removeClass('animated bounceOutLeft').addClass('hidden'),
				b.removeClass('hidden').addClass('animated bounceInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					$(this).removeClass('animated bounceInRight')
				});
			});	
		}else if(a.is(":visible") == true) {
			a.addClass('animated bounceOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
				$(this).removeClass('animated bounceOutLeft').addClass('hidden'),
				c.removeClass('hidden').addClass('animated bounceInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					$(this).removeClass('animated bounceInRight')
				});
			});	
		}
	};
	function next(){
		
		var a = $('.form1');
		var b = $('.form2');
		var c = $('.form3');

		if (a.is(":visible") == true) {
			a.addClass('animated bounceOutRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
				$(this).removeClass('animated bounceOutRight').addClass('hidden'),
				b.removeClass('hidden').addClass('animated bounceInLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					$(this).removeClass('animated bounceInLeft')
				});
			});	
		}else if(b.is(":visible") == true) {
			b.addClass('animated bounceOutRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
				$(this).removeClass('animated bounceOutRight').addClass('hidden'),
				c.removeClass('hidden').addClass('animated bounceInLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					$(this).removeClass('animated bounceInLeft')
				});
			});	
		}else if(c.is(":visible") == true) {
			c.addClass('animated bounceOutRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
				$(this).removeClass('animated bounceOutRight').addClass('hidden'),
				a.removeClass('hidden').addClass('animated bounceInLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					$(this).removeClass('animated bounceInLeft')
				});
			});	
		}		
	}