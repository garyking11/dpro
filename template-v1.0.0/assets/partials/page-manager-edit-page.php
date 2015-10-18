<div class="edit-dashboard row-fluid" >

    <div class="span3">
        <h2>Page Manager</h2>
        <p><a href="#/admin" class=""><strong>Back to Dashboard</strong></a></p>
        <a class="list-group-item" href="#/add-page" class="">
            <i class="fa fa-plus"></i>
            <strong>Add Page</strong></a>
        </a>

        <admin-item-list></admin-item-list>

</div><!-- end span3 -->
 <div class="span9">
     <div class="span6">


         <h2>Edit Page</h2>

        <form id="page-manager-form" name="page-manager-form" novalidate>

            <div>


            <div ng-controller="DataController">

            <button class="btn btn-success" data-ng-click="ValidateSave()"><i class="fa fa-floppy-o"></i> Save Changes</button>
            <button class="btn btn-danger" data-ng-click="RemovePage(  pages.page_data[whichItem]  )"><i class="fa fa-trash-o"></i> Remove</button></div>

            </div>



            <!--<div>{{msgs}} </div>

            <li class="info" data-ng-repeat="msg in msgs"> {{ msg }} </li>
            <li class="err" data-ng-repeat="error in errors"> {{ error}} </li>-->

            <div data-ng-model="pages.page_data">

                <h3>{{ pages.page_data[whichItem].name }}</h3>

                <div  class="form-group">
                    <label>{{ pages.page_data[whichItem].name }}</label>
                    <input type="text" class="validate form-control" value="{{ pages.page_data[whichItem].name }}" placeholder="Page Name">
                </div>

                <div  class="form-group">
                    <label>URL</label>
                    <input type="text" class="form-control" value="{{ pages.page_data[whichItem].url}}" placeholder="URL">
                </div>

                <div  class="form-group">
                    <label>Title</label>
                    <input type="text" class="validate form-control"  value="{{ pages.page_data[whichItem].title}}"  placeholder="Content One">
                </div>

                <div  class="form-group">
                    <label>Block One</label>
                    <textarea class="validate form-control"  value="{{ pages.page_data[whichItem].block1}}" placeholder="Block One"></textarea>
                </div>

                <div  class="form-group">
                    <label>Block Two</label>
                    <textarea class="validate form-control"  value="{{ pages.page_data[whichItem].block2}}" placeholder="Block Two"></textarea>
                </div>

                <div  class="form-group">
                    <label>Block Three</label>
                    <textarea class="validate form-control"  value="{{ pages.page_data[whichItem].block3}}" placeholder="Block Three"></textarea>
                </div>
                <h3>Items</h3>

                <div  class="form-group">
                    <ul class="page-data">

                        <li data-ng-repeat="item in pages.page_data[whichItem].items">
                            <input type="text" data-ng-model="item.item_content"  placeholder="List Item" >
                        </li>

                    </ul>
                </div>
            </div>


        </form>
    </div><!-- end span6 -->

    <div class="span6">

         <h2>Page Content</h2>


         <div data-ng-model="pages.page_data" class="admin-page-content">

            <h4>{{ pages.page_data[whichItem].name }}</h4>

            <p>{{ pages.page_data[whichItem].url }}</p>
            <p>{{ pages.page_data[whichItem].title }}</p>
            <p>{{ pages.page_data[whichItem].block1 }}</p>
            <p>{{ pages.page_data[whichItem].block2 }}</p>
            <p>{{ pages.page_data[whichItem].block2 }}</p>

            <div>

                <ul>
                    <li data-ng-repeat="item in pages.page_data[whichItem].items"> {{ item.item_content }}</li>
                </ul>

            </div>

        </div><!-- end admin-page-content -->

    </div> <!-- end span6 -->
    </div><!-- end span9 -->

</div>   <!-- end page-data row-fluid -->

