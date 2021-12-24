<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $META_TITLE = "Squad Bot";
    require_once("modules/meta.php");
    ?>
</head>

<body oncontextmenu="return false">
    <?php
    include_once('./modules/header.php');
    ?>
    <hr />
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img alt="Squad Bot Logo" src="./img/SquadBotLogo.png"
                style="width: 20%;border-radius: 16em;margin-bottom: 5em;" />
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
                    Squad Bot
                </h1>
                <p class="leading-relaxed mb-8">
                    The best multi-purpose bot that suits all your needs!
                </p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        <a href="./invite">Add To Discord</a>
                    </button>
                    <button
                        class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                        <a href="./support">Support Server</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section class="text-gray-400 body-font bg-gray-900">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">
                        Features
                    </h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/config.svg"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Configurable Settings
                        </h2>
                        <p class="leading-relaxed text-base">
                            You have the ability to fully customise the bot within your server. It is also change
                            everything from the logs to autorole with our simple settings command.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/modcmd.png"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Moderation Commands
                        </h2>
                        <p class="leading-relaxed text-base">
                            Squad Bot includes plethora of Moderation Commands. Use anything from warnings to bans so
                            you can keep your server clean and maintained!
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/info.png"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Information Commands
                        </h2>
                        <p class="leading-relaxed text-base">
                            Squad Bot has some Information Commands too allowing you to get information about users,
                            your server, and you can make embed announcements!
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/utility.png"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Utility Commands
                        </h2>
                        <p class="leading-relaxed text-base">
                            Squad Bot has tons of utilites, which are going to be very useful
                            for your server. From saying things as the bot to pinning and unpinning
                            messages.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/ticket.png"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Ticket Commands
                        </h2>
                        <p class="leading-relaxed text-base">
                            One of the best features of Squad Bot is the ticket system. Squad Bot has a wonderful ticket
                            system that is almost at the same level of other ticket bots.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/reactroles.png"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Reaction Roles
                        </h2>
                        <p class="leading-relaxed text-base">
                            Squad Bot is fully equip to handle your reaction roles. You simple run the creation command,
                            follow the promots, and boom you have nice reaction roles!
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/backup.png"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Backup System
                        </h2>
                        <p class="leading-relaxed text-base">
                            You can run the command, the bot will backup all your channels, roles, permissions, and
                            recent messages. Then just run the load command in anywhere.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/4 md:w-1/2 p-4">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="./img/fun.png"
                            alt="content" />
                        <h2 class="text-lg text-indigo-400 font-medium title-font mb-4">
                            Fun Commands
                        </h2>
                        <p class="leading-relaxed text-base">
                            Looking for some simple and fun commands to mess around with? Well Squad Bot has those too!
                            From a magic 8 ball to finging you random memes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M8 17l4 4 4-4m-4-5v9"></path>
                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-white">68+</h2>
                        <p class="leading-relaxed">Commands</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-white">110k+</h2>
                        <p class="leading-relaxed">Users</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-white">27+</h2>
                        <p class="leading-relaxed">Servers</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                    <div class="border-2 border-gray-800 px-4 py-6 rounded-lg">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="text-indigo-400 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
                        </svg>
                        <h2 class="title-font font-medium text-3xl text-white">1k+</h2>
                        <p class="leading-relaxed">Channels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <?php
    include_once('./modules/footer.php');
    ?>
</body>

</html>
