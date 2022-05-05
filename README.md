# PHPWine-Boilerplate
PHPWine Boilerplate with bootstrap front end framework grid

```PHP
 // Child Boilerplate wine v1.3.1.0 
 // Bootstrap container 
 
 echo div([ CHILD => [

    ['div', ATTR  => ['class'=>'container']
          , VALUE => [ div(function() {
            
           $wine_touched = '';

           $wine_touched .= div([ CHILD => [
                
             ['h1', VALUE => ['Child 1 Heading']],
             ['p',  VALUE => ['Child 1 Descript']]

             ]
            ],[['class'],['col-12']]);

            $wine_touched .= div([ CHILD => [
              
             ['h1', VALUE => ['Child 2 Heading']],
             ['p',  VALUE => ['Child 2 Descript']]

             ]
            ],[['class'],['col-12']]);
             
          return ($wine_touched);
            
        },[['class'],['row']])]
    ]
  ]
 ],[['class'],['fluid-container']]);
 
```

```HTML
<!-- End result -->
<div class="fluid-container">
<div class="container">

  <div class="row">

   <div class="col-12">
     <h1>Child 1 Heading</h1>
     <p>Child 1 Descript</p>
   </div>
   <div class="col-12">
     <h1>Child 2 Heading</h1>
     <p>Child 2 Descript</p>
   </div>
   
  </div>

</div>
</div>
```

<h4> Class Child element VALUE Layered array @  wine v 1.3.1.1</h4>

```PHP
   echo div([ CHILD => [

   ['div', ATTR  => ['class' => 'container']
         , VALUE => [(new Class {

            public function rendered_output() {

              return  wine_extract([
                
                $this->layer_first_column(),
                $this->layer_second_column()
    
              ]);
    
            }

            private function layer_first_column() {
                
                return div([ CHILD => [

                    ['h3'],
                    ['p']
                   
                ]],[['class'],['col-12']]); 

            }

            private function layer_second_column() {
                
                return div([ CHILD => [

                    ['h3'],
                    ['p']
                   
                ]],[['class'],['col-12']]); 

            }
            
         })->rendered_output()],[['class'],['row']]
   
   ]
   
   ]],[['class'],['fluid-container']]);
```
```HTML
<!-- End result -->
<div class="fluid-container">
 <div class="container">
  
  <!-- col 1 -->
  <div class="col-12">
    <h3></h3>
    <p></p>
  </div>

  <!-- col 2 -->
  <div class="col-12">
    <h3></h3>
    <p></p>
  </div>
  
</div>
</div>
```
```PHP
 // Loop VALUE childElement array must be string! 
 echo div([ CHILD => [
    
    ['div', VALUE => [ (new class {

      public array $data = [1,2,3,4];

      public function pp() {

        $bb = []; foreach($this->data as $val ) {

          $bb[] = $val;
           
        }

        return implode('',  $bb);
    
      }

    })->pp()]]

  ]]);
  ```
  
```HTML
 <!-- end result -->
<div>
 <div> 1234 </div>
</div>
```
 
  
