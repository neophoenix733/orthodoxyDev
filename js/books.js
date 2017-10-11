(function($, document, window) {
$( document ).ready(function(){

$.ajax({
    url: 'http://www.orthodoxebooks.org/allbooks?field_author_value_many_to_one=Pope+Shenouda+III&tid=All',
    type: 'HEAD',

    success: function() {
    	

       document.getElementById('shenouda-books').setAttribute('href', '../orthodoxyDev/books.html');
         
        },

    });

  });
	
});


