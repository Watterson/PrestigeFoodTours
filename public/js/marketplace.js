$(window).scroll(function(){
$('.navbar-wrapper').toggleClass('scrolled', $(this).scrollTop() > 10);
});

$('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<minPerSlide;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}

        next.children(':first-child').clone().appendTo($(this));
      }
});



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $("#addToCart").click(function(e){

        e.preventDefault();



        var compId = $("#competition-id").val();

        var compTitle = $("#competition-title").text();

        var quantity = $("#competition-quantity").val();

        var price = $("#competition-price").text();

        var answer = $("select[name=answer]").val();

        console.log(price);
        console.log(compTitle);
        console.log(quantity);
        console.log(answer);
        // $.ajax({
        //
        //    type:'POST',
        //
        //    url:'/cart/add',
        //
        //    data:{compId:compId, compTitle:compTitle, quantity:quantity, quantity:quantity},
        //
        //    success:function(data){
        //
        //       alert(data.success);
        //
        //    }
        //
        // });



	});
