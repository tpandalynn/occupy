<!DOCTYPE html>
<html>
	
<head>

	<title>OccupyCongress</title>
	
  <meta charset="utf-8" />
  <meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
  <link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
  <link rel="stylesheet" href="my.css" />
  <link rel="stylesheet" href="own.css" />
  
  <script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
  <!--<script src="my.js"></script>-->
  
  <?php
		include("config.php");
	?>
	
	<script type="text/javascript">
	
	var articleData = new Array();
	var commentData = new Array();
	
	
	
	
	$(function() {
		$.getJSON("getArticles.php", function(json) {
			
			console.log(json);
			
			
			for(i=0; i<json.ARTICLES.length; i++) {
				$("span.articleTitle").eq(i).html(json.ARTICLES[i].title);
				
				aID = json.ARTICLES[i].articleID;
				
				$("a.articleTitle").eq(i).data("articleID", aID);

				articleData[aID] = new Array();
				commentData[aID] = new Array();
				
				articleData[aID]["Source"] = json.ARTICLES[i].source;
				articleData[aID]["Date"] = json.ARTICLES[i].date;
				articleData[aID]["Authors"] = json.ARTICLES[i].authors;
				articleData[aID]["Date"] = json.ARTICLES[i].date;
				articleData[aID]["ArticleText"] = json.ARTICLES[i].articleText;
				articleData[aID]["Link"] = json.ARTICLES[i].link;
			}
			
			for(i=0; i<json.COMMENTS.length; i++) {
				aID = json.COMMENTS[i].articleID;
				
				commentArray = new Array();
				
				commentArray["CommentID"] = json.COMMENTS[i].commentID;
				commentArray["Comment"] = json.COMMENTS[i].comment;
				commentArray["NumBumps"] = json.COMMENTS[i].numBumps;
				
				commentData[aID].push(commentArray);
			}
			
			console.log(commentData);
			
			
			$().doRest();
			
		});
		
		
		//Set Source
		jQuery.fn.doRest = function() {
			$("a.articleTitle").click(function() {
				articleID = $(this).data("articleID");
				
				//Fill in Source Text
				$("h3#source").html(articleData[articleID]["Source"]);
				
				var t = articleData[articleID]["ArticleText"];
				var pattern = /<p>|<\/p>/g;
				var sp = t.split(pattern);
				
				//Maybe add better logic here?
				var st = "<p>" + sp[1] + "</p>";
				
				//Fill in article preview
				$("div#articlePreview").html(st);
				
				//Fill in full article
				$("div#articleFull").html(t);
				
				//Fill in comments
				c1 = "";
				c2 = "";
				
				$("div#popularComments").html("");
				
				if(commentData[articleID][0] != null) {
					c1 = "<p>+" + commentData[articleID][0]["NumBumps"] + " " + commentData[articleID][0]["Comment"] + "</p>";
				}
				
				if(commentData[articleID][1] != null) {
					c2 = "<p>+" + commentData[articleID][1]["NumBumps"] + " " + commentData[articleID][1]["Comment"] + "</p>";
				}
				
				$("div#popularComments").append(c1+c2);
			});
			

			
		};
		
		
		
		
	});
	
	</script>
  
</head>
  


<body>

