@if($errors->any())
    <ul>
        {!!implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif
<form action="store" method="post">
    <label for="">name</label><input type="text" name="name"><br>
    <label for="">email</label><input type="email" name="email"><br>
    <label for="">password</label><input type="password" name="password"><br>
    <label for="">confirm password</label><input type="password" name="password_confirmation"><br>
    <input type="submit" value="register"><br>
    @csrf
</form> 