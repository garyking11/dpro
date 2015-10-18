<!-- TODO Add conditional show standard or admin sidebar -->

<div ng-controller="DataController">

    <h3>Edit Page</h3>

    <div data-ng-repeat="page in pageData.page_data">

        <a class="" data-ng-click="RemovePage(pageData.page_data.indexOf(page))"
           style="float: left; display: inline-block; z-index: 10; cursor: pointer;">
            <i class="fa fa-trash "></i>
        </a>

        <a class="list-group-item clearfix" href="#/admin/{{pageData.page_data.indexOf(page)}}"
           style="
          margin-left: 20px;">
            {{ page.name }}
        </a>


    </div>
</div>

<!--<div class="list-group">
    <ul> 
    
       <li class="list-group-item" data-ng-repeat="page in pageData.page_data">
          <a data-ng-click="RemovePage($index)">
              <i class="fa fa-trash"></i></a>&nbsp;
          <a href="#/admin/{{pageData.page_data.indexOf(page)}}">
              {{ page.name }}
          </a>
         
       </li> 
    
    </ul>
</div>
 -->
<!--    <h3>Page Content</h3>

<div class="list-group">
    <ul> 
    
       <li class="list-group-item" data-ng-repeat="page in pageData.page_data">
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
</div>-->