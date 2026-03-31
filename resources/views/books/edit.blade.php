<h1>Edit book</h1>

<form action="/books" method="post">
    @csrf
    @method("PUT")

    <input type="text" name="title" placeholder="title goes here" value="{{editBook->released_at}}>
    <input type="text" name="author" placeholder="author goes here"  value="{{editBook->released_at}}">
    <input type="date" name="released_at" placeholder="date goes here"  value="{{editBook->released_at}}">
    <input type="submit" value="Update">
</form>