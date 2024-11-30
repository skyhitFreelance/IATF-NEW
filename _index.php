<?php
  ////////////////////////////////////////////////////////////////////

  /*******************************************************************

     Administration Panel

     Version: 2.2



     Programmed By: Prashant Shirsat

     Email: prashant@netsolutionsindia.net

  *******************************************************************/

  ////////////////////////////////////////////////////////////////////



  include_once("admin.config.inc.php");

?>

<html>

<head>

<title>Welcome to <?php echo $ADMIN_MAIN_SITE_NAME ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" href="admin.css" type="text/css">

<script language="JavaScript" src="admin.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MF4JMLKH7Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MF4JMLKH7Y');
</script>

</head>



<body bgcolor="<?php echo $ADMIN_MAIN_PAGES_BG_COLOR ?>" text="<?php echo $ADMIN_MAIN_PAGES_TEXT_COLOR ?>" link="<?php echo $ADMIN_MAIN_PAGES_LINKS_COLOR ?>" vlink="<?php echo $ADMIN_MAIN_PAGES_LINKS_COLOR ?>" alink="<?php echo $ADMIN_MAIN_PAGES_LINKS_COLOR ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<?php include("top.php"); ?>



<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td bgcolor="#FFFFFF" valign="top" align="center" height="2">

      <div align="left">

        <table width="100%" border="0" cellspacing="1" cellpadding="1">

          <tr valign="top">

            <td width="15%"><br>

              <br>

              <br>

            </td>

            <td width="70%">

              <form method="post" action="password.php" name="login">

                <div align="center"><font face="Verdana" size="2"><b>Welcome to

                  Administration Section of <?php echo $ADMIN_MAIN_SITE_NAME ?></b></font><br>

                  <br>

                </div>

                <table width="80%" border="0" cellspacing="1" cellpadding="3" align="center" bgcolor="#3C678E">

                  <tr bgcolor="#FFCC99" valign="top">

                    <td bgcolor="#CCCCCC"> <br>

                    <?php

                      if($argv[0]==1)

                      {

                    ?>

                    <table width="70%" border="0" cellspacing="4" cellpadding="4" align="center">

                      <tr valign="middle">

                        <td width="35%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FF0000">Invalid Username or Password</font></td>

                      </tr>

                    </table>

                    <?php

                      }

                    ?>

                    <?php

                      if($argv[0]==2)

                      {

                    ?>

                    <table width="70%" border="0" cellspacing="4" cellpadding="4" align="center">

                      <tr valign="middle">

                        <td width="35%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif" color="#FF0000">Invalid Access</font></td>

                      </tr>

                    </table>

                    <?php

                      }

                    ?>

                      <table width="70%" border="0" cellspacing="4" cellpadding="4" align="center">

                        <tr valign="middle">

                          <td width="35%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Login

                            Name</font></td>

                          <td width="65%">

                            <input type="text" name="username">

                          </td>

                        </tr>

                        <tr valign="middle">

                          <td width="35%"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Password</font></td>

                          <td width="65%">

                            <input type="password" name="password">

                          </td>

                        </tr>

                        <tr valign="middle">

                          <td width="35%">&nbsp;</td>

                          <td width="65%">

                            <div align="left">

                              <input type="submit" name="Submit" value=" -- Login --" class="backgroundtd">

                              &nbsp;&nbsp;&nbsp;&nbsp;</div>

                          </td>

                        </tr>

                      </table>

                    </td>

                  </tr>

                </table>

                <div align="center"></div>

              </form>

            </td>

            <td width="15%">&nbsp;</td>

          </tr>

        </table>

        <br>

      </div>

    </td>

  </tr>

</table>

<?php include("admin.footer.php") ?>

</body>

</html>



