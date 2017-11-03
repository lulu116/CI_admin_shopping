/**
 * Created by Administrator on 2017/11/3.
 */
$(function(){
    //点击添加商品
    $("#addshopsubmit").click(function () {
      var title = $("#title").val();
      var price = $("#price").val();
      var color = $("#color").val();
      var size = $("#size").val();
      var detail = $("#detail").val();
      var stock = $("#stock").val();
      var img = $("#img").val();


        $.ajax({
            data: {title: title,price:price,color:color,size:size,detail:detail,stock:stock,img:img},
            type: "POST",
            url: shopUrl,
            error: function (msg) {
                console.log(msg);
            },
            success: function (data) {
                alert(data);
            }
        });
    })
});