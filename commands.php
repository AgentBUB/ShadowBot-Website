<!DOCTYPE html>
<html lang="en">
<style>
html,
body {

    margin: 0;

    padding: 0;

    overflow-x: hidden;

}
</style>

<head>
    <?php
    $META_TITLE = "Squad Bot | Commands";
    require_once("modules/meta.php");
    ?>
</head>

<body oncontextmenu="return false">
    <?php
    include_once('./modules/header.php');
    ?>
    <hr />
    <section class="text-gray-400 body-font bg-gray-900">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">
                        Commands
                    </h1>
                    <p class="lg:w-1/2 w-full leading-relaxed text-opacity-80">
                        Squad Bot offers a wide range of commands. Click the category below to view it's commands
                    </p>
                    <br />
                    <div class="flex justify-left">
                        <button
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                            <a href="#backup-commands">Backups</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#channel-commands">Channels</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#fun-commands">Fun</a>
                        </button>
                        <br />
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#info-commands">Information</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#msg-commands">Messages</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#moderation-commands">Moderation</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#other-commands">Other</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#reaction-roles-commands" style="padding: 8px 9px 9px 9px;">React Roles</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#roles-commands">Roles</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#settings-commands">Settings</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#tickets-commands">Tickets</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#utility-commands">Utility</a>
                        </button>
                        <br />
                    </div>
                    <div id="all" style="margin-top: 2em;">
                        <div class="flex flex-wrap -m-4" id="backup-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Backups Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *createbackup
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Create a backup of your server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *listbackup
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        List of all your backups.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *loadbackup
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Load a backup into a server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *removebackup
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Remove a backup from your list of backups.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <a class="flex flex-wrap -m-4" id="channel-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Channel Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *lockdown
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Lockdown a channel so users can't type.
                                        <br><i>Note: It only effects the @everyone tag.</i>
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *slowmode
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Change the slowmode setting for a channel.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *tempchdelete
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Delete the parent channel.<br>
                                        When a user joins this channel, a temporary channel will be created in the
                                        defined category.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *tempchset
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Set the parent channel.<br>
                                        When a user joins this channel, a temporary channel will be created in the
                                        defined category.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *unlockdown
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Un-Lockdown a channel so users can type.
                                        <br><i>Note: It only effects the @everyone tag.</i>
                                    </p>
                                </div>
                            </div>
                        </a>

                        <div class="flex flex-wrap -m-4" id="fun-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Fun Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *8ball
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Ask the magic 8 ball a question.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *cat
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Make a cat picture apear.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *coinflip
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Flip a coin.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *dog
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Make a dog picture apear.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *gnome
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Gnome a user.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *math
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Do a math proplem.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *meme
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Make a meme apear
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *rps
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Play a game of rock, paper, scissors, shoot with the bot.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *slots
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Play a game of slots.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *supremify
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Turn your text Supreme.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="info-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Information Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *botinfo
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Get all the information on the bot.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *djs
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Displays information from the discord.js documentation.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *emojiinfo
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Displays information about the emoji you provide.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *help
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Displays all the commands / command information.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *invite
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Get an invite for the bot and to the support server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *serverinfo
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Displays information about the server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *userinfo
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Displays information about a provided user or the message author.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="msg-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Message Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *dm
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Make the bot DM a user.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *edit
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Edit a message the bot has sent.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *embed
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Create a fancy embeded message
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *pin
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Pin a message in the channel.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *say
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Make the bot say something.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *unpin
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Unpin a message.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="moderation-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Moderation Commands
                            </h1>
                            <br />
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *ban
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Ban a user from the server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *kick
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Kick a user from the server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *mute
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Mute a user.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *pardon
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Remove a warning from a user.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *purge
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Delete 1 to 100 messages from a channel.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *tempban
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Temporarily ban a user from the server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *unban
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Unban a user from the server.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *warn
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Warn a user.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *warnings
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Check a users warnings.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="other-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Other Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *afk
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        The bot will put [AFK] in your name.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *enlarge
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Make a emoji bigger.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *unafk
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        The bot will put [AFK] in your name.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="reaction-roles-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Reaction Roles Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *rrcreate
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        This allows you to create your reaction role
                                        message.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *rrdelete
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        This allows you to delete a reaction role.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="roles-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Roles Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *addrole
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Add a role to a user.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *createrole
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Create a role.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *deleterole
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Delete a role.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *removerole
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Remove a role from a user.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="settings-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Settings Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *clearsettings
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Clear all the settings for your server.
                                        <br><i>Note: Must be server owner.</i>
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *settings
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Change the bot's settings.
                                        <br><i>Note: We recommend looking at the
                                            settings format with the settingsformat
                                            command.</i>
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *settingsformat
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Get a list of all of the settings in the
                                        format for changing them.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="ticket-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Tickets Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *add
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Add a user to a ticket.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *close
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Close a ticket.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *create
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        This allows you to create a Ticket Embed.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *open
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Open a new ticket.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *remove
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Remove a user from a ticket.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *rename
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Rename a ticket.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="utility-commands">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Utility Commands
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *avatar
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Display a users avatar.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *ping
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Check the ping of the bot.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *poll
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Start a poll on something.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *prefix
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Change the bot prefix.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *timer
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Start a timer.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        *uptime
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        Show how long the bot has been on.
                                    </p>
                                </div>
                            </div>
                        </div>
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