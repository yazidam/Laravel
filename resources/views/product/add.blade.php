
<form action="{{route('ajout')}}" method="post">
    @csrf
    name:<input type="text" name="name">
    description:<input type="text" name="description">
    price:<input type="text" name="price">
    stock:<input type="text" name="stock">

    <input type="submit" value="valider">
</form>
