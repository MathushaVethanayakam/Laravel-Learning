<h3>Create User form</h3>

<form action="store" method="post">
    <label for="">Name</label><input type="text" name="name"><br>
    <label for="">Age</label><input type="number" name="age"><br>
    <label for="">Phone</label><input type="number" name="phone"><br>
    <input type="submit" value="Create User"><br>
    @csrf
</form>   