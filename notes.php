<?php include("header.php"); ?>

                <div class="box single">
                    <h1>Notes</h1>
                    
                    <div class="half">
                        <a href="#top" id="doc" class="button selected">Documentation</a>
                        &nbsp;
                        <a href="#top" id="extra" class="button">Extra</a>
                    </div>
                </div>

                <div id="docContent" class="box single" style="padding: 0; margin: 0;">
                    
                    <div class="box half" style="margin: 0 20px 0 0;">
                        <hr />

                        <h2>Citations</h2>
                        <p>
                            <strong>typer.js</strong> by <a href="https://github.com/layervault/jquery.typer.js" target="_blank">Layervault</a>

                            <strong>lightbox.js</strong> by <a href="http://lokeshdhakar.com/projects/lightbox2/" target="_blank">Lokesh Dhakar</a>

                            All imagery and styles are my own unless otherwise stated.
                        </p>

                        <hr />

                        <h2>Caveats</h2>
                        <p>
                            <a href="protected/" target="_blank">Access the password-protected page</a>
                            <a href="alsdjfaslsdkj">Access the 404 page</a>
                        </p>
                        <p>
                            In order for the switching out of the project banners to work with the PHP includes, I have to have the <code>img</code> tag in <code>header.php</code>, which means that one of the console errors <strong>and</strong> resulting invalid code is the image not being found. That is (unfortunately) intentional.
                        </p>
                        <p>
                            CSS validation breaks due to the lightbox plugin that I am using, as well as rules that do not have cross-browser support etc.
                        </p>
                        <p>
                            There are also phrases/lines written to the console to facilitate my own debugging.
                        </p>
                        <p>
                            I would love to keep learning more about Javascript, JQuery and subsequently get to know node.js, angular.js etc. I will be taking IGME-330 in the fall semester, so I'm excited to learn about canvas as well.
                        </p>
                    </div>
                    
                    <div class="box half">
                        <hr />

                        <h2>Challenges</h2>
                        <p>
                            The largest challenge for me was the Javascript (folioFunction.js), largely because I had not done it before, and I wanted to accomplish specific tasks given how I had decided to set my website up. That being said, that was also the most fun aspect, alongside the CSS3 animation on my homepage that is both a little ridiculous but also what I think is a good landing page solution, that also theoretically allows the larger images to load behind the scenes.
                        </p>
                        <p>
                            In order to develop my website with PHP, I ended up setting up a local server, which meant that I had to tweak some of the codes or .htaccess file content in order to develop offline but also be able to push the files up to the web server. This wasn't so much a challenge as it was a bit of a hassle, but all worth it in the end.
                        </p>
                        <p>
                            Debugging was definitely difficult. As of this current version of the website, I am still unable to figure out why the console errors say what they do; I don't recall attempting to access any of the mentioned graphics (loading.gif, close.png, next.png, prev.png). This only happens on the first page load, and doesn't happen on refresh.
                        </p>
                        
                        <hr />

                        <h2>Improvements</h2>
                        <p>
                            In terms of the improvements I had intended to make from last time, I think I solved the problems I had very well. The transitioning between pages makes the large header images less jarring (which I figured was where the aesthetic issue was), which meant that I could keep the cinematic and immersive feel of the project pages.
                        </p>
                        <p>
                            I unfortunately can't figure out how to make an <code>href="#"</code> link not jump back to the top of the page when clicked, which really compromises the experience of the About page.
                        </p>
                    </div>
                </div>

                <div id="extraContent" class="box single">
                    <hr />
                    
                    <h2>Extras</h2>
                    <p>
                        In addition to the branding, transitions, and typer, I made use of a classic lightbox script, and tried a hand at making the experience of viewing my website better through smooth transitions and image preloading. Perhaps the largest step I took as well was to use PHP on my website, largely to make for an easier development experience on my end.
                    </p>
                    <p>
                        My about and notes pages feature DHTML content circulation, cycling out details. My intention was such that the user doesn't have to scroll down the page, and can access what they want to see by simply clicking on the corresponding button.
                    </p>
                    <p>
                        The lightbox puts the project images of every page into a gallery, with the intention being an easier way of looking at all the imagery on a page in one go. I customised the CSS styling a little bit to incorporate a teal border around the overlay window, which required a slight tweaking of the JS code as well.
                    </p>
                    <p>
                        In terms of image preloading and transitions, I wanted the images - even if not all preloaded - to seem like they are elegantly fading in alongside the content. To do so, I had a script that facilitated the fading in of every page on window load, and specially appointing a transition to the typer text on the homepage (work.php). The project image backgrounds were the largest and probably the highest preload priority imagery, so they were faded in as well as preloaded on the homepage in a hidden div.
                    </p>
                    <p>
                        My error page is slightly different in aesthetic but not entirely so, featuring an animation of a 3D model that I recently made and that serves as visual interest. I included a back button to help the user go back after looking through the page content, just as a usability thing. I also made sure to keep this page responsive as well.
                    </p>
                    <p>
                        The password-protected page is really a page where I put super secret things. You'd have to log in to see what all this <em>~ secret stuff ~</em> is.
                    </p>
                    <p>
                        Lastly, because of the migration to PHP and the use of PHP includes, I had to make sure the 'current' nav state was retained. I used javascript to accomplish this, using a switch statement to determine which navigation element to highlight as the 'current' page.
                    </p>
                    
                </div>

<?php include("footer.php"); ?>