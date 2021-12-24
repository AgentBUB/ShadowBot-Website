<head>
    <?php
    if (!isset($META_TITLE)) $META_TITLE = "Squad Bot";
    if (isset($META_KEYWORDS)) $META_KEYWORDS = ", " . $META_KEYWORDS;
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $META_TITLE ?></title>
    <meta property="og:site_name" content="Agent Squad™ Productions">
    <meta name="theme-color" content="#dd3034">
    <meta name="author" content="Agent Squad Productions" />
    <meta name="keywords"
        content="squad bot, discord squad bot, bots, bot, discord bots, squad, squads bots, agent squad bot, agent bot, hosting, discord bot, game server, game hosting, minecraft, minecraft hosting, rust, rust hosting, fivem, fivem hosting, gmod, gmod hosting, budget hosting, premium hosting, cheap hosting, uk, uk hosting, eu, eu hosting, us, us hosting, discord, cheapest hosting, cheapest game host, cheapest minecraft host, best hosting company, lspdfr, discord bots, bots, graphic, graphic design, design, video edditing, edditing, eddits, discord server creation, asp, agent squad, agentsquad, agent-squad-productions, productions, as productions, agent, squad productions, agent bub, agent squad productions<?= $META_KEYWORDS ?>">

    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $META_TITLE ?>">
    <meta property="og:image" content="./img/SquadBotLogo.png" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="agentsquad.org">
    <meta property="twitter:url" content="#">
    <meta name="twitter:title" content="<?= $META_TITLE ?>">


    <!-- Meta Description Tags -->
    <meta name="description"
        content="Squad Bot is a multi-purpose Discord bot that can suit all your needs. Their uses range from fun commands, such as slots, to moderation. It is user-friendly and only requires a basic knowledge of Discord that any user should have. It comes outfitted with a settings command so you can quickly get it ready for use within your server. It is also completely free for all users to use.">
    <?php if (isset($META_DESC)) : ?>
    <meta property="og:description" content="<?= $META_DESC ?>">
    <meta name="twitter:description" content="<?= $META_DESC ?>">
    <?php else : ?>
    <meta property="og:description"
        content="Squad Bot is a multi-purpose Discord bot that can suit all your needs. Their uses range from fun commands, such as slots, to moderation. It is user-friendly and only requires a basic knowledge of Discord that any user should have. It comes outfitted with a settings command so you can quickly get it ready for use within your server. It is also completely free for all users to use.">
    <meta name="twitter:description"
        content="Squad Bot is a multi-purpose Discord bot that can suit all your needs. Their uses range from fun commands, such as slots, to moderation. It is user-friendly and only requires a basic knowledge of Discord that any user should have. It comes outfitted with a settings command so you can quickly get it ready for use within your server. It is also completely free for all users to use.">
    <?php endif ?>

    <!-- Meta Image Tags -->
    <?php if (isset($META_IMAGE)) : ?>
    <meta property="og:image" content="<?= $META_IMAGE ?>">
    <meta name="twitter:image" content="<?= $META_IMAGE ?>">
    <?php else : ?>
    <meta property="og:image" content="./img/SquadBotLogo.png">
    <meta property="twitter:image" content="./img/SquadBotLogo.png">
    <?php endif ?>

    <link rel="shortcut icon" type="image/png" href="./img/SquadBotLogo.png" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/fe5629e38b.js" crossorigin="anonymous"></script>
</head>