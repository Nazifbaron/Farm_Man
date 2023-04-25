var storage = window.localStorage;

if (storage.getItem('cart')) {

} else {
    storage.setItem('cart', JSON.stringify([]));
}

function addToCart(nom, prix, quantite, img, id) 
{
    var cart = JSON.parse(storage.getItem('cart'));
    var prixTotal = prix * quantite;
    var produitExiste = false;

    for (var i = 0; i < cart.length; i++) {
        if (cart[i].nom === nom) {
            cart[i].quantite += quantite;
            cart[i].prixTotal += prixTotal;
            produitExiste = true;
        }
    }

    if (!produitExiste) {
        var cart_item = {
            'id':id,
            'img':img,
            'nom': nom,
            'prix': prix,
            'quantite': quantite,
            'prixTotal': prixTotal
        };
        cart.push(cart_item);
    }

    storage.setItem('cart', JSON.stringify(cart));

    alert('Le produit ' + nomProduit + ' a été ajouté au panier avec succès');
}

function showCartPreview(){

    var cart = JSON.parse(storage.getItem('cart'))
    var cartPreview = document.getElementById('previewCart')
    cartPreview.innerHTML = ''
    var price = 0
    for(var i=0; i<cart.length; i++){

        price += parseInt(cart[i].prixTotal)
        cartPreview.innerHTML += `
        
        <div class="cart-item">
        <div class="cart-img">
            <a href="#"><img src="../admin/${cart[i].img}" alt="cart"></a>
        </div>
        <div class="cart-des">
            <a href="#">${cart[i].nom} x ${cart[i].quantite}</a>
            <p>${cart[i].prixTotal}</p>
        </div>
       
    </div>

        `
    }

    document.getElementById('price').innerHTML=price

}

function showCartTable(){

    var cart = JSON.parse(storage.getItem('cart'))
    var cartTable = document.getElementById('cartTable')
    cartTable.innerHTML = ''
    var price = 0;


    
    for(var i=0; i<cart.length; i++)
    {

        price += parseInt(cart[i].prixTotal)
        cartTable.innerHTML += `
        
        <tr>
        <td class="product-item">
            <div class="p-thumb">
                <a href="#"><img src="../admin/${cart[i].img}" alt="product" width="50" height="50"></a>
            </div>
            <div class="p-content">
                <a href="#">${cart[i].nom}</a>
            </div>
        </td>
        <td> ${cart[i].prix} FCFA</td>
        <td>
            <div class="cart-plus-minus">
                <div class="dec qtybutton" id="plus">-</div>
                <input class="cart-plus-minus-box" type="text" id="qte_${cart[i].id}" onchange="UpdateCart(qte_${cart[i].id},${cart[i].nom},${cart[i].img}, ${cart[i].id})" name="qtybutton" value="${cart[i].quantite}">
                <div class="inc qtybutton" id="plus">+</div>
            </div>
            
        </td>
        <td>${cart[i].prixTotal} FCFA</td>
        <td>
            <a href="#"><img src="../public/assets/images/del.png" alt="product"></a>
        </td>
    </tr>
       
        `;
    }

    document.getElementById('tprice').innerHTML=price
}

    function UpdateCart(elm,nom, prix, img, id ){
       
      var qte = document.getElementById(elm); 
        addToCart(nom, prix, qte.value, img, id );
    }



/*
*Le code que vous avez fourni est une fonction JavaScript appelée addToCart(). 
Cette fonction permet d'ajouter un produit au panier en enregistrant son nom, 
son prix unitaire, sa quantité et son prix total dans le stockage local du navigateur.

Le code commence par récupérer le stockage local à l'aide de la méthode 
localStorage.getItem('cart'). Si le panier existe déjà, le code ne fait rien, 
sinon il initialise le panier en créant un tableau vide et en l'enregistrant dans le stockage local.

La fonction addToCart() prend ensuite trois paramètres: nomProduit, prixUnitaire et quantite. 
Elle commence par calculer le prix total du produit en multipliant le prix unitaire par la quantité.

Ensuite, la fonction vérifie si le produit existe déjà dans le panier en parcourant le tableau 
cart à l'aide d'une boucle for. Si le produit existe déjà, la quantité et le prix total sont 
mis à jour en conséquence et la variable produitExiste est définie sur true.

Si le produit n'existe pas dans le panier, la fonction crée un nouvel objet cart_item avec les 
informations du produit et l'ajoute au tableau cart.

Enfin, la fonction enregistre le tableau cart mis à jour dans le stockage local et affiche une 
alerte pour informer l'utilisateur que le produit a été ajouté au panier.

En résumé, ce code permet d'ajouter des produits au panier en stockant les informations nécessaires 
dans le stockage local du navigateur.*
*/
