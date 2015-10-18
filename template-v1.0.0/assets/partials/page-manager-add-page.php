<div class="edit-dashboard row-fluid" >

    <div class="span3">
        <h2>Page Manager</h2>
        <p><a href="#/admin" class=""><strong>Back to Dashboard</strong></a></p>
        <a class="list-group-item" href="#/add-page" class="">
            <i class="fa fa-plus"></i>
            <strong>Add Page</strong></a>
        </a>

    </div><!-- end span3 -->
    <div class="span9">
        <div class="span6">

    <form name="page-manager-form"  method="post" novalidate>

        <button class="btn btn-success" data-ng-click='SaveAll();' ><i class="fa fa-floppy-o"></i> Save</button>

        <div data-ng-model="page_data">
    
            <h2>Add New Page</h2><!-- {{ pageTitle }} -->
    

                <label>Name</label>

                <input type="text" ng-model="name" name="name" required minlength="3" class="form-control" placeholder="Page Name">

                <div ng-messages="page_manager_form.name.$error" ng-messages-multiple>

                    <div class="alert alert-danger" ng-message="required">Please enter a name for your page</div>
                    <div class="alert alert-danger" ng-message="minlength">Name is too short</div>
                </div>


            <div  class="form-group">
                <label>URL</label>

                <input type="text" ng-model="url" class="form-control" value="" placeholder="URL">

                    <div class="alert"
                         ng-class="{ 'alert-warning' : url.length <  characters, 'alert-danger' : url.length >  characters  }"
                         ng-show="url.length !== 5" >Please enter 5 characters!


                <div ng-show="url.length < characters">You have less than 5 characters</div>
                <div ng-show="url.length > characters">You have more than 5 characters</div>

                    </div><!-- end alert -->

            </div>


<!--       <div ng-repeat=" rule in rules ">{{ rule.rulename }} </div>-->


    
            <div  class="form-group">
                <label>Title</label>
                <input type="text" ng-model="title" class="form-control" placeholder="Content One">
            </div>
    
            <div  class="form-group">
                <label>Block One</label>
                <textarea class="validate form-control" ng-model="block1"  value="" placeholder="Block One"></textarea>
            </div>
    
            <div  class="form-group">
                <label>Block Two</label>
                <textarea class="validate form-control" ng-model="block2"  value="" placeholder="Block Two"></textarea>
            </div>
    
            <div  class="form-group">
                <label>Block Three</label>
                <textarea class="validate form-control" ng-model="block3"  value="" placeholder="Block Three"></textarea>
            </div>

             <h3>Items</h3>
    
                <div  class="form-group">
                    <ul class="page-data">

                        <li>
                            <input type="text"   ng-model="items"  placeholder="List Item" value="" >
                        </li>

                    </ul>
                 </div>
             </div><!-- // model page-data -->

    </form>
    
    </div><!-- span6 -->
    <div class="span6 list-group">

        <!--<p><a href="#/add-page" class=""><i class="fa fa-plus"></i> <strong>Add Page</strong></a></p>-->

 <!--       <h2>Edit Page</h2>

        <div ng-controller="DataController">

            <div class="list-group-item" data-ng-repeat="page in pageData.page_data">

                <a href="#/admin/{{pageData.page_data.indexOf(page)}}">
                    {{ page.name }}
                </a>


            </div>
        </div>-->


        <h2>Page Content</h2>

            <div data-ng-model="page_data" class="admin-page-content">

                <h4  data-ng-bind="name">{{ page_data.name }}</h4>

                <p data-ng-bind="url">{{ page_data.url }}</p>
                <p data-ng-bind="title">{{ page_data.title }}</p>
                <p data-ng-bind="block1">{{ page_data.block1 }}</p>
                <p data-ng-bind="block2">{{ page_data.block2 }}</p>
                <p data-ng-bind="block3">{{ page_data.block3 }}</p>

            <div>

                <ul>
                    <li  data-ng-bind="items" data-ng-repeat="item in page_data.items"> {{ item.item_content }}</li>
                </ul>

        </div><!-- //span6 -->
                </div><!-- end span9 -->

    </div><!-- //row-fluid -->