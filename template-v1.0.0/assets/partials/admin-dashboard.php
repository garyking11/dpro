


<div class="admin-dashboard row-fluid">
    
    <div class="span6">
&nbsp;

      </div><!-- end span6 -->

      <div class="span6 ">

          <a><a class="list-group-item"> href="#/add-page" class="">
                  <i class="fa fa-plus"></i>
                  <strong>Add Page</strong></a>
          </a>

            <h3>Edit Page</h3>

              <admin-item-list></admin-item-list>



<!--            <ul>
                  <li class="list-group-item"><a href="#/add-page" class="">
                          <i class="fa fa-plus"></i>
                          <strong>Add Page</strong></a>
                  </li>

                  <li class="list-group-item" data-ng-repeat="page in pageData.page_data">

                      <a href="#/admin/{{pageData.page_data.indexOf(page)}}">
                          {{ page.name }}
                      </a>

                  </li>
              </ul>-->

              <ul>
              <li>Projects</li>
              <li>Artists</li>
              <li>Products</li>
              <li>Medias</li>
              <li>Users </li>

          </ul>



           	<h3>Page Content (admin dashboard)</h3>

       <ul>

         <li data-ng-repeat="page in pageData.page_data">
            <strong>{{ page.name }}</strong>
            <span>{{ page.url }}</span>
            <span>{{ page.title }}</span>
            <span>{{ page.block1 }}</span>
            <span>{{ page.block2 }}</span>
            <span>{{ page.block3 }}</span>

                 <ul class="data-list" >
                    <li data-ng-repeat="item in page.items">
                           <span data-ng-model="item.item_content">{{ item.item_content }}</span>
                    </li>
                 </ul>

         </li>
    </ul>
  
   </div> <!-- end span6 --> 
     
</div>   <!-- end page-data row-fluid -->
   