<!-- Start of first page: #p1 -->
  <div data-role="page" id="p1">
  	<div data-role="header" data-theme="b">
  		<h3>OccupyCongress</h3>

  		<a data-role="button" href="createprofile.php" data-rel="dialog" data-transition="pop" class="ui-btn-left" id="gear" data-icon="button" >
       Create Profile
      </a>
      <a data-role="button" href="settings.php" data-transition="flip" class="ui-btn-right" id="gear" data-icon="gear" >
        Settings
      </a>
    </div>
    
    <div data-role="content">
      <ul data-role="listview" data-divider-theme="b" data-inset="true">
        <li data-role="list-divider" role="heading">Trending Op-Eds</li>
        <li>
          <a class="articleTitle" href="#p2" data-transition="slide">
	          <img src="images/redCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
	          <span class="articleTitle"></span>
          </a>
        </li>
        <li>
          <a class="articleTitle" href="#p2" data-transition="slide">
	          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
	          <span class="articleTitle"></span>
          </a>
        </li>
        <li>
          <a class="articleTitle" href="#p2" data-transition="slide">
	          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
	          <span class="articleTitle"></span>
          </a>
        </li>
        <li>
          <a class="articleTitle" href="#p2" data-transition="slide">
	          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
	          <span class="articleTitle"></span>
          </a>
        </li>
        <li>
          <a class="articleTitle" href="#p2" data-transition="slide">
	          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
	          <span class="articleTitle"></span>
          </a>
        </li>
      </ul>
      
    </div>
      
    <div data-role="footer" data-position="fixed" data-theme="b">
      <input placeholder="Search Articles.." data-type="search" class="ui-input-text ui-body-c"/>
    </div>
  </div><!-- /page 1 -->
  
  
  <!-- Start of second page: #p2 -->
  <div data-role="page" id="p2" data-add-back-btn="true">
  	<div data-role="header"  data-theme="b">
  		<h3>Op-Ed View</h3>

      <a data-role="button" href="settings.php" data-transition="flip" class="ui-btn-right" id="gear" data-icon="gear">
        Settings
      </a>
    </div>
    
    <div data-role="content">
 
	    <h3 id="source"></h3>
	    
	    <div id="articlePreview"></div>
	    
	    <!--<p>If we're serious about restoring government  of, by and for the people, we need to get big money out of our elections.</p>

			<p>From the Watergate era through the early 2000s, Congress and state legislatures passed campaign finance laws designed to limit the influence of corporations and wealthy donors on elections and public officials.  The system was less than perfect, but it has been decimated...</p></div>
			-->
			
			<p><a href="#p3" data-role="button" data-transition="slide">Read More</a></p>	
			<p><a href="#commentsPopup" data-role="button" data-rel="dialog" data-transition="pop">Comment</a></p>
			
			<p style="text-decoration:underline">How much do you agree with the article?<br/></p>
			
			<div data-role="controlgroup" data-type="horizontal">
				<a href="#" data-role="button">1</a>
				<a href="#" data-role="button">2</a>
				<a href="#" data-role="button">3</a>
				<a href="#" data-role="button">4</a>
				<a href="#" data-role="button">5</a>
			</div>
			
				
			
			<h3>Most Popular Comments</h3>
			<div id="popularComments"></div>
			<!--<p>+78 "I disagree with the comments about this because of X, Y, and Z."</p>
			<p>+24 "However, you have to look at A, B, and C."</p>-->
    </div>
    
      
    <div data-role="footer" data-position="fixed" data-theme="b">
      <input placeholder="Search Comments.." data-type="search" class="ui-input-text ui-body-c"/>
    </div>
  </div> <!-- /page 2 -->
  
  
  
  
  
    <!-- Start of second page: #p3 -->
  
  <div data-role="page" id="p3" data-add-back-btn="true">
  	<div data-role="header"  data-theme="b">
  		<h3>Reading Mode</h3>

      <a data-role="button" href="settings.php" data-transition="flip" class="ui-btn-right" id="gear" data-icon="gear">
        Settings
      </a>
    </div>
    
    <div data-role="content">

		  <h3 id="source"></h3>
		  
		  <button>Display Highlighted Regions</button>
		  
		  <div id="articleFull"></div>
	  </div>
	  
 </div><!-- /page 3 -->
 
 <!-- Comments -->
 <div data-role="page" id="commentsPopup">

		<div data-role="header" data-theme="e">
			<h1>Comment</h1>
		</div>

		<div data-role="content" data-theme="d">	
			<h2>Comment</h2>
			<p>Share your thoughts:</p>
			<textarea></textarea>
				
			<ul data-role="controlgroup" data-type="horizontal" class="localnav ui-corner-all ui-controlgroup ui-controlgroup-horizontal"><div class="ui-controlgroup-controls">
					<li data-role="button" data-transition="fade" class="ui-btn-active ui-btn ui-corner-left ui-btn-up-c" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="c"><span class="ui-btn-inner ui-corner-left"><span class="ui-btn-text">Make Public</span></span></li>
					<li data-role="button" data-transition="fade" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="c" class="ui-btn ui-btn-up-c"><span class="ui-btn-inner"><span class="ui-btn-text">Send Private</span></span></li>
				</div></ul>
				
			<p><a href="#two" data-rel="back" data-role="button" data-inline="true" data-icon="back">Submit</a></p>	
		</div>
	</div>

  
</body>

</html>