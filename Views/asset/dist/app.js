$(document).ready(function(){

	// responsive nav
	var responsiveNav = $('#toggle-nav');
	var navBar = $('.nav-bar');

	responsiveNav.on('click',function(e){
		e.preventDefault();
		console.log(navBar);
		navBar.toggleClass('active')
	});

	// pseudo active
	if($('#docs').length){
		var sidenav = $('ul.side-nav').find('a');
		var url = window.location.pathname.split( '/' );
		var url = url[url.length-1];
		
		sidenav.each(function(i,e){
			var active = $(e).attr('href');

			if(active === url){
				$(e).parent('li').addClass('active');
				return false;
			}
		});
	}

});

hljs.configure({tabReplace: '  '});
hljs.initHighlightingOnLoad();


const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('activeNav');
    console.log(link);
  }
})