<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
  $uri = 'https://';
} else {
  $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: https://discord.com/oauth2/authorize?client_id=740023863479631943&permissions=1513938742527&scope=bot');
exit;
?>

<head></head>

<body>Error accorded while redirecting you to <a
        href="https://discord.com/oauth2/authorize?client_id=740023863479631943&permissions=1513938742527&scope=bot">https://discord.com/oauth2/authorize?client_id=740023863479631943&permissions=1513938742527&scope=bot</a>.
</body>