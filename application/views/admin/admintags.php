<!--<html>
<head>
    <title>heiheihei</title>

</head>
<body>
    <?php
/*        foreach( $pictures as $objPicture ) {
    */?>
        <div>
            <img src="<?php /*echo $objPicture->PicUrl;*/?>"  width="635" height="auto"/>
        </div>
        <div>
            <button>丝袜</button>
            <button>清纯</button>
            <button>浴室</button>
        </div>

    <?php
/*        }
    */?>
    <?php /*echo $pages;*/?>
</body>
</html>-->

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
                <a class="navbar-brand" href="#">Brand</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- 图片每一行 -->
            <div class="row" max-width="500">
                <div style="max-width:300px;">
                    <img src="http://pic.nipic.com/2007-10-12/2007101283219241_2.jpg" class="img-responsive" width="500">
                </div>
                <br>
                <div>
                    <?php foreach( $tagsList as $objTag ) {?>
                        <button type="button" class="btn btn-primary" tid="<?php echo $objTag->tid;?>">
                            <?php echo htmlentities( $objTag->tname );?>
                        </button>
                    <?php } ?>
                </div>

            </div>
        </div>

        <div class="col-md-4">

        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-8">
            <!-- 图片每一行 -->
            <div class="row" max-width="500">
                <div style="max-width:300px;">
                    <img src="http://pic.nipic.com/2007-10-12/2007101283219241_2.jpg" class="img-responsive" width="500">
                </div>
                <br>
                <div>
                    <?php foreach( $tagsList as $objTag ) {?>
                        <button type="button" class="btn btn-primary" tid="<?php echo $objTag->tid;?>">
                            <?php echo htmlentities( $objTag->tname );?>
                        </button>
                    <?php } ?>
                </div>

            </div>
        </div>

        <div class="col-md-4">

        </div>
    </div>

</div> <!-- /container -->
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    function setTag(obj){
        $(obj).hide();
    }
</script>
</body>
</html>
