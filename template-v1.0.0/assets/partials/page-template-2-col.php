<div id="page-content" class="row-fluid">
    
    <div class="span6">

                                  
                      <div data-ng-model="pages.page_data">
                      
                         <h2>{{ pages.page_data[whichItem].name }}</h2>
                        	

                            <p>{{ pages.page_data[whichItem].name }}</p>


                            <p>{{ pages.page_data[whichItem].url}}</p>
                            

                            <p>{{ pages.page_data[whichItem].title}}</p>
                              

                            <p>{{ pages.page_data[whichItem].block1}}</p>
                                              

                            <p>{{ pages.page_data[whichItem].block2}}</p>


                            <p>{{ pages.page_data[whichItem].block3}}</p>
                                


                        
                   </div>     

                   

      </div><!-- end span6 -->
     
      <div class="span6">

          <h3>Items</h3>

          <ul class="page-data">

              <li data-ng-repeat="item in pages.page_data[whichItem].items">
                  <span data-ng-model="item.item_content">{{item.item_content}}</span>
              </li>

          </ul>

      </div><!-- end page-page-content -->
  
   </div> <!-- end span6 --> 
     
</div>   <!-- end page-data row-fluid -->
   
