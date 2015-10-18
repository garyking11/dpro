
<form id="page-manager-form" data-ng-controller="DataController" novalidate>

   <div id="page-data" class="row">
   
   
    <div class="">
    <button class="btn-save-all" data-ng-click='ValidateSave();' >Save All</button> 
     
     <!--<div>{{msgs}} </div>
     
     <li class="info" data-ng-repeat="msg in msgs"> {{ msg }} </li>              
     <li class="err" data-ng-repeat="error in errors"> {{ error}} </li>-->
     
          <h2>Pages</h2>
          
					<ul class="page-data"> 
               
              <li data-ng-repeat="page in pageData.page_data "><!--track by $index-->
                
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
                    <div><button class="btn-remove" data-ng-click="RemovePage($index)"> Remove </button></div>
           </ul>     
               
         
          <div><button data-ng-click='AddPage()'>Add New</button>  
          <button class="btn-save-all" data-ng-click='ValidateSave();' >Save</button></div>
          
          
          
 <!--         
          <h2>Content</h2>
         <ul class="content-data"> 
               
              <li data-ng-repeat="content in pageData.content_data">
                  
                  <label>Title</label>
                  <input type="text" class="validate" data-ng-model="content.title" placeholder="Content One"    >
                    
                  <label>Block One</label>
                  
                  <input type="text" data-ng-model="content.block1"  placeholder="Block One"   >
                  
                  <button class="btn-remove" data-ng-click="RemoveContent($index)"> Remove </button>
                   
              </li> 
          </ul>
                      
          <div><button data-ng-click='AddContent()'>Add New</button>  
          <button class="btn-save-all" data-ng-click='ValidateSave();' >Save</button></div>
          
          
          
          
          
          -->
          
                   
          <!--<ul class="content-data"> 
               
              <li data-ng-repeat="content in pageData.content_data">
                  
                  <label>Name</label>
                  <input type="text" class="validate" data-ng-model="content.name" placeholder="Content Name"    >
                    
                  <label>URL</label>
                  
                  <input type="text" data-ng-model="content.url"  placeholder="URL"   >
                  
                  <button class="btn-remove" data-ng-click="RemoveContent($index)"> Remove </button>
                   
              </li> 
          </ul>
            
          <div><button data-ng-click='AddContent()'>Add New</button>  
          <button class="btn-save-all" data-ng-click='ValidateSave();' >Save</button></div>-->
          
        	<!--Start office Locations-->
       <!--       <h2>???</h2>
         
      <ul class="location-data"> 

              <li data-ng-repeat="location in pageData.location_data">
                    <label>Office Name </label>                                     
                    <input type="text" class="validate" data-ng-model="location.location_name" placeholder="Office Name" />
                  
                    
                    <label>Office URL </label>
                    <input  type="text" data-ng-model="location.location_url" placeholder="Office URL" />
           
                    
                    <label>Office Phone </label>
                    <input  type="text" data-ng-model="location.location_phone" placeholder="Office Phone" />
                                              

                    <label>Office Address  </label>
                     <input  type="text" data-ng-model="location.location_address" placeholder="Office Address" />
              
                    
                    <label>Office Address cont  </label>
                     <input  type="text" data-ng-model="location.location_address1" placeholder="Office Address1" />
                                                                        
                   
                    <label>Office City ST, Zip </label>
                     <input  type="text" data-ng-model="location.location_cityStZip" placeholder="Office cityStZip" />
             

                  <button class="btn-remove" data-ng-click="RemoveLocation($index)"> Remove </button> 
                  
              </li>
              
          </ul>
          <div><button data-ng-click='AddLocation()'>Add New</button> 
          <button class="btn-save-all" data-ng-click='ValidateSave();' >Save</button></div> 
 
            
    -->
          <!--Start Callouts-->
 <!--         <h2>Misc One</h2>
         
          <ul class="callout-data"> 

              <li data-ng-repeat="callout in pageData.callout_data">
              
                    <label>Callout Name </label>                                     
                    <input type="text" class="validate" data-ng-model="callout.callout_name" placeholder="Callout Name" /> 
             
                    
                    <label>Callout URL </label>
                    <input  type="text" data-ng-model="callout.callout_url" placeholder="Callout URL" /> 
           
                    
                    <label>Callout Subtext</label>
                    <textarea data-ng-model="callout.callout_subtext" placeholder="Callout Subtext" >Subtext</textarea> 
                                                       
                    
                    <button class="btn-remove" data-ng-click="RemoveCallout($index)"> Remove </button> 
                  
              </li>              
          </ul>
          
          <div><button class="add-Field" data-ng-click='AddCallout()'>Add New</button> 
          <button class="btn-save-all" data-ng-click='ValidateSave();' >Save</button></div>    -->
         <!--End Callouts-->
            
         <!--Start Social Networking--> 
  <!--       <h2>Misc Two</h2>
         
          <ul class="socialnetworking-data"> 

              <li data-ng-repeat="social in pageData.socialnetworking_data">
                  <label>Social URL</label>                        
                  <textarea data-ng-model="social.socialnetworking_url" class="validate" placeholder="Social URL" >Subtext</textarea>                                       
                  <button class="btn-remove" data-ng-click="RemoveSocialnetworking($index)"> Remove </button>                  
              </li>              
          </ul>
          
          <div><button data-ng-click='AddSocialnetworking()'>Add New</button> 
          <button class="btn-save-all" data-ng-click='ValidateSave();' >Save</button></div> -->
           <!--End Social Networking-->  
                         
      </div><!-- end span6 -->
     
      <div id="print-data" class="">
      
         <ul> 
      		 <li class="data-heading">Page Content</li>           
           <li class="data-list" data-ng-repeat="page in pageData.page_data">
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
  <!--    <ul>     
          
           <li class="data-heading">???</li>
           <li class="data-list" data-ng-repeat="location in pageData.location_data">
       		 {{ location.location_name }} 
           <span>{{ location.location_url }}</span>
           <span>{{ location.location_phone }}</span>
           <span>{{ location.location_address }}</span>
           <span>{{ location.location_address1 }}</span>
           <span>{{ location.location_cityStZip }}</span>
           </li>
           
      </ul>
      
      <ul>     
          
           <li class="data-heading">???</li>
           <li class="data-list" data-ng-repeat="callout in pageData.callout_data">
       		 {{ callout.callout_name }} 
           <span>{{ callout.callout_url }}</span>
           <span>{{ callout.callout_subtext }}</span>
           </li>
           
      </ul>   
      
      <ul>     
          
           <li class="data-heading">Social Networking</li>
           <li class="data-list" data-ng-repeat="social in pageData.socialnetworking_data">
       		 {{ social.socialnetworking_url }}  
           </li>
           
      </ul>            
      -->
   </div>  
   
   </div>   <!-- end page-data row -->
   
   </form>  