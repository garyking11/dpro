<div class="ft container">
        <h3>Quick Links</h3>

    <div class="add-dashboard">

        <ul class="nav nav-pills" ng-controller="DataController">

            <li ng-repeat="page in pageData.page_data">

                <a href="#/page/{{ $index }}">{{ page.name }}</a>

            </li><li><a href="#/admin">&nbsp;Admin</a></li>

        </ul>

    </div>
</div>