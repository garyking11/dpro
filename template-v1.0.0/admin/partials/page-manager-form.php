        <p>
        	<ul class="nav-sidebar">
            <li><a href="/admin/index.php">Page Manager&nbsp;&nbsp;</a> &bull;</li>
            <li><a href="">Artist Manager&nbsp;&nbsp;</a> &bull;</li>
            <li><a href="">Studio Manager&nbsp;&nbsp;</a> &bull;</li>            
            <li><a href="">Product Manager&nbsp;&nbsp;</a> &bull;</li>
            <li><a href="">Media Manager&nbsp;&nbsp;</a> &bull;</li>
            <li><a href="">Users&nbsp;&nbsp;</a> </li>
            
            </ul>
        </p>


<div id="page-data" class="row-fluid">
    
    <div class="span6">
        
        <form id="page-manager-form" novalidate><!--data-ng-controller="adminControllers" -->
        
            <!--<button class="btn-save-all" data-ng-click='ValidateSave();' >Save All</button> -->
                <div><button class="btn btn-primary" data-ng-click='AddPage()'><i class="fa fa-plus"></i> New</button>
                
		            <button class="btn btn-success" data-ng-click='ValidateSave();' ><i class="fa fa-floppy-o"></i></button>
                <button class="btn btn-warning" data-ng-click="RemovePage($index)"><i class="fa fa-trash"></i></button></div>                
              
                
             <!--<div>{{msgs}} </div>
             
             <li class="info" data-ng-repeat="msg in msgs"> {{ msg }} </li>              
             <li class="err" data-ng-repeat="error in errors"> {{ error}} </li>-->
             
                  <h2>Pages</h2>
                  
                  <ul class="page-data"> 
                       
                      <li data-ng-repeat="page in pageData.page_data">
                        
                            <label>Name</label>
                            <input type="text" class="validate" data-ng-model="page.name" placeholder="Page Name">
                              
                            <label>URL</label>                  
                            <input type="text" data-ng-model="page.url"  placeholder="URL">
                            
                            <label>Title</label>
                            <input type="text" class="validate" data-ng-model="page.title" placeholder="Content One">
                              
                            <label>Block One</label>
                            <textarea class="validate" data-ng-model="page.block1" placeholder="Block One"></textarea>
                                              
                            <label>Block Two</label>                                    
                            <textarea class="validate" data-ng-model="page.block2" placeholder="Block Two"></textarea>
                            
                            <label>Block Three</label>
                            <textarea class="validate" data-ng-model="page.block3" placeholder="Block Three"></textarea>                 
                                
                                <h3>Items</h3>   
                                                
                                <ul class="page-data"> 
                            
                                    <li data-ng-repeat="item in page.items">
                                      <input type="text" data-ng-model="item.item_content"  placeholder="List Item">                     
                                    </li> 
                                    
                                </ul>  
                       </li>
                            
                   </ul>     

                   
          </form>                          
      </div><!-- end span6 -->
     
      <div class="span6">
 			
      <h3>Select page</h3>       
      
           <ul> 
          
           <li data-ng-repeat="page in pageData.page_data">
              <a data-ng-click="RemovePage($index)"><i class="fa fa-trash"></i></a>&nbsp;<a href="">{{ page.name }}</a>
             
									<!--  <ul class="data-list" >
                  	<li data-ng-repeat="item in page.items">
                    <span data-ng-model="item.item_content">{{ item.item_content }}</span>
                    </li>
                   </ul>-->
              
           </li> 

          </ul>
          
				<h3>Page Content</h3> 
        
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
   
