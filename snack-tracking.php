<?php
include 'header.php';
?>

<?php
include 'nav.php';
?>
<!--Welcome Back User Message-->
[html]
< ?php global $user_ID; if( $user_ID ) : ?>
< ?php if( current_user_can(‘level_0’) ) : ?>

Welcome back < ?php global $current_user; get_currentuserinfo(); echo ($current_user->user_login); ?>
< ?php else : ?>
< ?php endif; ?>
< ?php endif; ?>
[/html]
    
<body>
<p></p>
<!-- Form -->
<h3>Snack Tracking</h3>

<form method="post" action="#">
    <div class="row uniform">
    <div class="6u 12u$(xsmall)">
            <input type="text" name="name" id="name" value="" placeholder="Name" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="date" name="date" id="date" value="" placeholder="Date" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="time" name="time" id="time" value="" placeholder="Time" />
        </div>
        <div class="6u$ 12u$(xsmall)">
            <input type="text" name="food" id="food" value="" placeholder="Food" />
        </div>
        <div class="6u 12u$(xsmall)">
            <input type="text" name="amount" id="amount" value="" placeholder="Amount" />
        </div>
        <!-- Break -->
        <div class="12u$">
            <ul class="actions">
                <li><input type="submit" value="Submit" /></li>
                <li><input type="reset" value="Reset" class="alt" /></li>
            </ul>
        </div>
    </div>
</form>


<?php
include 'footer.php';
?>
</body>
</html>
