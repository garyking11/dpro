<!--<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container">


        <ul class="nav " ng-controller="DataController">

                <li  class="nav navbar-nav navbar-right" ng-repeat="page in pageData.page_data">

                    <a class="dropdown-toggle"
                       data-toggle="dropdown"
                       href="#/page/{{ $index }}"
                       role="button"
                       aria-expanded="false">{{ page.name }}</a>


                <li  class="nav navbar-nav navbar-right"><a href="#/admin">&nbsp;Admin</a></li>


                </ul>
        </div>

    </nav>


<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        ...
    </div>
</nav>
<!--<div class="navbar-header">




<!-- Collect the nav links, forms, and other content for toggling -->

        <nav class="navbar ">

            <div class="container-fluid" style="margin: 0 auto; max-width: 1200px;">

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav" ng-controller="DataController">

                            <li ng-repeat="page in pageData.page_data">

                                <a href="#/page/{{ $index }}">{{ page.name }}

<!--                                    <span class="sr-only">(current)</span>-->

                                </a>
                            </li>
                            <li  class="nav navbar-nav navbar-right"><a href="#/admin">&nbsp;Admin</a></li>


                           <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>-->
                        </ul>


                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->
        </nav>




<!--<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">AngularJS Weather</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        </ul>
    </div>
</nav>-->