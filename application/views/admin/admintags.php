<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>姐姐图</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">tag设置</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <?php foreach( $pictures as $picture ) { ?>
    <div class="row">
        <div class="col-md-8">
            <!-- 图片每一行 -->
            <div class="row" max-width="635">
                <div style="max-width: 635px;">
                    <img src="<?php echo $picture['PicUrl'];?>" class="img-responsive" width="635">
                </div>
                <br>
                <div>
                    <?php foreach( $tagsList as $objTag ) {?>
                        <?php if( array_search($objTag->tid,$picture['tids']) === FALSE )  { ?>
                            <button type="button" class="btn btn-primary" tid="<?php echo $objTag->tid;?>" pid="<?php echo $picture['Pid'];?>">
                                <?php echo htmlentities( $objTag->tname );?>
                            </button>
                        <?PHP }?>
                    <?php } ?>

                    <button type="button" class ="btn btn-danger"  del_pid="<?php echo $picture['Pid'];?>" >删除</button>
                </div>

            </div>
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <hr/>
    <?php } ?>
    <?php echo $pages;?>

</div> <!-- /container -->
<script type="text/javascript" src="/public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$(function(){
    $("[tid]").click(function(){
        var tid = $(this).attr("tid");
        var pid = $(this).attr("pid");
        var url = "/admin/setTags/"+pid+"/"+tid;
        var dom = $(this);
        $.post(url,{},function( result ){
            if ( result.res == true ) {
                dom.hide();
            } else {
                alert("设置失败");
                return;
            }
        },"json");
    })
    $("[del_pid]").click(function(){
        var pid = $(this).attr("del_pid");
        $.post("/admin/delPic/"+pid,{},function(){
            if (result.res == false ) {
                alert("删除失败");
                return ;

            }
        },"json");
    });
})
</script>
</body>
</html>
