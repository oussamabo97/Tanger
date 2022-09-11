<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>


		</div><!-- .inner-wrap -->

   <!-- FOOTER START -->
    <div class="footer">
        
       
		<div class="col">
                <h1>Company</h1>
                <ul>
                    <li>About</li>
                    <li>Mission</li>
                    <li>Services</li>
                    <li>Social</li>
                    
                </ul>
            </div>
		<div class="col">
                <h1>For</h1>
                <ul>
                    <li>Teams</li>
                    <li>Education</li>
                    <li>Privacy</li>
                    <li>Asset Hosting</li>
                    
                </ul>
            </div>
            <div class="col">
                <h1>Community</h1>
                <ul>
                    <li>Spark</li>
                    <li>Mission</li>
                    <li>Services</li>
                    <li>Challenges</li>
                    
                </ul>
            </div>
      
            <div class="col">
                <h1>Social</h1>
                <ul>
                    <li>YouTube</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    
                    
                </ul>
            </div>
          
</div>
        
        <!-- END OF FOOTER -->

        <style>
            .footer .col {
                width: 300px;
                float: left;
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                padding: 50px 50px 20px 150px;
            }
			
			  h1 {
                color: black;
                font-family: monospace;
                font-size: 20px;
            }

           

            .footer .col ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .footer .col ul li {
                color: #870b0b;
                font-size: 14px;
                font-family: inherit;
                font-weight: bold;
                padding: 5px 0px 5px 0px;
                cursor: pointer;
                transition: .2s;
                -webkit-transition: .2s;
                -moz-transition: .2s;
            }


            .footer .col ul li:hover {
                color: #5016c4;
                transition: .1s;
                -webkit-transition: .1s;
                -moz-transition: .1s;
            }
        </style>
	
	
	</div><!-- #content -->


<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			@ Mon propre copyright &nbsp <a href="http://localhost/Tanger">Tanger</a>
			
    
			
			 <p id="demo"></p>
    
    <script>
    var d = new Date();
    document.getElementById("demo").innerHTML = d;
    </script>
			
				</div>
	
	
		</div>
	</footer><!-- #colophon -->
   <a href="#masthead" id="scroll-up"><span class="genericon genericon-collapse"></span></a>
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
