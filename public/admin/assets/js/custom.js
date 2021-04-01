(function($){

	$(document).ready(function(){

        $(document).on('click','a.logout_cls',function(e){
            e.preventDefault();
            $('form#logout_form').submit();


        });



	});




})(jQuery)
