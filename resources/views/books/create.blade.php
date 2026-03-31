<h1>New book</h1>

<form action="/books" method="post">
    @csrf
    <input type="text" name="title" placeholder="title goes here" value="{{editBook->released_at}}">
    <input type="text" name="author" placeholder="author goes here" value="{{editBook->released_at}}" >
    <input type="date" name="released_at" placeholder="date goes here" value="{{editBook->released_at}}">
    <input type="submit" value="Create">
</form>