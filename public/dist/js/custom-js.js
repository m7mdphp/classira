/** *************Init JS*********************
	
    TABLE OF CONTENTS
	---------------------------
	1.Ready function
	2.Load function
	3.Full height function
	4.doodle function
	5.Chat App function
	6.Resize function
 ** ***************************************/
 
"use strict"; 
/*****Ready function start*****/
$(document).ready(function(){
	doodle();
	$('.preloader-it > .la-anim-1').addClass('la-animate');
});
/*****Ready function end*****/

/*****Load function start*****/
$(window).load(function(){
	$(".preloader-it").delay(500).fadeOut("slow");
	/*Progress Bar Animation*/
	var progressAnim = $('.progress-anim');
	if( progressAnim.length > 0 ){
		for(var i = 0; i < progressAnim.length; i++){
			var $this = $(progressAnim[i]);
			$this.waypoint(function() {
			var progressBar = $(".progress-anim .progress-bar");
			for(var i = 0; i < progressBar.length; i++){
				$this = $(progressBar[i]);
				$this.css("width", $this.attr("aria-valuenow") + "%");
			}
			}, {
			  triggerOnce: true,
			  offset: 'bottom-in-view'
			});
		}
	}
});
/*****Load function* end*****/

/***** Full height function start *****/
var setHeightWidth = function () {
	var height = $(window).height();
	var width = $(window).width();
	$('.full-height').css('height', (height));
	$('.page-wrapper').css('min-height', (height));
	
	/*Right Sidebar Scroll Start*/
	if(width<=1007){
		$('#chat_list_scroll').css('height', (height - 270));
		$('.fixed-sidebar-right .chat-content').css('height', (height - 279));
		$('.fixed-sidebar-right .set-height-wrap').css('height', (height - 219));
		
	}
	else {
		$('#chat_list_scroll').css('height', (height - 204));
		$('.fixed-sidebar-right .chat-content').css('height', (height - 213));
		$('.fixed-sidebar-right .set-height-wrap').css('height', (height - 153));
	}	
	/*Right Sidebar Scroll End*/
	
	/*Vertical Tab Height Cal Start*/
	var verticalTab = $(".vertical-tab");
	if( verticalTab.length > 0 ){ 
		for(var i = 0; i < verticalTab.length; i++){
			var $this =$(verticalTab[i]);
			$this.find('ul.nav').css(
			  'min-height', ''
			);
			$this.find('.tab-content').css(
			  'min-height', ''
			);
			height = $this.find('ul.ver-nav-tab').height();
			$this.find('ul.nav').css(
			  'min-height', height + 40
			);
			$this.find('.tab-content').css(
			  'min-height', height + 40
			);
		}
	}
	/*Vertical Tab Height Cal End*/
};
/***** Full height function end *****/

