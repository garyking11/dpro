<?php require $_SERVER['DOCUMENT_ROOT'] . "/assets/includes/header.php"; ?>
<body>

<div id="hd">
    <div class="container">
        <div data-ng-include="'/assets/includes/nav.php'" class="cf"</div>
</div><!-- end hd container -->

</div>

<div class="container">


</div><!-- end container -->

<div class="container">

    <div class="row-fluid page-content">

        <div class="span3  bg-sidebar">

            <h2>Admin Index</h2>
            <h2>Dashboard</h2>

            <a><a class="list-group-item" href="#/add-page" class="">
                    <i class="fa fa-plus"></i>
                    <strong>Add Page</strong></a>
            </a>

            <h3>Edit Page</h3>

            <admin-item-list></admin-item-list>


        </div><!-- end span3 -->

        <div class="span9">

            <div data-ng-view>
                <1-- content goes here -->
            </div>

        </div><!-- end span9-->

    </div><!-- end row-fluid -->

</div><!-- end container -->

<div id="ft" data-ng-include="'/assets/includes/footer.php'" class="container cf">

</div>


</body>
</html>