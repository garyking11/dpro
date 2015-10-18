<h2 class="data-heading">{{ pageData.page_data[0].name }}</h2> 

     <div>{{ pageData.page_data[0].title }}</div>  
     <div>{{ pageData.page_data[0].block1 }}</div>
     <div>{{ pageData.page_data[0].block2 }}</div>
     <div>{{ pageData.page_data[0].block3 }}</div>     

<ul>
    <li data-ng-repeat="item in pageData.page_data[0].items">
       {{ item.item_content }}           
   </li> 
</ul>
        