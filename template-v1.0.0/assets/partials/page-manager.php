<div class="edit-dashboard row-fluid" >

    <div class="span3">

        <h2>Admin</h2>

        <p><strong>Dashboard</strong></p>
        <a class="list-group-item" href="#/add-page" class="">
            <i class="fa fa-plus"></i>
            <strong>Add Page</strong></a>
        </a>



        <admin-item-list></admin-item-list>




    </div><!-- end span3 -->
    <div class="span9">
        <div class="span6">


      <p>Additional Admin Tasks go here</p>

      </div><!-- end span6 -->

      <div class="span6">

         <!-- <p><a href="#/add-page" class=""><i class="fa fa-plus"></i> <strong>Add Page</strong></a></p>
<h2>Edit Page</h2>

     <ul>

     <li data-ng-repeat="page in pages.page_data">
     
        <a data-ng-click="RemovePage($index)"><i class="fa fa-trash"></i></a>&nbsp;

        <a href="#/admin/{{ $index }}">
     				
            {{ page.name }}
             
        </a>
       
     </li> 

    </ul>-->
    
    <h2>Sidebar Right</h2>

    
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
   
