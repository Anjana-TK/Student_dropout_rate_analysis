<html>
<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    height: 100vh;
}
div {
    border: none 1px;
    border-radius: 7px;
    width: 320px;
    background-color: #f2f2f2;
}
input {
    border: solid 1px;
    border-radius: 3px;
    border-color: gray;
    margin: 3px;
    size: 55px;
    height: 25px;
    width: 280px;
}
p {
    font-family: Arial;
    text-align: center;
    margin-bottom: 5px;
    font-size: 20px;
    margin-top: 5px;
}
label {
    font-family: Arial;
    margin-left: 9px;
}
.submit {
    cursor: pointer;
}
.name {
    background-color: white;
    background-image: url('https://nicerwritter27.github.io/oi/person.png');
    background-size: 10px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 25px;
}
.mail {
    background-color: white;
    background-image: url('https://nicerwritter27.github.io/oi/mail.png');
    background-size: 10px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 25px;
}
.key {
    background-color: white;
    background-image: url('https://nicerwritter27.github.io/oi/key.png');
    background-size: 10px;
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 25px;
}
</style>
<div>
<form action="insert.php" method="POST">
         <p><strong>Sign Up form</strong></p>
         <label for="Name">UserId:</label>
         <center><input type="number" id="UID" class="name" name="UID"></center>
         <br>
         <label for="Name">Name:</label>
         <center><input type="text" id="Nname" class="name" name="Nname"></center>
         <br>
         <label for="Name">UserName:</label>
         <center><input type="text" id="Uname" class="name" name="Uname" ></center>
         <br>
         <label for="Password">Password:</label>
         <center><input type="password" id="pwd" class="key" name="pwd"></center>
         <br>
         <center><input type="submit" class="submit"></center>
      </div>
</form>
</html>