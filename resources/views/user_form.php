<html>
    <head>
    <h1>Send POST Data </h1>
</head>
<body>
    <form method="post" action="<?=url('get-userdata')?>">
     <?=session('message')?>
        <?=$title1?><br>
        <?=$title2?><br>
        <?=$test?><br>
        <label>Name:<input type="text" name="name"></label><br>
        <label>Age:<input type="number" name="age"></label><br>
        <label>Phone:<input type="number" name="phone"></label><br>
        <input type="hidden"  name="_token" value="<?=csrf_token()?>">
        <input type="submit" value="send">
    </form>
</body>
</html>