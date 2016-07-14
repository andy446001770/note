<?php /* Smarty version 3.1.27, created on 2016-04-20 09:39:01
         compiled from "templates/tongji.html" */ ?>
<?php
/*%%SmartyHeaderCode:254047225716ddb572c873_81934674%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04b86c04c5f195fffb46b7ecd82d19682654ecb' => 
    array (
      0 => 'templates/tongji.html',
      1 => 1461066449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254047225716ddb572c873_81934674',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5716ddb573fce8_58736053',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5716ddb573fce8_58736053')) {
function content_5716ddb573fce8_58736053 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '254047225716ddb572c873_81934674';
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
                "aLengthMenu": [20, 30, 50, -1],
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
        <th>姓名</th>
        <th>电话</th>
        <th>性别</th>
        <th>国家</th>
        <th>省份</th>
        <th>城市</th>
        <th>生活水平</th>
        <th>行业</th>
        <th>收入</th>
        <th>最后登录时间</th>
        <th>奖品</th>
        <th>题目1</th>
        <th>题目2</th>
        <th>题目3</th>
        <th>题目4</th>
        <th>题目5</th>
        <th>题目6</th>
        <th>题目7</th>
        <th>题目8</th>
        <th>题目9</th>
        <th>题目10</th>
        <th>题目11</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>user_id</th>
        <th>姓名</th>
        <th>电话</th>
        <th>性别</th>
        <th>国家</th>
        <th>省份</th>
        <th>城市</th>
        <th>生活水平</th>
        <th>行业</th>
        <th>收入</th>
        <th>最后登录时间</th>
        <th>奖品</th>
        <th>题目1</th>
        <th>题目2</th>
        <th>题目3</th>
        <th>题目4</th>
        <th>题目5</th>
        <th>题目6</th>
        <th>题目7</th>
        <th>题目8</th>
        <th>题目9</th>
        <th>题目10</th>
        <th>题目11</th>
    </tr>
    </tfoot>
</table>

</body>
</html><?php }
}
?>