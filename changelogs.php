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
    $META_TITLE = "Squad Bot | Changelogs";
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
                        Change Logs
                    </h1>
                    <p class="lg:w-1/2 w-full leading-relaxed text-opacity-80">
                        Get the latest info about Squad Bots's Updates.
                    </p>
                    <br />
                    <div class="flex justify-center">
                        <button
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                            <a href="#latest-version">Latest</a>
                        </button>
                        <button
                            class="ml-4 inline-flex text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">
                            <a href="#version-2.5-earlier">v2.5.0 &amp; Earlier</a>
                        </button>
                    </div>
                </div>
                <div id="all">
                    <div class="flex flex-wrap -m-4" id="latest-version">
                        <h1
                            class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                            <br />Latest Version [v3.0.0-stable]
                        </h1>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                    What's New?
                                </h2>
                                <p class="leading-relaxed text-base">
                                    In this update we have removed all pay-locked content. This means every command,
                                    limit, and restriction setup requiring users to pay for Squad Bot Premium has been
                                    removed.
                                    <br>
                                    We completely reworked the Ticket System. Now the setup runs a creation promot which
                                    will create a message users react to via clicking a button. All emojis were replaced
                                    with buttons within the ticket system.
                                </p>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                    Other Changes
                                </h2>
                                <p class="leading-relaxed text-base">
                                    Fixed some bugs in the, Ticket System and Reaction Role System.<br>Made minor
                                    adustments to make things smoother with button interaction and general usage.
                                </p>
                            </div>
                        </div>
                        <div class="xl:w-1/3 md:w-1/2 p-4">
                            <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                    Important Info
                                </h2>
                                <p class="leading-relaxed text-base">
                                    We are aware of some issues with the new ticket system and are working to fix them.
                                    We also will be fully updating the bot to discord js v13-stable soon.
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-wrap -m-4" id="version-2.5-earlier">
                            <h1
                                class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white text-center w-full mx-auto">
                                <br />Version 2.5.0 &amp; Earlier
                            </h1>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
                                <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
                                    <h2 class="text-lg text-indigo-400 font-medium title-font mb-2">
                                        Information
                                    </h2>
                                    <p class="leading-relaxed text-base">
                                        We saddly do not have a complete record of any version older then v3.0.0. Most
                                        of the updates prior to this would've inculded commands such as reaction roles,
                                        backup system, etc.
                                    </p>
                                </div>
                            </div>
                            <div class="xl:w-1/3 md:w-1/2 p-4">
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