<form action="/product/update" method="post">
    @csrf
    <input type="text" name="product" value="{{$product->name}}">
    <input type="text" name="price" value="{{$product->price}}">
    <input type="hidden" name="id" value="{{$product->id}}">
    <button>envoyer</button>
</form>