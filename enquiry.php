<!DOCTYPE html>
<html lang="en-US" prefix="">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/png" href="images/alakar_logo.png"  /> 
 <title>Alakar Products</title>
<link rel="profile" href="" />
<link rel="pingback" href="" />
<link rel="stylesheet" type="text/css" media="all" href="css/960_24_col.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<meta name="description" content="" />
<meta property="og:type" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="" />
<meta name="" content="" />
<!-- /SEO Ultimate -->
<link rel="alternate" type="application/rss+xml" title="" href="" />
<link rel="alternate" type="application/rss+xml" title="" href="" />
<link rel='stylesheet' href='css/jquery-news-ticker.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='js/jquery-news-ticker.js'></script>
<script type='text/javascript' src='js/ddsmoothmenu.js'></script>
<script type='text/javascript' src='js/jcarousellite_1.0.1.js'></script>
<script type='text/javascript' src='js/cufon-yui.js'></script>
<script type='text/javascript' src='js/mank-sans.cufonfonts.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
            function sendmail(){
             
                var company = document.getElementById('c_name').value;
                var mobile = document.getElementById('mobile').value;
                var mailid = document.getElementById('mailid').value;
                var message = document.getElementById('message').value;
                if(company==''){
                    document.getElementById('c_name').placeholder="Company Name is Required.";
                    document.getElementById("c_name").style.color="#D00000";
                    return false;
                }else if(mobile==''){
                    document.getElementById('mobile').placeholder="Mobile is Required.";
                    document.getElementById("mobile").style.color="#D00000";
                    return false;
                }else if(mailid==''){
                    document.getElementById('mailid').placeholder="Mail ID is Required.";
                    document.getElementById("mailid").style.color="#D00000";
                    return false;
                }else if(message==''){
                    document.getElementById('message').placeholder="Message is Required.";
                    document.getElementById("message").style.color="#D00000";
                    return false;
                }else{
                   
                }
            }
              
            function reset(){
                    document.getElementById('c_name').value='';
                    document.getElementById('c_name').placeholder="Company Name (required)";
                    document.getElementById('mobile').value='';
                    document.getElementById('mobile').placeholder="Mobile Number (required)";
                    document.getElementById('mailid').value='';
                    document.getElementById('mailid').placeholder="Your Mail-ID (required)";
                    document.getElementById('subject').value='';
                    document.getElementById('subject').placeholder="Subject (Optional)";
                    document.getElementById('message').value='';
                    document.getElementById('message').placeholder="Message (required)";
				    return true;
            }
              
        </script>
</head>
<body>
<div class="wrapper">
  <div class="top_cornor"></div>
  <!--Start body wrapper-->
  <div class="body_wrapper">
    <!--Start Container-->
    <div class="container_24">
      <!--Start Header Wrapper-->
      <div class="grid_24 header_wrapper">
        <!--Start Header-->
        <div class="header">
       <?php include 'includes/header.php' ?>
            <?php include 'includes/menu.php' ?>
        </div>
        <!--End Header-->
      </div>
      <!--End Header Wrapper-->
      <div class="clear"></div>
    </div>
    <!--End container-->
    <div class="container_24">
      
      <div class="clear"></div>
      <!--Start Home content wrapper-->
      <div class="grid_24 home_content_wrapper">
        <!--Start Home content-->
        <div class="home_content">
          <div class="home_text">
            <center>
              <h1>&nbspEnquiry</h1>
            </center>
          </div>
          <hr/>
          <div class="clear"></div>
          <!--Start Featured content-->
          <div class="featured_content">
          
          <fieldset id="fieldset">
                    <!-- Form Name -->
<table><tr><td width="50%">
        <div class="enquiry_div">
