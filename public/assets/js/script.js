var storage = window.localStorage;


if (storage.getItem('cart')) {

} else {
    storage.setItem('cart', JSON.stringify([]));
}

function addToCart(id, quantite, nom) {
    var cart = JSON.parse(storage.getItem('cart'))

    if(cart.length){
        for (var i = 0; i < cart.length; i++) {
            if (cart[i].id == id) {
                cart[i].quantite += quantite
            }
            else {
                var cart_item = {
                    'id': id,
                    'quantite': quantite,
                    'nom': nom
                }
                cart.push(cart_item);
            }
        }
    }
    else{

                var cart_item = {
                    'id': id,
                    'quantite': quantite,
                    'nom': nom
                }
                cart.push(cart_item);
           

    }

    storage.setItem('cart', JSON.stringify(cart));

    alert('Le produit ' + nom + ' a ete ajoute au panier avec succes')

}
