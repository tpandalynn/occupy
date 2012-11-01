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
  
</head>
  
<body>

<!-- Start of first page: #p1 -->
  <div data-role="page" id="p1">
  	<div data-role="header" data-theme="b">
  		<h3>OccupyCongress</h3>

      <a data-role="button" href="settings.php" data-transition="flip" class="ui-btn-right" id="gear" data-icon="gear" >
        Settings
      </a>
    </div>
    
    <div data-role="content">
      <ul data-role="listview" data-divider-theme="b" data-inset="true">
        <li data-role="list-divider" role="heading">Trending Op-Eds</li>
        <li>
          <a href="#p2" data-transition="slide">
          <img src="images/redCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
          The Only Way to Revive Real Democracy
          </a>
        </li>
        <li>
          <a href="#p2" data-transition="slide">
          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
          2nd Most Trending Article
          </a>
        </li>
        <li>
          <a href="#p2" data-transition="slide">
          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
          3rd Most Trending Article
          </a>
        </li>
        <li>
          <a href="#p2" data-transition="slide">
          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
          4th Most Trending Article
          </a>
        </li>
        <li>
          <a href="#p2" data-transition="slide">
          <img src="images/greenCircle.png" alt="Red"class="ui-li-icon ui-li-thumb">
          5th Most Trending Article
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
    
	    <div class="article"> 
	    
		    <h3>New York Times Op-Ed</h3>
		    
		    <p>If we're serious about restoring government  of, by and for the people, we need to get big money out of our elections.</p>
	
				<p>From the Watergate era through the early 2000s, Congress and state legislatures passed campaign finance laws designed to limit the influence of corporations and wealthy donors on elections and public officials.  The system was less than perfect, but it has been decimated...</p></div>
				
				<p><a href="#p3" data-role="button" data-transition="slide">Read More</a></p>	
				<p><a href="#popup" data-role="button" data-rel="dialog" data-transition="pop">Comment</a></p>
				
				<p style="text-decoration:underline">How much do you agree with the article?<br/>
				<input type="range" min="1" max="10"/></p>
				
			
			<h3>Most Popular Comments</h3>
			
			<p>+78 "I disagree with the comments about this because of X, Y, and Z."</p>
			<p>+24 "However, you have to look at A, B, and C."</p>
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
    
    <div class="article"> 
    
    <h3>New York Times Op-Ed</h3>
    
    <button>Display Highlighted Regions</button>
    
    <p>If we're serious about restoring government  of, by and for the people, we need to get big money out of our elections.</p>

			<p>From the Watergate era through the early 2000s, Congress and state legislatures passed campaign finance laws designed to limit the influence of corporations and wealthy donors on elections and public officials.  The system was less than perfect, but it has been decimated in recent years by Supreme Court rulings like Citizens United v. F.E.C. that give corporations and unions the same constitutional rights as human beings, and equate spending an unlimited amount of money on politics with free speech.</p>
			
			<p>The money now flowing into our politics isn't free speech; it's paid speech.  In this presidential campaign alone, a handful of deep-pocketed supporters of Governor Romney and President Obama are in the process of spending well over $1 billion carpeting the airwaves with mostly negative advertising.</p>
			
			<p>No one invests such sums without expecting a return, and no one should be surprised when this year's big political investors start collecting favors from the people they helped elect. It's time to stop this charade. Corporations aren't people.  They don't vote, get sick or die in wars for our country. The Constitution was written to protect the rights of individuals, not corporations. </p>
			
			<p>We can correct the Supreme Court's misreading of our Constitution by passing an amendment that authorizes limits on campaign contributions and spending, reins in corporate rights and ensures that all citizens, regardless of wealth, have an opportunity to speak and be heard.</p>
			
			<p>Passing a constitutional amendment is rightly difficult. It requires super-majority support like that evident in a Hart Research poll done last year that  found 87 percent of Democrats, 82 percent of independents and 68 percent of Republicans in support of an amendment to overturn Citizens United.</p>
			
			<p>Legislators in nine states and local officials in more than 300 cities already have called for such an amendment. This Election Day, voters in Colorado, Montana, Chicago, San Francisco and dozens of municipalities will vote on ballot measures instructing their members of Congress to work and vote for such an amendment.</p>
			
			<p>Big money has no place in elections, and our democracy should never be for sale. Let's "amend to mend" the misreading of our Constitution by an overly ideological Supreme Court.</p></div>
      
    </div>
      
    
  </div><!-- /page 3 -->
  
  
<!-- Start of third page: #popup -->
  <div data-role="page" id="popup">

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
	</div><!-- /page popup -->
	

	
  	<!-- Start of fourth page: #updateInfo -->
  <div data-role="page" id="updateInfo">
		<div data-role="header" data-theme="e">
			<h1>Update</h1>
		</div>

		<div data-role="content" data-theme="d">	
			<h2>Update Your Information</h2>
			
			<div data-role="fieldcontain">
		    <p>Hello, binderz123</p>
		    <p>New Password:<input style="width:50%" type="password" name="name" id="name"/></p>
		    <p>Repeat Password:<input style="width:50%" type="password" name="name" id="name"/></p>
		    <p>Party:<select>
		    <option value="a">Democratic</option>
		    <option value="b">Republican</option>
		    <option value="c">Other</option>
		    </select></p>
		    <p>Age Range:<select>
		    <option value="a">Under 21</option>
		    <option value="b">21-25</option>
		    <option value="c">26-30</option>
		    <option value="c">31-35</option>
		    <option value="c">36-40</option>
		    <option value="c">41-45</option>
		    <option value="c">46-50</option>
		    <option value="c">51-55</option>
		    <option value="c">56-60</option>
		    <option value="c">61-65</option>
		    <option value="c">Over 65</option>
		    </select></p>
			</div>
				
			<p><a href="#two" data-rel="back" data-role="button" data-inline="true" data-icon="back">Update!</a></p>	
		</div>
	</div>
	
	
</div><!-- /page updateInfo -->

  
</body>

</html>