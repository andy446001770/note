<?php /* Smarty version 3.1.27, created on 2016-05-11 02:17:20
         compiled from "templates\tongji.html" */ ?>
<?php
/*%%SmartyHeaderCode:12461573296305f12c4_31510810%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f133216ae9e61604556191ab42eac6ec75d2e32' => 
    array (
      0 => 'templates\\tongji.html',
      1 => 1462933026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12461573296305f12c4_31510810',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_573296306274b2_20953435',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_573296306274b2_20953435')) {
function content_573296306274b2_20953435 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12461573296305f12c4_31510810';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <title>统计</title>
    <link rel="stylesheet" type="text/css" href="media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="media/css/buttons.dataTables.css">

    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/jquery-1.11.3.min.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/jquery.dataTables.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/dataTables.buttons.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/buttons.flash.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/jszip.min.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/pdfmake.min.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/vfs_fonts.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/buttons.html5.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="media/js/buttons.print.js">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" language="javascript" class="init">



        $(document).ready(function() {
            $('#example').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "server_processing.php",
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ],
                "aLengthMenu": [-1, 30, 50, -1],
                "bLengthChange": true,
                language: {
                    "sProcessing": "处理中...",
                    "sLengthMenu": "显示 _MENU_ 项结果",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                    "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                    "sInfoPostFix": "",
                    "sSearch": "搜索:",
                    "sUrl": "",
                    "sEmptyTable": "表中数据为空",
                    "sLoadingRecords": "载入中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "上页",
                        "sNext": "下页",
                        "sLast": "末页"
                    },
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                }
            } );
        } );



    <?php echo '</script'; ?>
>
</head>
<body class="dt-example">
<table id="example" class="display" cellspacing="0" width="100%" style="text-align: center">
    <thead>
    <tr>
        <th>user_id</th>
        <th>昵称</th>
        <th>性别</th>
        <th>最后登录时间</th>
        <th>奖品1</th>
        <th>奖品2</th>
        <th>是否分享</th>
        <th>姓名</th>
        <th>电话</th>
        <th>地址</th>
        <th>京东账户</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>user_id</th>
        <th>昵称</th>
        <th>性别</th>
        <th>最后登录时间</th>
        <th>奖品1</th>
        <th>奖品2</th>
        <th>是否分享</th>
        <th>姓名</th>
        <th>电话</th>
        <th>地址</th>
        <th>京东账户</th>
    </tr>
    </tfoot>
</table>

</body>
</html><?php }
}
?>