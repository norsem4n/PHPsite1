<!DOCTYPE html>
<!--
Home Page for C&C Sports
@author fresquez, ckarnas
Last Modified: March 2021
-->

<?php

       require_once 'CCDisplay.php';
       
       session_start();
        
       $userFName = (isset($_SESSION['userinfo']))? $_SESSION['userinfo']['firstname'] : "";   
        
       if (!empty($userFName))
        {
            //echo "<p>Welcome back to C&C Sports, $userFName!</p>";
            $aDisplay = new CCDisplay();
            //display header
            $aDisplay->displayNavHeaderLoggedIn('C&CSports');
        }
        else
        {
            //echo "<p>Hello, and welcome to C&C Sports!</p>";
            $aDisplay = new CCDisplay();
            //display header
            $aDisplay->displayNavHeader('C&CSports');
        }        
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <header>
            <a href="Home.php">
                <img src="MainFour.png" alt="MainThree.png" />
            </a>
        </header>

        <form action="ViewAll.php" method="post" name="SelectGear" id="SelectGear">
            <br />
            <h4><strong>So you want to hit the slopes?</strong></h4> <br />
            <p>
            Great!! There are multiple ways to enjoy the great outdoors come winter time!
            If you've never tried either skiing or snowboarding, we can help you find the right gear. Some 
            say <strong>Skiing</strong> is easier to learn, but harder to master. It as also said that 
            <strong>Snowboarding</strong> is harder to learn, but easier to master.
            If you have a preference, proceed to the next section.
            </p>
            <br />
            <p>
            <h5><strong>But Which is For Me?</strong></h5>
            There is no wrong answer! Some people try both out and may switch back-and-forth often. With skiing, a beginner’s 
            technique can be broken down into a modular approach but its perfection will require you to become extremely technical.
            <br /><br />
            With snowboarding, it’s all about getting on your edges (both heel and toe edges). This is the hardest part but, 
            once it's achieved, you have the fundamental technique of the sport nailed - and can reach a pretty impressive 
            level pretty quickly, especially if you’re brave!
            <br /><br />
            For many people, snowsports become quite addictive – a skier or snowboarder looks forward to a snow holiday in 
            the mountains with the same desperation as a beach bum looks forward to a summer holiday by the sea. And 
            regardless if you choose skiing or snowboarding, if you get past the beginner stage and get really into it, 
            it is quite likely that the sport will become a central part of your life. You will want to keep going and 
            become an expert.
            </p>
            <br />
            <p>
            <h5><strong>Have a Preference?</strong></h5>
            Now, if you know already which sport you prefer amidst skiing and snowboarding, then you could narrow down where it is 
            you're going to ski/board most often. Different conditions will play a factor in the gear you use. For instance,
            if you're near a large mountain range that gets lots of snowfall, you may want to opt for "powder" like conditions.
            Should you be near a smaller local hill, all-mountain "groomer" style equipment will do the job. Fancy trying some tricks?
            The "park" style eqiupment will do the trick!
            <br /><br />
            Or, perhaps you want to expand your "quiver" for multiple conditions! When people get into the sport, they will often 
            have equipment for any style of riding mother nature throws at them or whatever destination they find themselves at.
            </p>
            <br />
            <p>
            <h5><strong>So What Do You Recommend?</strong></h5>
            If you're confident in which gear you want, or you just want to browse you can check out all of our 
            in-stock products, now.
            <!--<a href="ProductDetail.php">Product Detail Test</a>-->
            </p>
        <!--</form>-->   
<!--        <form action="ProjectSearch.php" method="post" name="SelectGear" id="SelectGear">
            <legend> Please Choose Your Preferred Gear</legend> <br /><br />

            <label for="shredstyle"> Single shred or double shred?</label> &nbsp;
            <label> Ski </label>
            <input type="radio" name="shred" id="ski" value="ski" checked="checked"/>
            <label> Snowboard </label>
            <input type="radio" name="shred" id="snowboard" value="snowboard" />
            <br />

            <label for="conditions"> Conditions to Send It?</label> &nbsp;
            <label> Groomers</label>
            <input type="radio" name="conditions" id="groomers" value="groomers" checked="checked"/>
            <label> Powder </label>
            <input type="radio" name="conditions" id="powder" value="powder" />
            <label> Park </label>
            <input type="radio" name="conditions" id="park" value="park" />
            <br />

            <label for="Gender">Select your gender:</label> &nbsp;
            <label> Female </label>
            <input type="radio" name="gender" id="f" value="F" checked="checked" />
            <label> Male </label>
            <input type="radio" name="gender" id="m" value="M" />
        </form>-->

            <br />
            <div class="d-grid gap-2" id="buttons">
                <button type="submit" value="Submit Answers" class="btn btn-primary btn-lg" name="search" target="_self">View Product(s)</button>
            </div>
            <br />
        </form>
           
    </body>
</html>

<?php
    //display footer
    $aDisplay->displayFooter();
?>
