/**
 * Created by Administrator on 2017/11/3.
 */
$(function(){
    //点击添加商品
    $("#addshopsubmits").click(function () {
         var title = $("#title").val();
         var price = $("#price").val();
         var color = $("#color").val();
         var size = $("#size").val();
         var detail = $("#detail").val();
         var stock = $("#stock").val();
        //alert($("#product_img").val())
         var img = $("#product_img").val().substr($("#product_img").val().lastIndexOf("\/")+1);
           $.ajax({
               data: {title: title,price:price,color:color,size:size,detail:detail,stock:stock,img:img},
               type: "POST",
              url: shopUrl,
              error: function (msg) {
                  alert("商品添加失败了");
                },
               success: function (data) {
                alert("商品添加成功了");
                   window.location.reload();
              }
           });
        });

});