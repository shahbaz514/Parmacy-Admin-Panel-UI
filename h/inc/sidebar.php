
<style type="text/css">
    /*#sidebar514 li a i{
        font-size: 24px!important;
    }*/
    .sidebar {
        width: 60px;
    }
    section.content {
      margin-left: 75px; 
    }

@media (max-width: 767px) {
    .sidebar {
        width: auto;
    }
    section.content {
      margin-left: auto; 
    }
    #active514_bar{
        display: none;
    }
}
</style>

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="menu">
                <ul class="list" id="sidebar514" style="overflow: auto!important;">
                    <li class="active" id="active514_bar">
                        <a onclick="mysidebar()">
                            <i class="material-icons">reorder</i>
                            <span style="display: none;" id="sidebar-close">close</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" title="Home">
                            <i class="material-icons">home</i>
                            <span id="span514">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="my-purchases-according-to-products.php" title="My Purchases">
                            <i class="material-icons">payment</i>
                            <span id="span514">My Purchases</span>
                        </a>
                    </li>
                    <li>
                        <a href="my-distributions-according-to-products.php" title="My Posts">
                            <i class="material-icons">local_post_office</i>
                            <span id="span514">My Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="offer-update-informations.php" title="Offer Updates">
                            <i class="material-icons">local_offer</i>
                            <span id="span514">Offer Updates</span>
                        </a>
                    </li>
                    <li>
                        <a href="Archive.php" title="Archive">
                            <i class="material-icons">history</i>
                            <span id="span514">Archive</span>
                        </a>
                    </li>
                    <li>
                        <a href="group management page.php" title="Group Management">
                            <i class="material-icons">view_list</i>
                            <span id="span514">Group Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="drug.php" title="Drug Management">
                            <i class="material-icons">view_list</i>
                            <span id="span514">Drug Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="Transaction Management.php" title="Transaction Management">
                            <i class="material-icons">view_list</i>
                            <span id="span514">Transaction Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="Agent Management.php">
                            <i class="material-icons">view_list</i>
                            <span id="span514">Agent Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="Bargain Management.php" title="Bargain Management">
                            <i class="material-icons">view_list</i>
                            <span id="span514">Bargain Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="group balance.php" title="Group Balance">
                            <i class="material-icons">view_list</i>
                            <span id="span514">Group Balance</span>
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.php" title="My Wish List">
                            <i class="material-icons">favorite</i>
                            <span id="span514">My Wish List</span>
                        </a>
                    </li>
                    <li>
                        <a href="my_debts.php" title="My Payments">
                            <i class="material-icons">payment</i>
                            <span id="span514">My Payments</span>
                        </a>
                    </li>
                    <li>
                        <a href="send_message.php" title="Send A Message">
                            <i class="material-icons">message</i>
                            <span id="span514">Send A Message</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </section>

    <style type="text/css">
        #home{
            display: none;
        }
    </style>


    <script type="text/javascript">
        function mysidebar() {
            var test = document.getElementById("sidebar-close");
            if (test.value == "close") {
                test.value = "open";
                document.getElementById("leftsidebar").style.width = "300px";
                document.getElementById("content").style.marginLeft = "315px";
            } else {
                test.value = "close";
                document.getElementById("leftsidebar").style.width = "60px";
                document.getElementById("content").style.marginLeft = "75px";
            }
        }
    </script>