/***** doodle function start *****/
var $wrapper = $(".wrapper");
var doodle = function(){
	
	/*Counter Animation*/
	var counterAnim = $('.counter-anim');
	if( counterAnim.length > 0 ){
		counterAnim.counterUp({ delay: 10,
        time: 1000});
	}
	
	/*Tooltip*/
	if( $('[data-toggle="tooltip"]').length > 0 )
		$('[data-toggle="tooltip"]').tooltip();
	
	/*Popover*/
	if( $('[data-toggle="popover"]').length > 0 )
		$('[data-toggle="popover"]').popover()
	
	
	/*Sidebar Collapse Animation*/
	var sidebarNavCollapse = $('.fixed-sidebar-left .side-nav  li .collapse');
	var sidebarNavAnchor = '.fixed-sidebar-left .side-nav  li a';
	$(document).on("click",sidebarNavAnchor,function (e) {
		if ($(this).attr('aria-expanded') === "false")
				$(this).blur();
		$(sidebarNavCollapse).not($(this).parent().parent()).collapse('hide');
	});
	
	/*Panel Remove*/
	$(document).on('click', '.close-panel', function (e) {
		var effect = $(this).data('effect');
			$(this).closest('.panel')[effect]();
		return false;	
	});
	
	/*Accordion js*/
		$(document).on('show.bs.collapse', '.panel-collapse', function (e) {
		$(this).siblings('.panel-heading').addClass('activestate');
            
	});
	
	$(document).on('hide.bs.collapse', '.panel-collapse', function (e) {
		$(this).siblings('.panel-heading').removeClass('activestate');
        
	});
	
	/*Sidebar Navigation*/
	$(document).on('click', '#toggle_nav_btn,#open_right_sidebar,#setting_panel_btn', function (e) {
		$(".dropdown.open > .dropdown-toggle").dropdown("toggle");
		$(".select_op").addClass('hide_me').toggle();
		return false;
	});
	$(document).on('click', '#toggle_nav_btn', function (e) {
		$wrapper.removeClass('open-right-sidebar open-setting-panel').toggleClass('slide-nav-toggle');
		return false;
	});
	
	$(document).on('click', '#open_right_sidebar', function (e) {
		$wrapper.toggleClass('open-right-sidebar').removeClass('open-setting-panel');
		return false;
	
	});
	
	$(document).on('click','.product-carousel .owl-nav',function(e){
		return false;
	});
	
	$(document).on('click', 'body', function (e) {
		if($(e.target).closest('.fixed-sidebar-right,.setting-panel').length > 0) {
			return;
		}
		$('body > .wrapper').removeClass('open-right-sidebar open-setting-panel');
		return;
	});
	
	$(document).on('show.bs.dropdown', '.nav.navbar-right.top-nav .dropdown', function (e) {
		$wrapper.removeClass('open-right-sidebar open-setting-panel');
		return;
	});
	
	$(document).on('click', '#setting_panel_btn', function (e) {
		$wrapper.toggleClass('open-setting-panel').removeClass('open-right-sidebar');
		return false;
	});
	$(document).on('click', '#toggle_mobile_nav', function (e) {
		$wrapper.toggleClass('mobile-nav-open').removeClass('open-right-sidebar');
		return;
	});
	

	$(document).on("mouseenter mouseleave",".wrapper > .fixed-sidebar-left", function(e) {
		if (e.type == "mouseenter") {
			$wrapper.addClass("sidebar-hover"); 
		}
		else { 
			$wrapper.removeClass("sidebar-hover");  
		}
		return false;
	});
	
	$(document).on("mouseenter mouseleave",".wrapper > .setting-panel", function(e) {
		if (e.type == "mouseenter") {
			$wrapper.addClass("no-transition"); 
		}
		else { 
			$wrapper.removeClass("no-transition");  
		}
		return false;
	});
	
	/*Todo*/
	var random = Math.random();
	$(document).on("keypress","#add_todo",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0))  {
				$('<li class="todo-item"><div class="checkbox checkbox-success"><input type="checkbox" id="checkbox'+random+'"/><label for="checkbox'+random+'">' + $('.new-todo input').val() + '</label></div></li><li><hr class="light-grey-hr"/></li>').insertAfter(".todo-list li:last-child");
				$('.new-todo input').val('');
		} else if(e.which == 13) {
			alert('Please type somthing!');
		}
		return;
	});
	
	/*Chat*/
	$(document).on("keypress","#input_msg_send",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0)) {
			$('<li class="self mb-10"><div class="self-msg-wrap"><div class="msg block pull-right">' + $(this).val() + '<div class="msg-per-detail mt-5"><span class="msg-time txt-grey">3:30 pm</span></div></div></div><div class="clearfix"></div></li>').insertAfter(".fixed-sidebar-right .chat-content  ul li:last-child");
			$(this).val('');
		} else if(e.which == 13) {
			alert('Please type somthing!');
		}
		return;
	});
	$(document).on("keypress","#input_msg_send_widget",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0)) {
			$('<li class="self mb-10"><div class="self-msg-wrap"><div class="msg block pull-right">' + $(this).val() + '<div class="msg-per-detail mt-5"><span class="msg-time txt-grey">3:30 pm</span></div></div></div><div class="clearfix"></div></li>').insertAfter(".chat-for-widgets .chat-content  ul li:last-child");
			$(this).val('');
		} else if(e.which == 13) {
			alert('Please type somthing!');
		}
		return;
	});
	$(document).on("keypress","#input_msg_send_chatapp",function (e) {
		if ((e.which == 13)&&(!$(this).val().length == 0)) {
			$('<li class="self mb-10"><div class="self-msg-wrap"><div class="msg block pull-right">' + $(this).val() + '<div class="msg-per-detail mt-5"><span class="msg-time txt-grey">3:30 pm</span></div></div></div><div class="clearfix"></div></li>').insertAfter(".chat-for-widgets-1 .chat-content  ul li:last-child");
			$(this).val('');
		} else if(e.which == 13) {
			alert('Please type asomthing!');
		}
		return;
	});
	
	$(document).on("click",".fixed-sidebar-right .chat-cmplt-wrap .chat-data",function (e) {
		$(".fixed-sidebar-right .chat-cmplt-wrap").addClass('chat-box-slide');
		return false;
	});
	$(document).on("click",".fixed-sidebar-right #goto_back",function (e) {
		$(".fixed-sidebar-right .chat-cmplt-wrap").removeClass('chat-box-slide');
		return false;
	});
	
	/*Chat for Widgets*/
	$(document).on("click",".chat-for-widgets.chat-cmplt-wrap .chat-data",function (e) {
		$(".chat-for-widgets.chat-cmplt-wrap").addClass('chat-box-slide');
		return false;
	});
	$(document).on("click","#goto_back_widget",function (e) {
		$(".chat-for-widgets.chat-cmplt-wrap").removeClass('chat-box-slide');
		return false;
	});
	/*Horizontal Nav*/
	$(document).on("show.bs.collapse",".top-fixed-nav .fixed-sidebar-left .side-nav > li > ul",function (e) {
		e.preventDefault();
	});
	
	/*Slimscroll*/
	$('.nicescroll-bar').slimscroll({height:'100%',color: '#878787', disableFadeOut : true,borderRadius:0,size:'4px',alwaysVisible:false});
	$('.message-nicescroll-bar').slimscroll({height:'229px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.message-box-nicescroll-bar').slimscroll({height:'350px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.product-nicescroll-bar').slimscroll({height:'346px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.app-nicescroll-bar').slimscroll({height:'162px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.todo-box-nicescroll-bar').slimscroll({height:'310px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.users-nicescroll-bar').slimscroll({height:'370px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.users-chat-nicescroll-bar').slimscroll({height:'257px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.chatapp-nicescroll-bar').slimscroll({height:'543px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	$('.chatapp-chat-nicescroll-bar').slimscroll({height:'483px',size: '4px',color: '#878787',disableFadeOut : true,borderRadius:0});
	
	/*Product carousel*/
	if( $('.product-carousel').length > 0 )
	var $owl = $('.product-carousel').owlCarousel({
		loop:true,
		margin:15,
		nav:true,
		navText: ["<i class='zmdi zmdi-chevron-left'></i>","<i class='zmdi zmdi-chevron-right'></i>"],
		dots:false,
		autoplay:true,
		responsive:{
			0:{
				items:1
			},
			400:{
				items:2
			},
			767:{
				items:3
				},
			1399:{
				items:4
			}
		}
	});
	
	/*Refresh Init Js*/
	var refreshMe = '.refresh';
	$(document).on("click",refreshMe,function (e) {
		var panelToRefresh = $(this).closest('.panel').find('.refresh-container');
		var dataToRefresh = $(this).closest('.panel').find('.panel-wrapper');
		var loadingAnim = panelToRefresh.find('.la-anim-1');
		panelToRefresh.show();
		setTimeout(function(){
			loadingAnim.addClass('la-animate');
		},100);
		function started(){} //function before timeout
		setTimeout(function(){
			function completed(){} //function after timeout
			panelToRefresh.fadeOut(800);
			setTimeout(function(){
				loadingAnim.removeClass('la-animate');
			},800);
		},1500);
		  return false;
	});
	
	/*Fullscreen Init Js*/
	$(document).on("click",".full-screen",function (e) {
		$(this).parents('.panel').toggleClass('fullscreen');
		$(window).trigger('resize');
		return false;
	});
	
	/*Nav Tab Responsive Js*/
	$(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function(e) {
		var $target = $(e.target);
		var $tabs = $target.closest('.nav-tabs-responsive');
		var $current = $target.closest('li');
		var $parent = $current.closest('li.dropdown');
			$current = $parent.length > 0 ? $parent : $current;
		var $next = $current.next();
		var $prev = $current.prev();
		$tabs.find('>li').removeClass('next prev');
		$prev.addClass('prev');
		$next.addClass('next');
		return;
	});
};
/***** doodle function end *****/

/***** Chat App function Start *****/
var chatAppTarget = $('.chat-for-widgets-1.chat-cmplt-wrap');
var chatApp = function() {
	$(document).on("click",".chat-for-widgets-1.chat-cmplt-wrap .chat-data",function (e) {
		var width = $(window).width();
		if(width<=1007) {
			chatAppTarget.addClass('chat-box-slide');
		}
		return false;
	});
	$(document).on("click","#goto_back_widget_1",function (e) {
		var width = $(window).width();
		if(width<=1007) {
			chatAppTarget.removeClass('chat-box-slide');
		}	
		return false;
	});
};
/***** Chat App function End *****/

var boxLayout = function() {
	if((!$wrapper.hasClass("rtl-layout"))&&($wrapper.hasClass("box-layout")))
		$(".box-layout .fixed-sidebar-right").css({right: $wrapper.offset().left + 300});
		else if($wrapper.hasClass("box-layout rtl-layout"))
			$(".box-layout .fixed-sidebar-right").css({left: $wrapper.offset().left});
}
boxLayout();	

/***** Resize function start *****/
$(window).on("resize", function () {
	setHeightWidth();
	boxLayout();
	chatApp();
}).resize();
/***** Resize function end *****/



/* Select2 Init*/
$(".select2").select2();

// change height carousel 

$(document).ready(function(){
	$("#carousel-example-captions-1").mouseenter(function(){
		$("#carousel-example-captions-1").css("height", "auto");
	});
	$("#carousel-example-captions-1").mouseleave(function(){
		$("#carousel-example-captions-1").css("height", "200px");
	});
});

if( $('#chart_6').length > 0 ){
	var ctx6 = document.getElementById("chart_6").getContext("2d");
	var data6 = {
		 labels: [
		"المستهلك",
		"المتبقي"
	],
	datasets: [
		{
			data: [300, 50],
			backgroundColor: [
				"rgba(70,148,8,1)",
				"rgba(230,154,42,1)"
			],
			hoverBackgroundColor: [
				"rgba(70,148,8,1)",
				"rgba(230,154,42,1)"
			]
		}]
	};
	
	var pieChart  = new Chart(ctx6,{
		type: 'pie',
		data: data6,
		options: {
			animation: {
				duration:	3000
			},
			responsive: true,
			maintainAspectRatio:false,
			legend: {
				labels: {
				fontFamily: "Roboto",
				fontColor:"#878787"
				}
			},
			tooltip: {
				backgroundColor:'rgba(33,33,33,1)',
				cornerRadius:0,
				footerFontFamily:"'Roboto'"
			},
			elements: {
				arc: {
					borderWidth: 0
				}
			}
		}
	});
}


if( $('#chart_2').length > 0 ){
    //get the bar chart canvas
    var ctx2 = $("#chart_2");

    //bar chart data
    var data2 = {
        labels: ["محمد", "ابراهيم", "حسن", "احمد", "حسام"],
        datasets: [
            {
                label: "الواجبات /الاختبارات",
                data: [10, 50, 25, 70, 40],
                backgroundColor: [
                    "rgba(10,20,30,0.5)",
                    "rgba(10,20,30,0.5)",
                    "rgba(10,20,30,0.5)",
                    "rgba(10,20,30,0.5)",
                    "rgba(10,20,30,0.5)"
                ],
                borderColor: [
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)",
                    "rgba(10,20,30,1)"
                ],
                borderWidth: 1
            },
            {
                label: "الاعدادات",
                data: [20, 35, 40, 60, 50],
                backgroundColor: [
                    "rgba(255,99,132,0.5)",
                    "rgba(255,99,132,0.5)",
                    "rgba(255,99,132,0.5)",
                    "rgba(255,99,132,0.5)",
                    "rgba(255,99,132,0.5)"
                ],
                borderColor: [
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)"
                ],
                borderWidth: 1
            },
            {
                label: "المرفقات",
                data: [100, 35, 22, 50, 80],
                backgroundColor: [
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(255, 206, 86, 0.5)',
                    'rgba(255, 206, 86, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }
        ]
    };

    //options
    var options = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "رسم بياني يوضح نسبة المشاهدات لكل مشرف للمحتوى المضاف من قبل معلميه",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "right",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0
                }
            }]
        }
    };

    //create Chart class object
    var chart2 = new Chart(ctx2, {
        type: "horizontalBar",
        data: data2,
        options: options
    });
}
if( $('#chart_8').length > 0 ){
    //get the bar chart canvas
    var ctx8 = $("#chart_8");

    //bar chart data
    var data8 = {
        labels: [ "نسبة دخول المعلمين", "نسبة تفاعل الطلاب مع المعلمين ", "نسبة دخول الطلاب"],
        datasets: [
            {
                label: "الاسبوع السابق",
                data: [10, 50, 25],
                backgroundColor: [
                   "rgba(70,148,8,1)"
                    ,"rgba(70,148,8,1)"
                    ,"rgba(70,148,8,1)"
                    
                ],
            },
            {
                label: "الاسبوع الحالي",
                data: [20, 35, 40],
                backgroundColor: [
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)",
                    
                ]
            }
        ]
    };

    //options
    var options = {
        responsive: true,
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0
                }
            }]
        }
    };

    //create Chart class object
    var chart8 = new Chart(ctx8, {
        type: "bar",
        data: data8,
        options: options
    });
}

