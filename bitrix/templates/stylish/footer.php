

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

    </div>        
  </div>
</div>  
</section>
<footer>
   <div class="container">
    <div class="row">
      <div class="span4 float2">
        <form id="newsletter" method="post" >
            <label>Newsletter</label>
            <div class="clearfix">
                <input type="text" onFocus="if(this.value =='Enter e-mail here' ) this.value=''" onBlur="if(this.value=='') this.value='Enter e-mail here'" value="Enter e-mail here" >
                <a href="#" onClick="document.getElementById('newsletter').submit()" class="btn btn_">subscribe</a>
            </div>
        </form>
    </div>
    <div class="span8 float">
      	<ul class="footer-menu">
        	<li><a href="index.html" class="current">Home Page</a>|</li>
            <li><a href="index-1.html">about</a>|</li>
            <li><a href="index-2.html">Services</a>|</li>
            <li><a href="index-3.html">collections</a>|</li>
            <li><a href="index-4.html">styles</a>|</li>
            <li><a href="index-5.html">Contacts</a></li>
        </ul>
      	Stylish   &copy;  2013  |   <a href="http://кофедизайн.рф/">Разработано с удовольствием</a> <!-- {%FOOTER_LINK} -->
      </div>
    </div>
   </div>
</footer>
<script type="text/javascript" src="<?SITE_TEMPLATE_PATH?>/js/bootstrap.js"></script>
</body>
</html>