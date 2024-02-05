<!DOCTYPE html>
<html>

<head>
	<title>Basic - Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
	<div id="wrapper">
        <!-- header file include -->
        <?php @include "include/header.php";?>
        <!-- nav file include -->
        <?php @include "include/nav.php";?>

		<div class="c_wrapper">

            <!-- sidebar file include -->
            <?php @include "include/sidebar.php";?>
            <!-- article file include -->
            <?php @include "include/article.php";?>

		</div>

		<div class="content_wrap">

			<div>
                <h2>
                    <a href="#">Lorem ipsum dolor sit amet</a>
                </h2>
                <div class="section_wrap">
                    <img src="img/2.jpg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore . sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. s labore et dolore magna aliqua. Ut enim ad
                        minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecataliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit laborum. <a href="#">more...</a></p>
                </div>
            </div>

            <div>
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a class="active" href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>

		</div>

        <!-- Footer file include -->
        <?php @include "include/footer.php";?>

	</div>
</body>

</html>