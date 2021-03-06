<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Fri Jul 08 2016 21:07:12 GMT+0000 (UTC) -->
<html data-wf-site="571abfc80a8819820933b957" data-wf-page="577db656e3f0f32215830f84">
<head>
  <base href="http://www.callydai.com/">
  <!--<base href="https://mysql-raigovind93.c9users.io/Cally%20Dai/">-->
  <meta charset="utf-8">
  <title>Spotify</title>
  <meta property="og:title" content="Spotify">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/callydai.webflow.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Oswald:300,400,700","Roboto:300,regular,500","Playfair Display:regular,italic,700,700italic,900,900italic"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/logosmall.png">
  <link rel="apple-touch-icon" href="images/logolarge.png">
</head>
<body>
  <?php require_once('../php/navigation.php'); ?>
  <div class="w-section">
    <div class="w-container">
      <div class="project-header">Spotify: Redesign Using Guerilla User Testing</div><img class="project-image" height="400" src="images/mainpic.png">
      <div class="project-body" data-ix="button-appears">
        <div class="w-richtext">
          <h4>Disclaimer:&nbsp;</h4>
          <p>I do not work for Spotify and this is not a solicited redesign. The following design solutions are to strictly address user pain points I have found through guerrilla user testing. Spotify is no way obligated to entertain these implementations; legitimate&nbsp;proposals would require a deeper understanding of the product that I do not have.</p>
          <h3>Intro</h3>
          <p>Spotify is a music streaming media provider that countless&nbsp;users enjoy everyday. I personally adore Spotify and love using it to “soundtrack my life.” Using personas and guerrilla user testing, I wanted to see how I can identify and provide possible solutions to users’ pain points.This was my design process:</p>
        </div>
        <div class="process spotify w-row">
          <div class="w-clearfix w-col w-col-3 w-col-medium-3 w-col-small-3 w-col-tiny-3">
            <a class="persona process-link-block spotify w-inline-block" href="javascript:;" onclick="document.location.hash='persona-development';"></a>
          </div>
          <div class="w-col w-col-2 w-col-medium-2 w-col-small-2 w-col-tiny-2">
            <a class="process-link-block testing w-inline-block" href="javascript:;" onclick="document.location.hash='usability-testing';"></a>
          </div>
          <div class="w-col w-col-2 w-col-medium-2 w-col-small-2 w-col-tiny-2">
            <a class="process-link-block synthesis w-inline-block" href="javascript:;" onclick="document.location.hash='testing-synthesis';"></a>
          </div>
          <div class="w-col w-col-2 w-col-medium-2 w-col-small-2 w-col-tiny-2">
            <a class="ideation process-link-block w-inline-block" href="javascript:;" onclick="document.location.hash='ideation';"></a>
          </div>
          <div class="w-clearfix w-col w-col-3 w-col-medium-3 w-col-small-3 w-col-tiny-3">
            <a class="process-link-block prototype spotify w-inline-block" href="javascript:;" onclick="document.location.hash='prototyping';"></a>
          </div>
        </div>
        <div class="w-richtext">
          <h4>Hypothesis:<br></h4>
          <p>As a daily user of Spotify, I found the process of adding songs to new and existing playlists&nbsp;long and tedious. I hypothesized that&nbsp;this would be a pain point for others as well.</p>
          <h3 id="persona-development">Persona Development</h3>
          <p>To make sure I keep the ideal user in mind as I go through my process, I created a persona. Meet Dave. Dave is the ideal user to test my hypothesis because he knows how to use Spotify very well and curates and listens to playlists daily. Click below to enlarge image.</p>
        </div>
        <a class="w-inline-block w-lightbox" href="#"><img class="project-body-image" src="images/Persona.png" width="60%">
          <script class="w-json" type="application/json">
            { "items": [{
              "_id": "577ea1f5e3f0f32215857d16",
              "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/571abfc80a8819820933b957/577ea1f5e3f0f32215857d16_Persona.png",
              "fileName": "Persona.png",
              "origFileName": "Persona.png",
              "width": 800,
              "height": 825,
              "fileSize": 274227,
              "type": "image",
              "url": "images/Persona.png"
            }] }
          </script>
        </a>
        <div class="w-richtext">
          <p>If I were to take this on as a real redesign, I would then go out and validate that Dave would be the correct persona to use. However, for the sake of this case study, I will assume that Dave is the correct persona.</p>
          <h3 id="usability-testing">Usability Testing</h3>
          <p>On a sunny Saturday afternoon at Dolores Park, I found some people who matched my persona, Dave, to perform usability tests. To test my hypothesis, I&nbsp;targeted the playlist feature of Spotify:&nbsp;how people find songs, how they add songs, and if they know about the hidden Filter/Sort (revealed on extra drag down action).</p>
          <h4>I asked users to:</h4>
          <p>1.&nbsp;&nbsp;&nbsp;&nbsp; Pretend they were on a road trip with friends and that everyone wanted to listen to some popular songs (anticipating that users would open one of Spotify's curated playlists. In hindsight, I could have included more guidance to this point, but I wanted to leave the instruction open-ended)
            <br>2.&nbsp;&nbsp;&nbsp;&nbsp; Find two songs that starts with a specific letter
            <br>3.&nbsp;&nbsp;&nbsp;&nbsp; Find two songs by a specific artist
            <br>4.&nbsp;&nbsp;&nbsp;&nbsp; Create a new playlist and add five songs</p>
          <h4>Outcome</h4>
          <p>After testing 7 users, here are the results: (click to enlarge image)</p>
        </div>
        <a class="w-inline-block w-lightbox" href="#"><img class="project-body-image" src="images/User Testing Results.png" width="80%">
          <script class="w-json" type="application/json">
            { "items": [{
              "_id": "577ea3043a9f1a3f1536951f",
              "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/571abfc80a8819820933b957/577ea3043a9f1a3f1536951f_User%20Testing%20Results.png",
              "fileName": "User Testing Results.png",
              "origFileName": "User Testing Results.png",
              "width": 1050,
              "height": 600,
              "fileSize": 171837,
              "type": "image",
              "url": "images/User Testing Results.png"
            }] }
          </script>
        </a>
        <div class="w-richtext">
          <p>As predicted, many people either did not know or could not initially find Filter/Sort in the playlist.</p>
          <blockquote>I just have to keep going, keep going, keep going, until I find the song. If I’m lucky, it shows up on the first page.</blockquote>
          <p>A greater pain point I discovered was the lack of Filter/Search on&nbsp;Spotify’s top charts,&nbsp;artist pages, and radio.</p>
          <blockquote>Sometimes you can pull down here and you get a little search… It doesn’t look like I have a good mechanism for search within the playlist they give me for radio.</blockquote>
          <blockquote>I don’t know why they don’t have [filter and sort] for everything.</blockquote>
          <p>Users were not too bothered by the process of building playlists as I has initially predicted.</p>
          <h3 id="testing-synthesis">Testing Synthesis</h3>
          <p>Here are my results according to&nbsp;pain points: (click to enlarge image)</p>
        </div>
        <a class="w-inline-block w-lightbox" href="#"><img class="project-body-image" src="images/user pain points2.png" width="80%">
          <script class="w-json" type="application/json">
            { "items": [{
              "_id": "577ea49a044a522433e51523",
              "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/571abfc80a8819820933b957/577ea49a044a522433e51523_user%20pain%20points2.png",
              "fileName": "user pain points2.png",
              "origFileName": "user pain points2.png",
              "width": 1000,
              "height": 987,
              "fileSize": 232970,
              "type": "image",
              "url": "images/user pain points2.png"
            }] }
          </script>
        </a>
        <div class="w-richtext">
          <p>Next, I charted them in terms of importance to the business and importance to the users:
            <br>
          </p>
        </div>
        <a class="w-inline-block w-lightbox" href="#"><img class="project-body-image" src="images/User Testing Synthesis.png" width="80%">
          <script class="w-json" type="application/json">
            { "items": [{
              "_id": "577ea542e3f0f3221585b01f",
              "cdnUrl": "https://daks2k3a4ib2z.cloudfront.net/571abfc80a8819820933b957/577ea542e3f0f3221585b01f_User%20Testing%20Synthesis.png",
              "fileName": "User Testing Synthesis.png",
              "origFileName": "User Testing Synthesis.png",
              "width": 1100,
              "height": 1000,
              "fileSize": 125416,
              "type": "image",
              "url": "images/User Testing Synthesis.png"
            }] }
          </script>
        </a>
        <div class="w-richtext">
          <h3 id="ideation">Ideation</h3>
          <p><strong>Ultimately I decided the following should be fixed:</strong>
          </p>
          <p>1.&nbsp;&nbsp;&nbsp;&nbsp; Making Search/Sort visible without the extra action of dragging down
            <br>2.&nbsp;&nbsp;&nbsp;&nbsp; Adding Search/Sort to Spotify’s top song charts and to artist pages **
            <br>3.&nbsp;&nbsp;&nbsp;&nbsp; Changing the wording from “Filter” to “Search” to add clarity</p>
          <p>** I decided not to add Search/Sort for radio since radio is normally used without arranging or searching through the queue.</p>
        </div><img src="images/sketches.png">
        <div class="w-richtext">
          <h3 id="prototyping">Prototype</h3>
          <p>Click through my final prototype below!</p>
        </div><img src="images/notes.png">
        <div class="w-richtext">
          <h3>Next Steps</h3>
          <p>This is just one of the methods used in the design process. The next steps for&nbsp;this project would be perform a user test to see if the changes I'm proposing are justified. After, I would iterate on those results, and if needed, do another round of user test to validate.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="more-projects-section w-section" id="more-projects">
    <div class="portfolio-container w-container">
      <div class="more-projects-header">View More Projects</div>
      <div class="w-row">
        <div class="dynamic-item w-col w-col-4">
          <a class="main-page-link-block w-inline-block" href="projects/glifft.php"><img class="main-page-image" src="images/glifft main pic square.png" width="300">
            <div class="main-page-title">Glifft: MVP for Machine-Learning Gifting Mobile Application</div>
          </a>
        </div>
        <div class="dynamic-item w-col w-col-4">
          <a class="main-page-link-block w-inline-block" href="projects/canopy.php"><img class="main-page-image" src="images/canopy main square.png" width="300">
            <div class="main-page-title">Canopy: Responsive Web for Interactive Learning Platform</div>
          </a>
        </div>
        <div class="dynamic-item w-col w-col-4">
          <a class="main-page-link-block w-inline-block" href="projects/somawater.php"><img class="main-page-image" src="images/Soma Main Square.png" width="300">
            <div class="main-page-title">Soma Water: Visual Hierarchy to Optimize Conversion</div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php 
      require_once('../php/footer.php'); 
      require_once('../php/scripts.php'); 
  ?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>