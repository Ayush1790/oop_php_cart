// ajax call adding data in cart
function addCart(value) {
   $.ajax({
      url: 'cartAction.php',
      type: 'post',
      data: { "id": value, "action": "addToCart" },
      datatype: 'json'
   }).done(function (value) {
      $("#tbody").html(value);
   })
}
// ajax call for remove data from cart
function removeProduct(value) {
   $.ajax({
      url: 'cartAction.php',
      type: 'post',
      data: { "id": value, "action": "removeProduct" },
      datatype: 'json'
   }).done(function (value) {
      $("#tbody").html(value);
   })
}
// ajax call for decrease qty by 1
function dec_qty(value) {
   $.ajax({
      url: 'cartAction.php',
      type: 'post',
      data: { "id": value, "action": "decQty" },
      datatype: 'json'
   }).done(function (value) {
      $("#tbody").html(value);
   })
}
// ajax call for empty cart
function emptyCart() {
   $.ajax({
      url: 'cartAction.php',
      type: 'post',
      data: { "action": "empty" },
      datatype: 'json'
   }).done(function (value) {
      $("#tbody").html(value);
   })
}
