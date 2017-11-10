<?php
$this->load->view('indexHead');
?>
<!-- 编辑器使用的==配置文件 start -->
<script type="text/javascript" src="<?php echo base_url()?>public/plug/ue/ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/plug/ue/ueditor.all.js"></script>
<!--  编辑器使用的==配置文件 end -->
<!-- BEGIN PAGE -->
<div id="main-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN THEME CUSTOMIZER-->
                <div id="theme-change" class="hidden-phone">
                    <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                </div>
                <!-- END THEME CUSTOMIZER-->
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    商品添加
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">主页</a>
                        <span class="divider">/</span>
                    </li>
                    <li>
                        <a href="#">商品管理</a>
                        <span class="divider">/</span>
                    </li>
                    <li class="active">
                        商品添加
                    </li>
                    <li class="pull-right search-wrap">
                        <form action="search_result.html" class="hidden-phone">
                            <div class="input-append search-input-area">
                                <input class="" id="appendedInputButton" type="text">
                                <button class="btn" type="button"><i class="icon-search"></i> </button>
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->

        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN widget-->
                <div class="widget">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i>
                           商品添加
                        </h4>
                            <span class="tools">
                               <a class="icon-chevron-down" href="javascript:;"></a>
                               <a class="icon-remove" href="javascript:;"></a>
                            </span>
                    </div>
                    <div class="widget-body form">
                        <!-- BEGIN FORM-->
                        <form action="#" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">商品名称</label>
                                <div class="controls">
                                    <input type="text" placeholder="请输入商品名称" id="title" name="title" data-mask="999-99-999-9999-9" class="span5">
                                    <span class="help-inline">必填</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">商品价格</label>
                                <div class="controls">
                                    <input type="text" placeholder="请输入商品价格" id="price" name="price" data-mask="999 99 999 9999 9" class="span5">
                                    <span class="help-inline">必填</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">商品颜色</label>
                                <div class="controls">
                                    <input type="color"  id="color" name="color" data-mask="999/99/999/9999/9" class="span5">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">商品尺寸</label>
                                <div class="controls">
                                    <input type="text" placeholder="请输入商品尺寸" id="size" name="size" data-mask="999.999.999.9999" class="span5">
                                    <span class="help-inline">必填</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">商品详情</label>
                                <div class="controls">
                                    <textarea id="detail" name="detail" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="span5"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">商品库存</label>
                                <div class="controls">
                                    <input type="number" placeholder="" id="stock" name="stock" data-mask="$ 999,999,999.99" class="span5">
                                    <span class="help-inline">必填</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">图片</label>
                                <div class="controls">
                                    <button type="button" id="j_upload_img_btn" class="btn btn-info">多图上传</button>

                                    <ul id="upload_img_wrap"  name="product_img" ></ul>
                                    <!-- 传图片地址值用的 -->
                                    <input type="hidden" id="product_img" name="product_img" >

                                    <!-- 加载编辑器的容器：用来上传图片的，必须要，不然上传的图片会追加到上面的编辑器里面 -->
                                    <ul id="uploadEditor">

                                    </ul>
                                </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="button" id="addshopsubmits" data-mask="99-99-9999" class="span2" value="提交">
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="reset" placeholder="" data-mask="99-99-9999" class="span2" value="重置">
                                </div>
                            </div>

                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END widget-->
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
</div>
<!-- END CONTAINER -->

<?php
$this->load->view('indexFoot');
?>
<!--    管理员点击添加商品-->


    <script>
        var shopUrl = "<?php echo site_url('ProductController/addProduct')?>";
    </script>
    <script type="text/javascript">
        //var ue = UE.getEditor('detail'); //detail是需要加载编辑器的id


        //==========================================================
        // 如何单独上传图片功能
        // 监听多图上传和上传附件组件的插入动作
        // 这里需要实例化一个新的编辑器，防止和上面的编辑器的内容冲突
        var uploadEditor = UE.getEditor("uploadEditor", {
            isShow: false,
            focus: false,
            enableAutoSave: false,
            autoSyncData: false,
            autoFloatEnabled:false,
            wordCount: false,
            sourceEditor: null,
            scaleEnabled:true,
            toolbars: [["insertimage", "attachment"]]
        });
        uploadEditor.ready(function () {
            uploadEditor.addListener("beforeInsertImage", _beforeInsertImage);
        });

        // 自定义按钮绑定触发多图上传和上传附件对话框事件
        document.getElementById('j_upload_img_btn').onclick = function () {
            var dialog = uploadEditor.getDialog("insertimage");
            dialog.title = '多图上传';
            dialog.render();
            dialog.open();
        };

        // 多图上传动作
        function _beforeInsertImage(t, result) {
            var imageHtml = '';
            var imgval = '';
            for(var i in result){
                imageHtml += '<li><img src="'+result[i].src+'" alt="'+result[i].alt+'" height="150"></li>';
                imgval +=','+ result[i].src;
            }
            document.getElementById('upload_img_wrap').innerHTML = imageHtml;
            //如果需要保存图片地址到数据，还需要把所有的图片地址作为输入值
            //具体怎么设置看项目需求，我这里只是举个例子
            document.getElementById('product_img').value = imgval;
        }
    </script>
    <script src="<?php echo base_url()?>js/addshopsubmit.js"></script>

