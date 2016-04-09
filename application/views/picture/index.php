<!DOCTYPE HTML>
<html>
    <head>
        <title>姐姐图</title>
        <meta charset="utf8">
        <link rel="stylesheet" href="/public/css/ui.css">
    </head>
    <body>
        <div class="header">
            <a href="/" class="logo">
                <i class="icon-logo">
                    <img src="http://wimg.spriteapp.cn/huodong/logo_new.png" alt="百思不得姐" title="百思不得姐官网">
                </i>
            </a>
        </div>
        <div class="banner">
            <div class="link">
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
                <a href="">全部</a>
            </div>
        </div>
        <div class="content">
            <div class="middle-content">
                <div class="left-list">
                    <ul>
                        <?php foreach($pictures as $picture): ?>
                        <li>
                            <div class="pic-header">
                                <span class="s-title">标题</span><span class="s-time">今天 22:00</span>
                            </div>
                            <div class="pic-content">
                                <img class="lazy" data-src="<?php echo $picture['PicUrl'];?>" alt="" width="640px">
                            </div>
                            <div class="pic-footer">
                                <div class="op-fav">收藏</div>
                                <div class="op-comment">评论</div>
                                <div class="op-like">喜欢</div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <div class="pagination">
                        <?php echo $pages;?>
                    </div>
                </div>
                <div class="right-list">
                    <div class="right-box">
                        <div class="right-search">
                            <input type="text"><button>search</button>
                        </div>
                        <div class="right-qr">
                            <img src="http://wimg.spriteapp.cn/huodong/qr.png" alt="百思不得姐二维码" title="扫二维码 用手机看百思不得姐">
                        </div>
                        <div class="right-wall">
                            <div class="wall-list">
                                <div class="wall-item">
                                    <a href="">
                                        <div class="item-img">
                                            <img src="http://wimg.spriteapp.cn/huodong/qr.png" style="display:inline;">
                                        </div>
                                    </a>
                                    <div class="item-text">标题</div>
                                </div>
                                <div class="wall-item">
                                    <a href="">
                                        <div class="item-img">
                                            <img src="http://wimg.spriteapp.cn/huodong/qr.png" style="display:inline;">
                                        </div>
                                    </a>
                                    <div class="item-text">标题</div>
                                </div>
                                <div class="wall-item">
                                    <a href="">
                                        <div class="item-img">
                                            <img src="http://wimg.spriteapp.cn/huodong/qr.png" style="display:inline;">
                                        </div>
                                    </a>
                                    <div class="item-text">标题</div>
                                </div>
                                <div class="wall-item">
                                    <a href="">
                                        <div class="item-img">
                                            <img src="http://wimg.spriteapp.cn/huodong/qr.png" style="display:inline;">
                                        </div>
                                    </a>
                                    <div class="item-text">标题</div>
                                </div>
                                <div class="wall-item">
                                    <a href="">
                                        <div class="item-img">
                                            <img src="http://wimg.spriteapp.cn/huodong/qr.png" style="display:inline;">
                                        </div>
                                    </a>
                                    <div class="item-text">标题</div>
                                </div>
                                <div class="wall-item">
                                    <a href="">
                                        <div class="item-img">
                                            <img src="http://wimg.spriteapp.cn/huodong/qr.png" style="display:inline;">
                                        </div>
                                    </a>
                                    <div class="item-text">标题</div>
                                </div>
                            </div>
                        </div>
                        <div class="wx-info">
                            <div class="text-info">
                                <div>姐姐图APP下载</div>
                                <div>QQ群：123456</div>
                            </div>
                            <div class="qr-code">
                                <img src="http://wimg.spriteapp.cn/huodong/qr.png" style="display:inline;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-content">
                <div class="box">
                    <ul>
                        <li><a href="">关于我们</a></li>
                        <li><a href="">友情链接</a></li>
                    </ul>
                </div>
                <div class="box">
                    <ul>
                        <li><a href="">关于我们</a></li>
                        <li><a href="">友情链接</a></li>
                    </ul>
                </div>
                <div class="box">
                    <ul>
                        <li><a href="">关于我们</a></li>
                        <li><a href="">友情链接</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/public/js/jquery.lazy.min.js"></script>
        <script type="text/javascript">
            $('.lazy').Lazy({
                scrollDirection: 'vertical',
                effect: 'fadeIn',
                visibleOnly: true,
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                }
            });
        </script>
    </body>
</html>