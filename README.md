# PHPWine-Boilerplate
PHPWine Boiler plate with bootstrap front end framework grid

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

```PHP
 // Loop VALUE childElement array must be string! 
 echo div([ CHILD => [
    
    ['div', VALUE => [ (new class {

      public array $data = [1,2,3,4];

      public function tt() {

        $bb = []; foreach($this->data as $val ) {

          $bb[] = $val;
           
        }

        return implode('',  $bb);
    
      }

    })->tt()]]

  ]]);
  ```
  
```HTML
 <!-- end result -->
 1234
```
 
  
