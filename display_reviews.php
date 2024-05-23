<?php require __DIR__ . "/inc/header.php"; ?> <!--When the user logs in -->
<section class="vh-100 text-center">
    <div class="container py-5 h-75">
        <h2>All Reviews</h2>
        <?php
        // Include the necessary files and initialize the database connection
        require_once "./classes/DatabaseController.php";
        $db = new DatabaseController("mysql:host=127.0.0.1;dbname=broadleigh_db;charset=utf8", "root", "");

        // Fetch all reviews from the database
        $query = "SELECT * FROM reviews";
        $stmt = $db->prepare($query);
        $stmt->execute(); // You need to execute the query after preparing it
        $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Display the reviews
        foreach ($reviews as $review) {
            echo "<p> Review: " . $review["Comment"] . "</p>";
            echo "<p> Rating:" . $review["Rating"] . "</p>";

        }
        ?>
    </div>
</section>  
<?php require __DIR__ . "/inc/footer.php"; ?>
