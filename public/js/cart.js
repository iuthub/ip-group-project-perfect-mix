$("#formfood").submit(function (e) {
    e.preventDefault();

    var urlAddress = $(this).attr('action');

    $.ajax({
        url: urlAddress,
        method: "post",
        data:
            $(this).serialize()
        ,
        success: function (response) {
            addToCart(response);
        }
    });
    var foodName = $(this).find('.food-name').text();
    var foodPrice = $(this).find('.price').text();
    var quantity = $(this).find('.quantity').val();
    var imgUrl = $(this).closest('.card').find('.card-img-top').attr('src');
    var cartItem = "<div class='cart-item'><div class='row'><div class='col-3 p-1'><img style='width:100%'" +
            "src='" + imgUrl + "' alt=''></div><div class='col-9'><ul class='list-unstyled position-relative'>"+
            "<li class='name'>" + foodName + "</li><li class='Quantity'>Quantity: <span class='badge badge-primary'>" +
            quantity + "</span></li><li class='badge badge-success price'>" + foodPrice + "</li></ul></div></div></div >";

    function addToCart(response){
        var cart = $('#cart');
        var isExist = false;
        $('#cart .items .cart-item').each(function(){
            if (foodName == $(this).find('li.name').text()){
                isExist = true;
                let initQuantity = parseInt($(this).find('li.quantity span').text());
                let finalQuantity = initQuantity + parseInt(quantity);
                $(this).find('li.quantity span').text(finalQuantity.toString());
            }
        });
        if (!isExist){
            cart.find('.dropdown-content .items').append(cartItem);
            $('#cartNumberOfItems').text((parseInt($('#cartNumberOfItems').text()) + 1).toString());
        }
        var totalPrice = parseFloat(cart.find('#totalPrice').text().replace('$', '')) + parseInt(quantity) * parseFloat(foodPrice.replace('$', ''));
        cart.find('#totalPrice').text(totalPrice.toString());
        alert('Added to cart');
    }
});



 
 
