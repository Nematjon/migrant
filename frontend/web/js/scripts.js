
$(document).ready(function() {
	pageSetUp();// DO NOT REMOVE : GLOBAL FUNCTIONS!

	var mt={
		index(){
			var p=location.pathname;
			/*if( p=="/subagent/login" || p="/" ){
				runAllForms();
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			}*/
		},frontend(){
			$("nav>ul>li ul").closest("li").find(">a").click(function(e){
				return false;
				e.preventdefault();
			});
			
			$(".footer-hover").hover(function(){
				$(".page-footer").css("bottom",0);
			})
		},logout(){
			$("#logout").click(function(e) {
				$.SmartMessageBox({
					title : "<i class='fa fa-sign-out txt-color-orangeDark'></i> Выйти?",
					content : "Вы уверены что хотите выйти?",
					buttons : '[Нет][Да]'
				},function(ButtonPressed) {
					if( ButtonPressed === "Нет" ){
						console.log(111);
					}else if( ButtonPressed === "Да" ){
						$("body").addClass("animated fadeOut");
						setTimeout(function(){
							$("#formLogOut button").click();
						},1000);
					}

				});
				e.preventDefault();
			});
		},footer(){
			var label=false,bb,bottom=0,bm;
			$(window).scroll(function(){
				if( label==true ) return;
				var bt=$("body").scrollTop();
				var wh=$(window).outerHeight();
				var bh=$("body").outerHeight();
				
				if( bt+wh-bh<=-20 ) bm=-52; else bm=-40;
				
				if( bm!=bottom ) bottom=bm; else return;
				
				$(".page-footer").animate({
					bottom: bm+"px",
				},200);			
				
			});
			
			$(".page-footer").hover(
				function(){
					$(this).animate({
						bottom: '0px',
					}, 300,function(){
						label=true;
					});
				},function(){
					var th=$(this)
					clearTimeout(bb);
					bb=setTimeout(function(){
						th.animate({
							bottom: '-40px',
						},1000,function(){
							label=false;
						});
					},30000);
				}
			);
			$(window).scroll();
		}
	}
	mt.frontend();
	mt.logout();
	mt.footer();
});