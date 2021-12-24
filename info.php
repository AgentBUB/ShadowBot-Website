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
    $META_TITLE = "Squad Bot | Site Info";
    require_once("modules/meta.php");
    ?>
</head>

<body oncontextmenu="return false">
    <?php
    include_once('./modules/header.php');
    ?>
    <hr />
    <section class="text-gray-400 body-font bg-gray-900" style="height: 50em;">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">
                        Site Information
                    </h1>
                    <br />
                    <div class="md:w-1/2 p-6">
                        <p class="leading-relaxed text-base">
                            This site is to provide information about the Agent Squad&trade; Productions Discord Bot,
                            Squad Bot. All information on the page is subject to change at anytime. Information may not
                            always be 100% up to date as the ASP Team has a lot on their hands. Hopefully you found
                            &amp; can find this site helpful for the Squad Bot.
                            <br><br>
                            For more information about Agent Squad&trade; Productions please head to <a
                                href="https://agentsquad.org/aboutus" target="_blank">the ASP about us page</a>.
                            <br><br>
                            Please note that this site came from the <a
                                href="https://github.com/Simpleboy353/Infinity-Website" target="_blank">Inferno Bot Team
                                Template</a>. We
                            appriciate their open source temaplte!
                        </p>
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