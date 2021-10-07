
<form action="{{route('ajoutcat')}}" method="post">
    @csrf
    name:<input type="text" name="name">



    <input type="submit" value="valider">
</form>