if( $('#chart_3').length > 0 ){
    //get the bar chart canvas
    var ctx3 = $("#chart_3");

    //bar chart data
    var data3 = {
        labels: [ "نسبة دخول المعلمين", "نسبة تفاعل الطلاب مع المعلمين ", "نسبة دخول الطلاب"],
        datasets: [
            {
                label: " اللغة الانجليزية السادس الابتدائي",
                data: [10, 50, 25],
                backgroundColor: [
                   "rgba(70,148,8,1)"
                    ,"rgba(70,148,8,1)"
                    ,"rgba(70,148,8,1)"
                    
                ],
            },
            {
                label: " التربية الاجتماعية والوطنية الخامس الابتدائي",
                data: [20, 35, 40],
                backgroundColor: [
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)",
                    "rgba(255,99,132,1)",
                    
                ]
            },
            {
                label: " العلوم الرابع الابتدائي",
                data: [25, 45, 20],
                backgroundColor: [
                    "#177ec1",
                    "#177ec1",
                    "#177ec1",
                    
                ]
            },
            {
                label: "التربية الاجتماعية والوطنية الرابع الابتدائي",
                data: [30, 65, 80],
                backgroundColor: [
                    "#e69a2a",
                    "#e69a2a",
                    "#e69a2a",
                    
                ]
            },
            {
                label: " لغتي الجميلة السادس الابتدائي",
                data: [80, 55, 20],
                backgroundColor: [
                    "r#91ed7f",
                    "#91ed7f",
                    "#91ed7f",
                    
                ]
            },
            {
                label: "القرآن الكريم السادس الابتدائي",
                data: [20, 35, 40],
                backgroundColor: [
                    "#e5d255)",
                    "#e5d255",
                    "#e5d255",
                    
                ]
            },
            {
                label: "  الفقه والسلوك السادس الابتدائي ",
                data: [56, 22, 50],
                backgroundColor: [
                    "#8284eb",
                    "#8284eb",
                    "#8284eb",
                    
                ]
            },
            {
                label: " Genius Map السادس الابتدائي",
                data: [60, 80, 10],
                backgroundColor: [
                    "#444249",
                    "#444249",
                    "#444249",
                    
                ]
            },
            {
                label: "الحديث والسيرة السادس الابتدائي",
                data: [20, 35, 40],
                backgroundColor: [
                    "#f8a35d",
                    "#f8a35d",
                    "#f8a35d",
                    
                ]
            },
            {
                label: "العلوم السادس الابتدائي",
                data: [33, 45, 55],
                backgroundColor: [
                    "#2d8f91",
                    "#2d8f91",
                    "#2d8f91",
                    
                ]
            }
        ]
    };

    //options
    var options = {
        responsive: true,
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0
                }
            }]
        }
    };

    //create Chart class object
    var chart3 = new Chart(ctx3, {
        type: "bar",
        data: data3,
        options: options
    });
}
// datetimepicker
if (jQuery().datetimepicker) {
$('.input-limit-datepicker').datetimepicker({
	format: 'DD-MM-YYYY',
	sideBySide: true,
	icons: {
			time: "fa fa-clock-o",
			date: "fa fa-calendar",
			up: "fa fa-arrow-up",
			down: "fa fa-arrow-down"
		},
}); }
// End datetimepicker
//
///*Export Table Init*/
//
//$(document).ready(function() {
//	$('#example').DataTable( {
//		dom: 'Bfrtip',
//		buttons: [
//			'copy', 'csv', 'excel', 'pdf', 'print'
//		]
//	} );
//} );
/*Export Table Init*/


