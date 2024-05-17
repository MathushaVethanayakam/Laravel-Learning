@if($errors->any())
    <ul>
        {!!implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif
<form action="authenticate" method="post">
    
    <label for="">email</label><input type="email" name="email"><br>
    <label for="">password</label><input type="password" name="password"><br>
    <input type="submit" value="login"><br>
    @csrf
</form>  