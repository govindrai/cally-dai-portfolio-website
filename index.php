<!DOCTYPE html>
<html  lang="en">
    <head>
        <title>Cally Dai | Product Designer</title>
        <?php require_once('php/head.php') ?>
    </head>
    <body>
        <?php require_once('php/navigation.php'); ?>
        <main id="index-hero">
            <div class="container">
                <div class="col-12">
                    <h1 class="hero-title">Cally Dai</h1>
                    <h2 class="hero-subtitle">User Experience Designer</h2>
                </div>
            </div>
        </main>
        <section id="intro">
            <div class="container ribbon-margin">
                <div class="col-12 relative">
                    <img id="ribbon" src="img/general/ribbon.png"/>
                    <h2 id="ribbon-text">Portfolio</h2>
                </div>
                <div class="col-1"></div>
                <div class="col-10">
                    <p class="project-description center-align">Hello, and welcome to my portfolio! For inquiries or feedback, please <a class="pink-link" href="contact.php">contact me</a>.</p>
                    <div class="quick-links">
                        <a class="pink-link" data-scroll href="#glifft">Case Studies</a>&nbsp;&#8226;&nbsp;<a class="pink-link" data-scroll href="#other-works">Other Works</a>
                    </div>
                <div class="col-1"></div>
            </div>
        </section>
        <section id="glifft" class="projects">
            <div class="container">
                <div class="col-5">
                    <img class="main-project-image" width="452" height="405" src="img/index/glifft-img.png" alt="glifft product design">
                </div>
                <div class="col-7">
                    <h2 class="project-title">Glifft</h2>
                    <p class="project-description">I designed the MVP for a new mobile application from the ground up, focusing on creating a seamless user experience and establishing accurate brand aesthetic.</p>
                    <a href="projects/glifft" class="button">View Case Study</a>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        <section id="canopy" class="projects">
            <div class="container row-reverse">
                <div class="col-5">
                    <img class="main-project-image" width="495" height="405" src="img/index/canopy-img.png" alt="canopy product design">
                </div>
                <div class="col-7">
                    <h2 class="project-title">Canopy</h2>
                    <p class="project-description">Using user research and user testing, I established content hierarchy and a style guide for Canopy’s responsive web learning platform.</p>
                    <a href="projects/canopy" class="button">View Case Study</a>
                </div>
            </div>
        </section>
        <section id="soma-water" class="projects">
            <div class="container">
                <div class="col-5">
                    <img class="main-project-image" width="445" height="365" src="img/index/plyarchitecture-img.png" alt="progressly architecture product design">
                </div>
                <div class="col-7">
                    <h2 class="project-title">Progressly</h2>
                    <p class="project-description">Prompted to introduce new feature sets to Progressly's enterprise software, I led a team to redesign the core product architecture.</p>
                    <div class="coming-soon">Coming Soon</div>
                </div>
            </div>
        </section>
        <section id="other-works">
            <div class="container">
                <div class="col-12">
                    <h2 class="project-title">Other Works</h2>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/somawater.png"></div>
                    <div class="other-works-title" >Soma Water Landing Page Redesign</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/bangbang.png"></div>
                    <div class="other-works-title" >!!BANGBANG Homepage Redesign</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/dashboard.png"></div>
                    <div class="other-works-title" >Dashboard Analytics</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/guestaccess.png"></div>
                    <div class="other-works-title" >Guest Access Flow</div>
                </div>
                <div class="col-4">
                    <div><img class="other-works-image" src="img/index/marketing.png"></div>
                    <div class="other-works-title" >Progressly Marketing Pages</div>
                </div>
                <div id="modal-4" class="col-4">
                    <div><img class="other-works-image" src="img/index/engineering.png"></div>
                    <div class="other-works-title" >Engineering Landing Page</div>
                </div>
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="gray-divider"></div>
                </div>
                <div class="col-2"></div>
            </div>
        </section>
        
        <section id='other-works-modals' class="col-12">
            <div id="plyengineering-modal" class="modal col-10">
                <div class="col-10 modal-content">
                    <div id="x-button">&#x2573;</div>
                    <div class="gif-container">
                        <img class="modal-hero-image" src="img/index/macbook.png"></img>
                        <img class="gif" src="img/index/engineering.gif"/>
                    </div>
                    <img class="modal-logo" src="img/index/progresslylogo.svg"/>
                    <h3 class="modal-heading">Engineering Page</h3>
                    <p>Progressly is a software company that provides solutions for process documentation and execution. To increase interest in open engineering posititons, I pioneered a landing page dedicated to demonstrate Progressly’s company and engineering culture. This directly increased the number of applications received for developer roles.</p>
                </div>
            </div>
            
            
            
        </section>
        
        <section id="feedback">
            <div class="container">
                <div class="col-12">
                    <h2 class="project-title">Feedback or business inquiries?</h2>
                    <a href="contact.php" class="button contact-button">Contact Me</a>
                    <div id="spacer60"></div>
                </div>
            </div>
        </section>
        
        <?php 
            require_once('php/footer.php'); 
            require_once('php/scripts.php'); 
        ?>
        
        <script type="text/javascript" src="scripts/index-overlays.js"></script>
        <script type="text/javascript">
            document.getElementById("other-works").addEventListener('click', function(e) {
                if (e.target.tagName == 'DIV' || e.target.tagName == 'IMG') {
                    var index = Array.from(document.getElementsByClassName(e.target.className)).indexOf(e.target);
                    
                    var modalContent = document.querySelectorAll('.modal')[index]
                    var modalSection = document.getElementById("other-works-modals")
                    
                    modalContent.style.display = "flex";
                    modalSection.style.display = "flex";
                    
                    modalSection.classList.add('opacity1');
                    modalContent.classList.add('move-up');
                }
            });
            
            document.getElementById("x-button").onclick = function(e) {
                var modalSection = document.getElementById("other-works-modals");
                var modalContent = this.parentElement.parentElement;
                
                modalContent.classList.add("move-down");
                modalSection.classList.add('opacity0');
                
                
                setTimeout(function() {
                    modalSection.style.display = "none";
                    modalContent.style.display = "none";
                    modalSection.classList.remove("opacity0", "opacity1");
                    modalContent.classList.remove("move-down", "move-up");
                }, 500)
                

            };
            
            smoothScroll.init();
        </script>
    </body>
</html>
