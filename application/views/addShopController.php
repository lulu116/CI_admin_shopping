<?php
$this->load->view('indexHead');
?>

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
                                    <input type="text" placeholder="请输入商品颜色" id="color" name="color" data-mask="999/99/999/9999/9" class="span5">
                                    <span class="help-inline">必填</span>
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
                                    <input type="text" placeholder="" id="stock" name="stock" data-mask="$ 999,999,999.99" class="span5">
                                    <span class="help-inline">必填</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">商品图片</label>
                                <div class="controls">
                                    <input type="file" id="img" name="img" data-mask="99-9999999" class="span5">
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="controls">
                                    <input type="button" id="addshopsubmit" data-mask="99-99-9999" class="span2" value="提交">
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
        var shopUrl = "<?php echo site_url('addshopsubmit/getaddshopsubmit')?>";

    </script>
    <script src="<?php echo base_url()?>js/addshopsubmit.js"></script>
