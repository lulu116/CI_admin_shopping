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
                   欢迎来到后台管理主页!
                </h3>
                <ul class="breadcrumb">
                    <li class="active">
                        主页
                    </li>

                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->

    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<?php
    $this->load->view('indexFoot');
?>
