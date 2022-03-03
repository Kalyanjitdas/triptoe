<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_wishlist']))
    {
       
        if(isset($_SESSION['wishlist']))
        {
           $myitem=array_column($_SESSION['wishlist'],'Item_name');
           if(in_array($_POST['Item_name'],$myitem))
           {
               echo"<Script>
               alert('Items already added');
                window.location.href='add_to_wishlist.php';
               </Script>";
           }
           else{
           $count= count($_SESSION['wishlist']);
           $_SESSION['wishlist'][$count]=array('Item_name'=>$_POST['product_name'],'price'=>$_POST['product_price'],
           'discount'=>$_POST['product_price_discounted'],'quantity'=>$_POST['quantity'],'image'=>$_POST['product_image']
           );  
           echo"<Script>
               alert('Items  added');
                window.location.href='my_wishlist.php';
               </Script>"; 
              
            }                
        }
        else
        {
            $_SESSION['wishlist'][0]=array('Item_name'=>$_POST['product_name'],'price'=>$_POST['product_price'],
            'discount'=>$_POST['product_price_discounted'],'quantity'=>$_POST['quantity'],'image'=>$_POST['product_image']
            );         
            echo"<Script>
               alert('Items  added');            
                window.location.href='my_wishlist.php';
               </Script>";
                            
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['wishlist'] as $key => $value)
        {
            if($value['Item_name']==$_POST['Item_name'])
            {
                unset($_SESSION['wishlist'][$key]);
                $_SESSION['wishlist']=array_values($_SESSION['wishlist']);
                echo"
                <script>
                alert('Item Removed');
                window.location.href='my_wishlist.php';
                </script>
                ";
            }
            
        }
    }
}

?>