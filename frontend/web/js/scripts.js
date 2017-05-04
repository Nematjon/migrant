
$(document).ready(function() {
	pageSetUp();// DO NOT REMOVE : GLOBAL FUNCTIONS!

$(".sOften li").on("click",function(){
	var ct=$("a",this).html();
	$(this).closest(".input-group").find(".toFrom").val( ct );
});

$(".reverseBtn").on("click",function(){
	var clos=$(this).closest(".row");
	var sFrom=clos.find(".sFrom");
	var sTo=clos.find(".sTo");
	var tmp=sFrom.val();
	sFrom.val( sTo.val() );
	sTo.val( tmp );
});

$(document).on("click",".rRoute",function(){
	$(this).closest(".dRoute").remove();
});
	
$("#addRoute").on("click",function(){
	var cln=$(".dRoute:last").clone(true);
	cln.find("input[type='text']").val("");
	cln.insertAfter(".dRoute:last");
});


	var paramDatePicker={
		defaultDate: "+0d",
		changeMonth: true,
		numberOfMonths: 1,
		dateFormat: 'dd.mm',
		prevText: '<i class="fa fa-chevron-left"></i>',
		nextText: '<i class="fa fa-chevron-right"></i>',
	}
	
	$.each([ ['oneFrom'],['twoForm','twoTo'],['moreFrom','moreTo'] ],function( k,v ){
		paramDatePicker.onClose=function (selectedDate) {
			$("."+v[1]).datepicker("option", "minDate", selectedDate);
		}
		paramDatePicker.defaultDate="+0d";
		$("."+v[0]).datepicker( paramDatePicker );
		if( v[1]== undefined ) return;
		
		paramDatePicker.onClose=function (selectedDate) {
			$("."+v[0]).datepicker("option", "maxDate", selectedDate);
		}
		paramDatePicker.defaultDate="+10d";
		$("."+v[1]).datepicker( paramDatePicker );
		
	});
	
	
		
$(".fadate").on("click",function(){
	$(this).prev("input").focus();
});
 
 
 

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