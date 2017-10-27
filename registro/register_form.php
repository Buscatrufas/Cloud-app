<form action="adduser.php" method="post">
  <table>
    <tr>
      <td>User:</td>
      <td><input name="username" type="text" class="resizedTextbox"/></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input name="password" type="password" /></td> 
    </tr>
    <tr>
      <td colspan="2"><input name="iniciar" type="submit" value="Registrarse"/></td>
    </tr>
    <tr>
      <?php
        if(isset($_SESSION)){
          if($_SESSION['status_account']==="A"){
            echo '<td>Tipo de cuenta: </td>';
            echo '<td><input type="radio" name="acct" value="U" checked> Usuario </td>';
            echo '<td><input type="radio" name="acct" value="A"> Administrador </td>';
          }
        }
      ?>
    </tr>
  </table>
</form>