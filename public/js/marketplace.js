$(function() {
  console.log(compIds);
});
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

    function checkAnswer() {
      var answer = $("#answer").val();
      return answer;
    }
    function addToCart() {
      console.log('adding to cart');
      var compId = $("#competition-id").val(),
          compTitle = $("#competition-title").text(),
          quantity = $("#quantity").val(),
          answer = $("#answer").val(),
          entryPriceText = $("#entry-price").text(),
          entryPrice = entryPriceText.substring(1, entryPriceText.length),
          totalPriceText = $("#price").text(),
          totalPrice = totalPriceText.substring(1, totalPriceText.length);

          $.ajax({
             type:'POST',
             url:'/cart/add',
             data:{compId:compId, compTitle:compTitle, entryPrice:entryPrice, totalPrice:totalPrice, quantity:quantity, answer:answer},
             success:function(data){
                console.log(data.session);
             }
          });
    }

    function inCart() {
      var id = $("#competition-id").val();
      console.log(id);
      if(jQuery.inArray(id, compIds) !== -1){
        return true;
      }else{
        return false;
      }
    }
    function updateCartIcon() {
      console.log('updating cart icon');

    }
    function updateButtons() {
      console.log('updating buttons');
      $( "#payment-routes" ).children().hide();
      $( "#goToCheckout" ).show( );
    }
    $("#addToCart").click(function(e){
        e.preventDefault();
        let answer = checkAnswer();
        let cart = inCart();
        console.log(answer);
        console.log(cart);
        if(!$("#addToCart").attr("disabled")){
          $("#addToCart").attr("disabled", true);
          if(answer === 'true' && cart === false){
            addToCart();
            updateCartIcon();
            updateButtons();
          }else if(answer === 'true' && cart ){
            console.log('already in cart');
          }else if(answer === 'false' || !answer){
            console.log('trigger check answer alert');
            $('#addToCart').removeAttr("disabled");
          }else{
            console.log('ran through');
          }
        }
	   });

     $("#quantity").change(function(e){
        var quantity = $("#quantity").val();
        var priceText = $("#entry-price").text();
        var price = priceText.substring(1, priceText.length);
        var totalPrice = price*quantity;
        $("#price").text('£'+totalPrice);
      });


       $("#answer").change(function(e){
         if(checkAnswer() === 'true'){
           $('#correct').show();
           $('#wrong').hide();
         }else{
           $('#wrong').show();
           $('#correct').hide();
         }
      });
