<?php require __DIR__ . "/inc/header.php"; ?> <!-- When the user logs in -->
<section class="vh-100 text-center">
    <div class="container py-5 h-75">
        <p class="card-text">Leave us a review!</p>
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <form action="submit_review_process.php" method="POST">
                    <div class="mb-3">
                        <label for="reviewText" class="form-label">Your Review</label>
                        <textarea class="form-control" id="reviewText" name="reviewText" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <select class="form-select" id="rating" name="rating" required>
                            <option value="5">5 - Excellent</option>
                            <option value="4">4 - Very Good</option>
                            <option value="3">3 - Good</option>
                            <option value="2">2 - Fair</option>
                            <option value="1">1 - Poor</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . "/inc/footer.php"; ?>
