var storage = window.localStorage;

if (storage.getItem("cart")) {
} else {
  storage.setItem("cart", JSON.stringify([]));
}
 
function addToCart(nom, prix, quantite, img, id) {
  var cart = JSON.parse(storage.getItem("cart"));
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
      id: id,
      img: img,
      nom: nom,
      prix: prix,
      quantite: quantite,
      prixTotal: prixTotal,
    };
    cart.push(cart_item);
    alert("Le produit " +cart[i].nom + " a été ajouté au panier avec succès");

  }

  storage.setItem("cart", JSON.stringify(cart));

}



function showCartPreview() {

  var cart = JSON.parse(storage.getItem("cart"));
  var cartPreview = document.getElementById("previewCart");
  cartPreview.innerHTML = "";
  var price = 0;
  for (var i = 0; i < cart.length; i++) {
    price += parseInt(cart[i].prixTotal);
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

        `;
  }

  document.getElementById("price").innerHTML = price;
}

function showCartTable() {
  var cart = JSON.parse(storage.getItem("cart"));
  var cartTable = document.getElementById("cartTable");
  cartTable.innerHTML = "";
  var price = 0;

  for (var i = 0; i < cart.length; i++) {
    price += parseInt(cart[i].prixTotal);

    var myId = String("qte_" + cart[i].id);

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
              
                <input class="cart-plus-minus-box"  type="number" id="qte_${cart[i].id}" onchange="UpdateCart('${myId}', ${cart[i].id}, ${cart[i].prix})" value="${cart[i].quantite}">
           
            </div>
            
        </td>
        <td>${cart[i].prixTotal} FCFA</td>
        <td>
          <img src="../public/assets/images/del.png" alt="product" onclick="delete_cart(${cart[i].id})">
        </td>
    </tr>
       
        `;


        
  }

  document.getElementById("tprice").innerHTML = price;
  document.getElementById("paymentButton").setAttribute("amount", price);
}




  function UpdateCart(elm, id, prix) {
    var qte = document.getElementById(elm);
    var quantite = qte.value;
    var cart = JSON.parse(storage.getItem("cart"));
    var prixTotal = prix * quantite;

    for (var i = 0; i < cart.length; i++) {
      if (cart[i].id == id) {
        cart[i].quantite = quantite;
        cart[i].prixTotal = prixTotal;

        console.log(cart[i].id);
        console.log(quantite);
        console.log(prixTotal);
      }
    }

    storage.setItem("cart", JSON.stringify(cart));
    alert("succes");

    
    this.setTimeout(function()
    {
      location.reload();
      
    },500);
    
  }

  //******************* */

// var delete_cart=document.getElementById('delete_cart');
  function delete_cart(id)
  {

    var cart=JSON.parse(storage.getItem("cart"));
    for(var i = 0;i<cart.length;i++)
    {
      if(cart[i].id==id)
      {
        cart.splice(i,1);
        storage.setItem("cart",JSON.stringify(cart));
        alert("Le produit a ete retiré du panier avec succes.")
        location.reload();

        return;
      }
    }

    alert("Le produit n'a pas été trouver dans le panier.")
    location.reload();
  }

function send_order() {
    var price = document.getElementById('tprice').innerText
    var _location = document.getElementById('livraison').value
        var formdata = new FormData();
        formdata.append("amount", parseInt(price));
        formdata.append("paid", 0);
        formdata.append("adress", _location);

        var requestOptions = {
            method: "POST",
            body: formdata,
            redirect: "follow",
        };

        fetch("http://127.0.0.1:8000/views/api.php?action=send_order", requestOptions)
            .then((response) => response.json())
            .then((result) => {

              var order = result.idCmd // recupére le id de la commande du resultat de la requete
              var cart = JSON.parse(storage.getItem("cart")); // recuperer le panier

              for(var i=0; i<cart.length; i++){
                order_content(cart[i].id, order, cart[i].quantite)

                console.log('ajout du produit '+cart[i].nom)
              }


            })
            .catch((error) => console.log("error", error));
            alert('Commande enregistrée avec succes')


}

function order_content(product, order, quantity) {
        var formdata = new FormData();
        formdata.append("product", product);
        formdata.append("order", order);
        formdata.append("quantity", quantity);

        var requestOptions = {
            method: "POST",
           
            body: formdata,
            redirect: "follow",
        };

        fetch(
            "http://127.0.0.1:8000/views/api.php?action=order_content",
            requestOptions
        )
            .then((response) => response.text())
            .then((result) => console.log(result))
            
            .catch((error) => console.log("error", error));
}

  function feda(){
      FedaPay.init('#pay-btn',{
        public_key:'pk_sandbox_SlyXXY4_iM4DB5Xql6_ih3oZ',
        transaction:{
          amount:parseInt(document.getElementById('tprice').innerText),
          description:'Acheter mon produit'
        }
    
    });

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

