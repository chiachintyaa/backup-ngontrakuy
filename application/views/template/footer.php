<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="footer">

        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h4>Information</h4>
                    <ul class="row">
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('About')?>">About</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('Agents')?>">Agents</a></li>
                        <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo site_url('ContactUs')?>">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="<?php echo base_url('assets/images/facebook.png')?>" alt="facebook"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/twitter.png')?>" alt="twitter"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/linkedin.png')?>" alt="linkedin"></a>
                    <a href="#"><img src="<?php echo base_url('assets/images/instagram.png')?>" alt="instagram"></a>
                </div>

                <div class="col-lg-3 col-sm-3 col-sm-offset-3">
                    <h4>Contact us</h4>
                    <p><b>NgontraKuy Inc.</b><br>
                        <span class="glyphicon glyphicon-map-marker"></span> 8290 Walk Street, Australia <br>
                        <span class="glyphicon glyphicon-envelope"></span> hello@bootstrapreal.com<br>
                        <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890
                    </p>
                </div>
            </div>
            <p class="copyright">Copyright NgontraKuy&copy;<?php echo date('Y')?>. All rights reserved.</p>

        </div>
    
	</div>
    <!-- Modal -->
    <div id="loginpop" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-6 login">
                        <h4>Login</h4>
                        <form class="" role="form" action="<?php echo site_url('Login')?>">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password">
                            </div>
                            <input type="submit" role="button" class="btn btn-success" value="Sign In"/>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4>New User Sign Up</h4>
                        <p>Join today and book homes of your dream.</p>
                        <a href="<?php echo blink('Home/regis')?>" role="button" class="btn btn-info" >Join Now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
</body>
</html>
