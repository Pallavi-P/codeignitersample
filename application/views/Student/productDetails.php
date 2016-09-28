<?php 
var productDetails = {'id':ISBNNumber,'qty':finalqty,'price':finalprice,'name':bookTitle};

        var base_url = '<?php echo site_url() ?>';
        $.ajax({
            url: "<?php echo base_url() ?>index.php/user/Add_to_cart/addProductsToCart",
            type: 'POST',
            data:productDetails,
            dataType:'JSON',

?>