/* Bootstrap switch Init*/
$('.bs-switch').bootstrapSwitch('state', true);
$('#check_box_value').text($("#check_box_switch").bootstrapSwitch('state'));

$('#check_box_switch').on('switchChange.bootstrapSwitch', function () {

	$("#check_box_value").text($('#check_box_switch').bootstrapSwitch('state'));
});
// select all check boxs
$(document).ready(function(){
	$("#select_all, #select_all2").click(function(event){
		if(this.checked) {
			$(':checkbox').each(function() {
				this.checked = true;
			});
		}
		else {
		  $(':checkbox').each(function() {
				this.checked = false;
			});
		}
	})
});

//typeahead
$(document).ready(function(){
    
})
/* dropify upload file form*/
if (jQuery().dropify) {
$('.dropify').dropify({
	messages: {
		default: 'قم بسحب و اسقاط الملف هنا او قم بالضغط هنا واختيار الملف من جهازك',
		replace: 'اضغط هنا لاستبدال الملف الحالي بملف اخر',
		remove:  'حذف الملف',
		error:   'حدث خطأ اثناء رفم الملف الرجاء المحاوله فيما بعد'
	}
});
}
  /*easy Tree*/
//if (jQuery().EasyTree) {
//$('.easy-tree').EasyTree({
//                addable: false,
//                editable: false,
//                deletable: false
//            });
//}
	/*Sidebar Collapse Animation*/
	var sidebarNavCollapse = $('.fixed-sidebar-left .side-nav  li .collapse');
	var sidebarNavAnchor = '.fixed-sidebar-left .side-nav  li a';
	$(document).on("click",sidebarNavAnchor,function (e) {
		if ($(this).attr('aria-expanded') === "false")
				$(this).blur();
		$(sidebarNavCollapse).not($(this).parent().parent()).collapse('hide');
	});