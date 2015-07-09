$j( document ).ready(function() {
$j(document).ready(function(){

$j('#cssmenu > ul > li ul').each(function(index, e){
  var count = $j(e).find('li').length;
  var content = '<span class="cnt">' + '</span>';
  /*var content = '<span class="cnt">' + count + '</span>'; */
  $j(e).closest('li').children('a').append(content);
});
$j('#cssmenu ul ul li:odd').addClass('odd');
$j('#cssmenu ul ul li:even').addClass('even');
$j('#cssmenu > ul > li > a').click(function() {
  $j('#cssmenu li').removeClass('active');
  $j(this).closest('li').addClass('active');	
  var checkElement = $j(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $j(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $j('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($j(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});

});
