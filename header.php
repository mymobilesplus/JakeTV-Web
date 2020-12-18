<!--header-->
<?php 
	$files = $_SERVER['PHP_SELF'];
	$filename = explode('/',$files);
	
	$file = end($filename);
?>
<div class="header" id="headerhr">
  <div class="header-top">
    <nav class="navbar navbar-default" style="border: 0px;">
      <div class="container-fluid"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <div class="navbar-brand">
          <a href="index.php"><img src="logo/jaketv_web_logo.png"></a>
<!--            <h1><a href="index.html">zoo planet</a></h1>
-->          </div>
        </div>
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" onClick="navbar()" style="padding-right: 0px; margin-right: -18px;">
          <ul class="nav navbar-nav" style="margin-top:5px;" id="navbar">
            <li>
            <a href="index.php"  data-toggle="tooltip" data-placement="left" title="Home" id="home" <?php if($file=='index.php'){?>class="active"<?php }?>>
            	<i class="fa fa-home" style="font-size:16px;"></i>&nbsp;&nbsp;HOME<span class="sr-only" ></span></a>
            </li>
            <?php
				if(isset($_SESSION['sessionid'])){ ?>
					<li>
                        <a href="likes.php" <?php if($file=='likes.php'){?>class="active"<?php }?>  data-toggle="tooltip" data-placement="left" title="Likes" id="like">
                            <i class="fa fa-thumbs-up" style="font-size:16px;"></i>&nbsp;&nbsp;LIKES
                        </a>
                    </li>
				<?php }else{ ?>
					<li>
                        <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" data-placement="left" title="Likes" id="like" style="cursor:pointer;" onClick="login_page(1)">
                            <i class="fa fa-thumbs-up" style="font-size:16px;"></i>&nbsp;&nbsp;LIKES
                        </a>
                    </li>
				<?php }
				?>
            <?php
				if(isset($_SESSION['sessionid'])){ ?>
					<li>
                        <a href="bookmark.php" <?php if($file=='bookmark.php'){?>class="active"<?php }?>  data-toggle="tooltip" data-placement="left" title="Bookmarks" id="bookmark">
                            <i class="fa fa-bookmark" style="font-size:16px;"></i>&nbsp;&nbsp;BOOKMARKS
                        </a>
                    </li>
				<?php }else{ ?>
					<li>
                        <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" data-placement="left" id="bookmark" title="Bookmarks" style="cursor:pointer;" onClick="login_page(2)">
                            <i class="fa fa-bookmark" style="font-size:16px;"></i>&nbsp;&nbsp;BOOKMARKS
                        </a>
                    </li>
				<?php }
				?>
                <?php
				if(isset($_SESSION['sessionid'])){ ?>
					<li>
                        <a href="category.php" <?php if($file=='category.php'){?>class="active"<?php }?>  data-toggle="tooltip" data-placement="left" title="categories" id="catgry">
                            <i class="fa fa-folder" style="font-size:16px;"></i>&nbsp;&nbsp;CATEGORIES
                        </a>
                    </li>
				<?php }else{ ?>
					<li>
                        <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" data-placement="left" title="Categories" id="catgry" style="cursor:pointer;" onClick="login_page(3)">
                            <i class="fa fa-folder" style="font-size:16px;"></i>&nbsp;&nbsp;CATEGORIES
                        </a>
                    </li>
				<?php }
				?>
            	<li id="header_app">
                        <div style="float: left; margin-right:20px; font-size: 14px; font-family: Raleway; letter-spacing: 0.5px; ">Available <br> App On</div><div style="float: left;"><a href="https://play.google.com/store/apps/details?id=com.jaketv.jaketvapp" target="_blank"><i class="fa fa-android" style="font-size:40px; color: white;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://itunes.apple.com/us/app/jake-tv/id1063239686?ls=1&mt=8" target="_blank"><i class="fa fa-apple" style="font-size:40px; color: white;"></i></a></div>
<!--                        <div style="font-size: 10px; float: left;">Apps <br> Available <br> On</div>
                        <div><a href="https://play.google.com/store/apps/details?id=com.jaketv.jaketvapp" target="_blank"><i class="fa fa-android" style="font-size:30px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://itunes.apple.com/us/app/jake-tv/id1063239686?ls=1&mt=8" target="_blank"><i class="fa fa-apple" style="font-size:30px;"></i></a></div>-->
                    </li>
            
          </ul>
        
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </div>
  
</div>

</div>
<script>
	jQuery(document).ready(function($) {
		var emailchk = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
        $("#login_email").blur(function() {
            if(!$(this).val().match(emailchk) && $(this).val()!='')
			{
				$(this).css("border-bottom","1px solid #ff0000");
			}
			else
			{
				$(this).css("border-bottom","1px solid #a7dad3");	
			}
        });
    });
	
</script>
<!--<div class="col-lg-12 col-sm-12">
<hr size="50">
</div>-->

<!--header--> 

