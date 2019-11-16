$(document).ready(function(){
	var $title = $('.dropdown-title');
	openItem($title.next().eq(0));
	$title.on('click', toggleVisibility);
	
	function toggleVisibility(){
		var $text = $(this).next();
		var $opened = $('.open');
		
		//Check if any dropdown is open
		if($opened === 0){
			openItem($text);
		}
		else{
			//Check if the item is already open
			if(!$opened.is($text)){
				closeItem($opened);
				openItem($text);	
			}
			else{
				closeItem($opened);
			}
		}
	}
	function openItem(item){
		var icon = item.prev().children().last();
		
		item.slideDown(300);
		item.addClass('open');
		icon.removeClass('fa-chevron-down');
		icon.addClass('fa-close');		
	}
	function closeItem(item){
		var icon = item.prev().children().last();
		
		item.slideUp(300);
		item.removeClass('open');
		icon.removeClass('fa-close');
		icon.addClass('fa-chevron-down');
	}
});