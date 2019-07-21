<style>
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css);

.social-container {
  width: 400px;
  margin: 40vh auto;
  text-align: center;
}

.social-icons {
  padding: 0;
  list-style: none;
  margin: 1em;
}
.social-icons li {
  display: inline-block;
  margin: 0.15em;
  position: relative;
  font-size: 1.2em;
}
.social-icons i {
  color: #fff;
  position: absolute;
  top: 21px;
  left: 21px;
  transition: all 265ms ease-out;
}
.social-icons a {
  display: inline-block;
}
.social-icons a:before {
  transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  content: " ";
  width: 60px;
  height: 60px;
  border-radius: 100%;
  display: block;
  background: linear-gradient(45deg, #00B5F5, #002A8F);
  transition: all 265ms ease-out;
}
.social-icons a:hover:before {
  transform: scale(0);
  transition: all 265ms ease-in;
}
.social-icons a:hover i {
  transform: scale(2.2);
  -ms-transform: scale(2.2);
  -webkit-transform: scale(2.2);
  color: #00B5F5;
  background: -webkit-linear-gradient(45deg, #00B5F5, #002A8F);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transition: all 265ms ease-in;
}

</style>

<footer class="site-footer">
	
	<div class="social-container">
    <ul class="social-icons">
		<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a></li>
    </ul>
	</div>
	<p align="center">Copyright &copy;
	<script>document.write(new Date().getFullYear());</script> All rights reserved.
	</p>
        	
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>