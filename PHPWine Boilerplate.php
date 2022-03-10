<?php 

/**
 * @copyright (c) 2021 PHPWine\VanillaFlavour v1.2.0.5 Cooked by nielsoffice 
 *
 * MIT License
 *
 * PHPWine\VanillaFlavour v1.2.0.5 free software: you can redistribute it and/or modify.
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHPLibrary PHPWine\VanillaFlavour
 * @package    PHPHtml-Optimizer | CodeDesigner/Enhancer | Advance Form Builder | Handling Form Validation | Form Validation v2 | BASIC-Authentication | HtmlMinifier
 *            
 *            
 * @author    Leinner Zednanref <nielsoffice.wordpress.php@gmail.com>
 * @license   MIT License
 * @link      https://github.com/nielsofficeofficial/PHPWine
 * @link      https://github.com/nielsofficeofficial/PHPWine/blob/PHPWine_Vanilla_Flavour/README.md
 * @link      https://www.facebook.com/nielsofficeofficial
 * @version   v1.2.0.5
 * @since     02.15.2022
 * 
 * Would you like me to treat a cake and coffee ?
 * Become a donor, Because with you! We can build more...
 * Donate:
 * GCash : +639650332900
 * Paypal account: syncdevprojects@gmail.com
 *
 */

 ########################################################################################
 /**
  * BIOLERPLATE PHPWine : COFFEE NO SUGAR
  * PHPHtml-Optimizer
  * @version v1.2.0.2 
  * @since 02.15.2022
  *
  * Would you like me to treat a cake and coffee ?
  * Become a donor, Because with you! We can build more...
  * Donate :
  * GCash  : +639650332900
  * Paypal account : syncdevprojects@gmail.com
 **/
 ########################################################################################

 _div( [['id','class'],['main-container','fluid-container']] );
  
  // My attributes 
  $attributes = [
      
    // attribute key
    // attribute val
    [],
    []

  ];
  
  $child_container    =  ELEM('h1', 'WLECOME !')
                        .ELEM('p' , 'Thank you for visiting Us!');

  $boilerplate        = _xdiv( 'child-container' ,

    ELEM('div', $child_container , $attributes , null, 'row' )
   
   , attr  :  [ ]
   , class : 'container'
   , label : 'END-OF-child-container'
   , assoc :  FUNC_ASSOC  
    
  );
 
  // execution 
  echo $boilerplate;

 xdiv('END-OF-main-container');

 ########################################################################################
 /**
  * BIOLERPLATE PHPWine w/CHILD Elements array : BLACK COFFEE
  * PHPHtml-Optimizer
  * @version v1.2.0.2 
  * @since 02.15.2022
  *
  * Would you like me to treat a cake and coffee ?
  * Become a donor, Because with you! We can build more...
  * Donate:
  * GCash : +639650332900
  * Paypal account: syncdevprojects@gmail.com
 **/
########################################################################################

_div( [['id','class'],['product-section','fluid-container']] );
  
 // My attributes 
 $attributes = [
    
  // attribute key
  // attribute val
  ['class'],
  ['col-md-6']

 ];

 $child_values    =  ELEM('h1', 'WLECOME !')
                    .ELEM('p' , 'Thank you for visiting Us!');

 $boilerplate     = _xdiv(  FUNC_ASSOC , 
                     
    ELEM('div', 
    
    [
                    
      'CHILD' => [
       
        ['div', 'ATTR' => [ 'class' => 'col-md-6' ] , 'VALUE'=> [  $child_values  ] ]
   
      ]
  
   ]

 , [['class'],['row']] )

 , attr  :  [ ]
 , class : 'container'
 , label : 'END-OF-child-container' 
  
);

// execution 
echo ( !empty( $boilerplate ) ) ?  $boilerplate : false;

xdiv('END-OF-product-section');

 ########################################################################################
  /**
  * BIOLERPLATE PHPWine w/CHILD Elements array : VANILLA ICE
  * PHPHtml-Optimizer
  * @version v1.2.0.2 
  * @since 02.15.2022
  *
  * Would you like me to treat a cake and coffee ?
  * Become a donor, Because with you! We can build more...
  * Donate:
  * GCash : +639650332900
  * Paypal account: syncdevprojects@gmail.com
 **/
 ########################################################################################

_div( [ ['id', 'class'],['testimonial-section','fluid-container'] ] );

 $attributes = [
    
  // attribute key
  // attribute val
  [],
  []

 ];

 $child_values    =  ELEM('h1', 'My Name')
                    .ELEM('p' , 'Testimonial descriptions');

 $boilerplate     = _xdiv( FUNC_ASSOC , $child_values
 
  , attr  :  [ ]
  , class :  ''
  , label :  '' 
  
 );

 $parent_container_attr = [
    
  ['class'     ],
  ['container' ]

 ];

 echo ELEM('div', [  
      
       'CHILD' => [ ['div', 'ATTR' => ['class' => 'row'] , 'VALUE'=> [ $boilerplate ] ] ] 
    
      ] , $parent_container_attr );

xdiv('END-OF-testimonial-section');

