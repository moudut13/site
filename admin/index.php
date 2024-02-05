<!DOCTYPE html>
<html>

<head>
	<title>Admin - Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<div id="wrapper">
        <!-- header file include -->
        <?php @include "include/header.php";?>
        <!-- nav file include -->
        <?php @include "include/nav.php";?>
		<div class="content_wrap">
			<div class="admin">
                <section>
                    <nav>
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </nav>

                    <article>
                        <h1>Admin</h1>
                        <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
                        <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
                    </article>
                </section>

            </div>
		</div>
        <!-- Footer file include -->
        <?php @include "include/footer.php";?>
	</div>
</body>

</html>