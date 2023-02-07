$(document).ready(function(){
    $.ajax({
        url: 'api/mushroomvar',
        type: 'GET',
        dataType: 'json',
        success: function (data){
            var img = "{{ asset('landingpageassets/img/icon-1.png') }}";
            $.each(data,function(index,itemData){
                $("#mushroomvar").append('<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">'+ 
            '<div class="bg-white text-center h-100 p-4 p-xl-5">'+
            '<img style="width:200px; height:100px;" class="img-fluid" src="landingpageassets/img/'+itemData.mushroom_image+'" alt="">'+
            '<br><br><h4 class="mb-3">'+itemData.configuration_name+'</h4>'+
            '</div></div>');
            });
        }
    });
}); 