<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="To achieve excellent standards of quality education by keeping pace with rapidly changing technologies & create computer professionals of global standards with capabilities of accepting new challenges.">
    <meta name="keywords" content="SCSIT, INDORE, DAVV, COMPUTER SCIENCE, COLLEGE">
    <meta name="author" content="scsit davv">
    <title>Scsit Davv</title>
    <link rel="icon" href="./images/logo.png" type="image/png" sizes="16x16">
    <!-- SCRIPTS START   -->
    <?php include './includes/scriptincludes.php';?>
    <!-- SCRIPTS END -->
    <style>
    .content-left {
        border: none;
    }

    .content-left h1 {
        font-size: 16px;
    }

    .news-card {
        padding: 10px;
        margin: 10px 0;
    }
    </style>
</head>


<body>

    <div class="root">
        <!-- HEADER START   -->
        <?php include './includes/header.php';?>
        <!-- HEADER END -->

        <div class="page-title"></div>

        <!-- main content area -->
        <div class="primary-container">
            <div class="main-content-area" id="main-content-area">
                <div class="content-left padding-border">
                    <!-- ADD NEW CONTENT DOWN HERE -->
                    <h3 style="text-align:center;margin: 20px 0">Students</h3>
                    <div class="news-wrapper">
                        <div class="all-news">
                            <a href="assets/pdf/Students 2020.pdf"><div class="news-card"><h1>List of admitted students in 2020</h1></div></a>

                            <a href="assets/pdf/Students 2019.pdf"><div class="news-card"><h1>List of admitted students in 2019</h1></div></a>

                            <a href="assets/pdf/Students 2018.pdf"><div class="news-card"><h1>List of admitted students in 2018</h1></div></a>
                        
                            <a href="assets/pdf/Student 2017.PDF"><div class="news-card"><h1>List of admitted students in 2017</h1></div></a>
                        
                            <a href="assets/pdf/Student 2016.PDF"><div class="news-card"><h1>List of admitted students in 2016</h1></div></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar content-right">
                    <div class="sidebar-content" id="sidebar">

                        <ul>
                            <a href="./faculty.php">
                                <li><span>????</span>Faculty Profile</li>
                            </a>
                            <a href="./staff.php">
                                <li><span>????</span>Staff Members</li>
                            </a>

                        </ul>
                        <!-- SIDEBAR LINKS START   -->
                        <?php include './includes/sidebarlinks.php';?>
                        <!-- SIDEBAR LINKS END -->

                    </div>
                </div>
            </div>
        </div>


        <!-- FOOTER START   -->
        <?php include './includes/footer.php';?>
        <!-- FOOTER END -->

    </div>

</body>

</html>