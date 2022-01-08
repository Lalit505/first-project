<h1>user login</h1>
<form action="/user" method ="post">
@csrf
<input type="text" name="user" placeholder="enter user name"><br><br>
<input type="password" name="password" placeholder="enter user password"><br><br>
<button type="submit">login</button>
</form>


