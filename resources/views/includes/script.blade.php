<script type="text/javascript" >



    jQuery(document).ready(function(){
        $('.addtocart').on('click',function() {

            swal("Success", "Product added to cart","success");
            var id= $(this).data('id');
            console.log(id);
            $.ajax({
                url:'/cart/'+id,
                method:'GET',
                success:function(){

                    location.reload();
                }

            })



        });

    });
</script>