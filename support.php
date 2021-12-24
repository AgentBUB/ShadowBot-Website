<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: https://discord.agentsquad.org');
exit;
?>

<head></head>

<body>Error accorded while redirecting you to <a
        href="https://discord.agentsquad.org">https://discord.agentsquad.org</a>.
</body>