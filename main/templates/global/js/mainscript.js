


var rd = {};	//命名空间
rd.tools = {};	//jquery ；类似于写一个找属性的工具
rd.ui = {};		//组件 可抽象成通用功能
rd.app = {};	//具体事件

window.onload = function(){
	rd.ui.accordion('#accordion');
}
rd.ui.accordion = function(el){
	var accordion = $(""+el+"");
	
	var links = accordion.find('.link');
	links.on('click',function(){
		next = $(this).next();
		next.slideToggle();
		$(this).parent().toggleClass('open');

		accordion.find('.submenu').not(next).slideUp().parent().removeClass('open');

	});
}

