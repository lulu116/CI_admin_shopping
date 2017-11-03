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
                    商品展示
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">主页</a>
                        <span class="divider">/</span>
                    </li>
                    <li class="active">
                        商品展示
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

        <div id="page-wraper">
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN BASIC PORTLET-->
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> 商品展示</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i> Company</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>
                                    <th><i class="icon-bookmark"></i> Profit</th>
                                    <th><i class=" icon-edit"></i> Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">Vector Ltd</a></td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                    <td>12120.00$ </td>
                                    <td><span class="label label-important label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            Adimin co
                                        </a>
                                    </td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                    <td>56456.00$ </td>
                                    <td><span class="label label-warning label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            boka soka
                                        </a>
                                    </td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                    <td>14400.00$ </td>
                                    <td><span class="label label-success label-mini">Paid</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            salbal llb
                                        </a>
                                    </td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                    <td>2323.50$ </td>
                                    <td><span class="label label-danger label-mini">Paid</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">Vector Ltd</a></td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                    <td>12120.00$ </td>
                                    <td><span class="label label-important label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            Adimin co
                                        </a>
                                    </td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                    <td>56456.00$ </td>
                                    <td><span class="label label-warning label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">Vector Ltd</a></td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                    <td>12120.00$ </td>
                                    <td><span class="label label-important label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            Adimin co
                                        </a>
                                    </td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                    <td>56456.00$ </td>
                                    <td><span class="label label-warning label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">Vector Ltd</a></td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                                    <td>12120.00$ </td>
                                    <td><span class="label label-important label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            Adimin co
                                        </a>
                                    </td>
                                    <td class="hidden-phone">Lorem Ipsum dorolo</td>
                                    <td>56456.00$ </td>
                                    <td><span class="label label-warning label-mini">Due</span></td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END BASIC PORTLET-->
                </div>
            </div>

        </div>

        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<?php
$this->load->view('indexFoot');
?>
