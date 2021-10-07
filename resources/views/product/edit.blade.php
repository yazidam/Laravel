<form action="{{route('update',$p->id)}}" method="post">
    @csrf
    name:<input type="text" name="name" id="name" value="{{$p->name}}">
    description:<input type="text" name="description" id="description"  value="{{$p->description}}">
    price:<input type="text" name="price" id="price"  value="{{$p->price}}">
    stock:<input type="text" name="stock" id="stock"  value="{{$p->stock}}">

    <input type="submit" value="valider">
</form>
