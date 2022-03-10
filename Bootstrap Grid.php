<?php 
 ########################################################################################
 /**
  * BOOTSTRAP 5.1 PHPWine Template Column / Grid | 
  * PHPHtml-Optimizer
  * @version v1.2.0.6 
  * @since 02.21.2022
  *
  * Would you like me to treat a cake and coffee ?
  * Become a donor, Because with you! We can build more...
  * Donate :
  * GCash  : +639650332900
  * Paypal account : syncdevprojects@gmail.com
  **/
 ########################################################################################

 /***
  * BreakPoint: 
  *
  * xs col-? | sm col-sm-? | md col-md-? | lg col-lg-? | xl col-xl-? | xxl col-xxl-?
  * 
 ***/

_xSTYLE(' * { text-align: center; } ');


_xh1('Grid system');
_xp('','Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, six default responsive tiers, Sass variables and mixins, and dozens of predefined classes.');

echo __HR();

_div( [['class'],['fluid-container']] );

_xh1('2 COLUMN');

$grid_system =  ELEM( 'div', [
      
    CHILD => [
        
        ['div' , ATTR  => ['class'=> 'row']
               , INNER => [

                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 1' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 2' ] ]
                 
            ] 
        ]
     
    ]

  ] , [['class'],['container']] );
 
// execution 
echo $grid_system;

xdiv('END-OF-Grid system');
 

_xh1('3 COLUMN');
echo __HR();

_div( [['class'],['fluid-container']] );

$grid_system =  ELEM( 'div', [ CHILD => [
        
        ['div' , ATTR  => ['class'=> 'row']
               , INNER => [

                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 1' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 2' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 3' ] ]
                 
            ] 
        ]
     
       ]

] , [['class'],['container']] );
 
// execution 
echo $grid_system;

xdiv('END-OF-Grid system');


_xh1('4 COLUMN');
echo __HR();

_div( [['class'],['fluid-container']] );

$grid_system =  ELEM( 'div', [ CHILD => [
        
        ['div' , ATTR  => ['class'=> 'row']
               , INNER => [

                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 1' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 2' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 3' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 4' ] ]
                 
            ] 
        ]
     
       ]

] , [['class'],['container']] );
 
// execution 
echo $grid_system;

xdiv('END-OF-Grid system');


_xh1('5 COLUMN');
echo __HR();

_div( [['class'],['fluid-container']] );

$grid_system =  ELEM( 'div', [ CHILD => [
        
        ['div' , ATTR  => ['class'=> 'row']
               , INNER => [

                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 1' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 2' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 3' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 4' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 5' ] ]
                 
            ] 
        ]
     
       ]

] , [['class'],['container']] );
 
// execution 
echo $grid_system;

xdiv('END-OF-Grid system');

_xh1('6 COLUMN');
echo __HR();

_div( [['class'],['fluid-container']] );

$grid_system =  ELEM( 'div', [ CHILD => [
        
        ['div' , ATTR  => ['class'=> 'row']
               , INNER => [

                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 1' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 2' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 3' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 4' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 5' ] ],
                 [ 'div', 'ATTR' => ['class' => 'col'] , VALUE => [ 'col 6' ] ]
                 
            ] 
        ]
     
       ]

] , [['class'],['container']] );
 
// execution 
echo $grid_system;

xdiv('END-OF-Grid system');
 

echo __BR();
echo __HR();
echo __BR();




?>

<?php require ('footer.php'); ?>