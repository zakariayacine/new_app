<form action="product/add" method="post">
    @csrf
    <input type="text" name="product">
    <input type="text" name="price">
    <button>envoyer</button>
</form>