########################################################################################
 /**
  * BIOLERPLATE PHPWine w/CHILD Elements array : FRUIT CAKE 
  * PHPHtml-Optimizer
  * @version v1.2.0.2 
  * @since 02.15.2022
  *
  * Would you like me to treat a cake and coffee ?
  * Become a donor, Because with you! We can build more...
  * Donate:
  * GCash : +639650332900
  * Paypal account : syncdevprojects@gmail.com
 **/
 ########################################################################################

 _div( [ ['id', 'class'],['fruitCake-section','fluid-container'] ] );

 $val_fruitCake_small   = ELEM('h1' , 'Small Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');
 
 $val_fruitCake_medium  = ELEM('h1' , 'Medium Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');

 $val_fruitCake_large   = ELEM('h1' , 'Large Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');

 _xdiv( null , [

    'CHILD' => [
        
       ['div' , ATTR => ['class'=>'row'], VALUE => [  $val_fruitCake_small  ] ],
       ['div' , ATTR => ['class'=>'row'], VALUE => [  $val_fruitCake_medium ] ],
       ['div' , ATTR => ['class'=>'row'], VALUE => [  $val_fruitCake_large  ] ]
        
    ]

 ]
 
 , attr : [ ['class'],['container'] ] );

xdiv('END-OF-fruitCake-section');

########################################################################################
 /**
  * BIOLERPLATE PHPWine w/CHILD Elements array : MOCHA LATTE
  * PHPHtml-Optimizer
  * @version v1.2.0.2 
  * @since 02.15.2022
  *
  * Would you like me to treat a cake and coffee ?
  * Become a donor, Because with you! We can build more...
  * Donate:
  * GCash : +639650332900
  * Paypal account: syncdevprojects@gmail.com
 **/
 ########################################################################################

 _div( [ ['id', 'class'],['mocha-section','fluid-container'] ] );

  // My attributes 
  $attributes = [
      
   // attribute key
   // attribute val
   [],
   []

 ];
 
 $val_mocha_latte       = ELEM('h1' , 'Mocha latte with Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');
 
 $val_fruitCake_medium  = ELEM('h1' , 'Medium Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');

 $val_fruitCake_large   = ELEM('h1' , 'Large Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');

 $val_fruitCake_child_large   = [

   'CHILD' => [
       
      [ 'div' , ATTR => ['class'=>'row'], VALUE => [  $val_fruitCake_large  ] ],
      [ 'div' , ATTR => ['class'=>'row'], VALUE => [ 'Hello' ] ],
      [ 'div' , ATTR => ['class'=>'row'], VALUE => [ 'World' ] ]
       
   ]

 ];

 _xdiv( null , [

    'CHILD' => [
        
       [ 'div' , ATTR  => [  'class'=>'row'  ] , VALUE => [  _xdiv( 'mocha-content' ,

          ELEM( 'div' , $val_mocha_latte , $attributes  )
      
          , attr  :  [ ]
          , class : 'col-md-12'
          , label : 'END-OF-mocha-content'
          , assoc :  FUNC_ASSOC  
       
        ) ] 

       ],
       [ 'div' , ATTR => [ 'class'=>'row' ] , VALUE => [  $val_fruitCake_medium ] ],
       [ 'div' , ATTR => [ 'class'=>'row' ] , VALUE => [  ELEM( 'div' , $val_fruitCake_child_large ) ] ]
        
    ]

 ] 
 
 , attr : [ ['class'],['container'] ] );

 xdiv('END-OF-mocha-section');

 ########################################################################################
 /**
  * BIOLERPLATE PHPWine w/CHILD Elements array : SLICE BREAD 
  * PHPHtml-Optimizer
  * @version v1.2.0.2 
  * @since 02.15.2022
  *
  * Would you like me to treat a cake and coffee ?
  * Become a donor, Because with you! We can build more...
  * Donate:
  * GCash : +639650332900
  * Paypal account: syncdevprojects@gmail.com
 **/
 ########################################################################################

 _div( [ ['id', 'class'],['bread-section','fluid-container'] ] );

  // My attributes 
  $attributes = [
      
   // attribute key
   // attribute val
   [],
   []

 ];
 
 $val_mocha_latte       = ELEM('h1' , 'Mocha latte with Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');
 
 $val_fruitCake_medium  = ELEM('h1' , 'Medium Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');

 $val_fruitCake_large   = ELEM('h1' , 'Large Fruit Cake')
                         .ELEM('p'  , 'Enjoy your order fruit cake!');

 _xdiv( null , [

    'CHILD' => [
        
       [ 'div' , ATTR  => [  'class'=>'row'  ] , VALUE => [  _xdiv( 'bread-content' ,

         ELEM( 'div' , $val_mocha_latte , $attributes  )
      
          , attr  :  [ ]
          , class : 'col-md-12'
          , label : 'END-OF-mocha-content'
          , assoc :  FUNC_ASSOC  
       
        ) ] 

       ],
       [ 'div' , ATTR => [ 'class'=>'row' ] , VALUE => [  $val_fruitCake_medium ] ],
       [ 'div' , ATTR => [ 'class'=>'row' ] , VALUE => [  $val_fruitCake_child_large ] ]
        
    ]

 ] 
 
 , attr : [ ['class'],['container'] ] );


 xdiv('END-OF-bread-section');


