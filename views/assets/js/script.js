var storage = window.localStorage;


if(storage.getItem('cart')){

}else{
    storage.setItem('cart', JSON.stringify([]));
}

function addToCart(id,quantite,nom){
    var cart = JSON.parse(storage.getItem('cart'));
    var cart_item = {
        'id':id,
        'quantite':quantite,
        'nom':nom
    }

}
