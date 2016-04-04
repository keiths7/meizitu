<html>
<head>
    <title>heiheihei</title>
</head>
<body>
    <?php
        foreach( $pictures as $objPicture ) {
    ?>
        <div>
            <img src="<?php echo $objPicture->PicUrl;?>"  width="635" height="auto"/>
        </div>
        <div>
            <button>丝袜</button>
            <button>清纯</button>
            <button>浴室</button>
        </div>

    <?php
        }
    ?>
    <?php echo $pages;?>
</body>
</html>