<form action="mail.php" method="post" onsubmit="sendmail()">
            <div class="control-group">
                        <label>Company Name</label>
                        <div class="controls">
                            <input id="c_name" name="company" placeholder="Company Name (required)" class="input-xlarge" required="" type="text" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label>Mobile Number</label>
                        <div class="controls">
                            <input id="mobile" name="mobile" placeholder="Mobile Number (required)" class="input-xlarge" required="" type="text" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label>Your Mail-ID</label>
                        <div class="controls">
                            <input id="mailid" name="mailid" placeholder="Your Mail-ID (required)" class="input-xlarge" required="" type="text" >
                        </div>
                    </div>
    
                    <div class="control-group">
                        <label>Subject</label>
                        <div class="controls">
                            <input id="subject" name="subject" placeholder="Subject (Optional)" class="input-xlarge" required="" type="text" >
                        </div>
                    </div>
                    <!-- Textarea -->
                    <div class="control-group">
                        <label>Message</label>
                        <div class="controls">
                            <textarea id="message" name="message" placeholder="Message (required)"></textarea>
                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="control-group">
                        <label></label>
                        <div class="controls">
                            <button id="submit" name="submit" type="submit" class="btn btn-success" >Send</button>
                            <button id="button2id" name="button2id" class="btn btn-danger" onclick="reset()">Reset</button>
                        </div>
              </form>      </div>
    </div>
    </td>
    <td width="50%">
        <div style="padding-left:200px;">
            <img src="images/enquiry.jpg" />
        </div>
    </td>
    </tr>
    </table>
 
                </fieldset>
          
          
            <div class="clear"></div>
            <!--End Featured content-->
            <div class="clear"></div>
          </div>
          <!--End Home content-->
        </div>
      </div>
    </div>
    <!--End Container-->
    <!--Start Footer Wrapper-->
    <div class="footer_wrapper">
      <div class="footer_line"></div>
      <!--Start Container-->
      <div class="container_24">
        <div class="grid_24">
          <!--Start Footer-->
          <div class="footer">
            <div class="grid_61 alpha">
              <div class="widget_inner">
                <h4>Our Mission and Vision</h4>
                <div class="textwidget">
                  <p style="text-align:justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                </div>
              </div>
            </div>
            <div class="grid_61">
              <div class="widget_inner">
                <h4>Follow Us On</h4>
                <div class="textwidget">
               <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/yameechennai/?ref=hl;width&amp;height=328&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:120p;" allowTransparency="true"></iframe>

            
                </div>
              </div>
            </div>
            <div class="grid_61">
              <div class="widget_inner">
                <h4>Reach Us</h4>
                <div class="textwidget"><b>Alakar Products</b><br/>
                  <b>Address:</b> No. 27 NH Colony,<br/>
                  Perumalpuram, <br/>
                  Tirunelveli.<br/>
          <b>E-mail:</b> <a href="mailto:mani@alakarproducts.c0m">mani@alakarproducts.c0m</a>, 
                  <br/>
                  <b>Phone:</b> 0462 2531965<br/>
                  <b>Mobile:</b> +91 94436 14915 / +91 98429 95109</div>
              </div>
            </div>
          </div>
          <!--End Footer-->
        </div>
        <div class="clear"></div>
      </div>
      <!--End Container-->
      <div class="footer_glow"></div>
      <div class="footer_bottom">
        <!--Start Container-->
        <div class="container_24">
          <div class="grid_24">
            <!--Start footer bottom inner-->
           <div class="footer_bottom_inner">
              <ul class="social_logos">
              </ul>
                <p class="copyright"> &copy;2014 <a href="http://www.alakarproducts.com"  style="color:#a42103;">Alagar Products | All Rights Reserved </p>
            </div>
          </div>
        </div>
        <!--End Container-->
      </div>
      <!--End Footer bottom-->
    </div>
    <!--End Footer Wrapper-->
  </div>
  <!--End body wrapper-->
  <div class="bottom_cornor"></div>
</div>
<div id="su-footer-links" style="text-align: center;"></div>
<link rel='stylesheet' id=''  href='css/coin-slider-styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='metaslider-public-css'  href='css/public.css' type='text/css' media='all' />
<script type='text/javascript' src='js/coin-slider.min.js'></script>
</body>
</html>