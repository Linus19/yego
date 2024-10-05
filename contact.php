<?php include("header.php"); ?>

<!-- Contact Us Section -->
<!-- Contact Us Section -->
<section class="contact-us py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4 display-5">Contact Us for Any Queries</h2>
        <p class="text-center mb-5 text-muted">Our highly qualified team possesses advanced skills and significant industry
            experience, allowing them to provide high-quality services and solutions to all our clients.</p>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="contact-info p-5 border rounded shadow-sm bg-white text-center">
                    <!-- Office Address -->
                    <div class="mb-4">
                        <i class="bi bi-geo-alt-fill text-primary fs-1 mb-3"></i>
                        <h4 class="text-primary mb-2">Visit Us</h4>
                        <p class="mb-0">EBBY TOWERS - Kenyatta Street, Kitale, Kenya</p>
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-4">
                        <i class="bi bi-envelope-fill text-primary fs-1 mb-3"></i>
                        <h4 class="text-primary mb-2">Email Us</h4>
                        <p><a href="mailto:mureyyego@gmail.com" class="text-decoration-none">mureyyego@gmail.com</a></p>
                    </div>
                    
                    <!-- Phone -->
                    <div>
                        <i class="bi bi-telephone-fill text-primary fs-1 mb-3"></i>
                        <h4 class="text-primary mb-2">Call Us</h4>
                        <p>+254780851599</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Google Maps Section -->
<section>
    <div class="map-container mb-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3822.9767110201356!2d35.00115691031709!3d1.0143476989716238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178227a4d97551d5%3A0x7dad05e1867bdf50!2sEbby%20Towers!5e1!3m2!1sen!2ske!4v1727851574930!5m2!1sen!2ske"
            class="w-100 rounded shadow" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>


<!-- Send Us a Message Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Send us a Message</h2>

        <form action="https://api.web3forms.com/submit" class="bg-white p-5 border rounded shadow-lg mx-auto"
            method="POST" style="max-width: 700px;" onsubmit="handleFormSubmission(event);">

            <input type="hidden" name="access_key" value="b24f3bfb-e474-4c1d-ac27-7dde95172200">

            <!-- Name and Email Fields -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label for="name">Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" id="name" class="form-control" placeholder="Enter your name" name="name"
                                required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" id="email" class="form-control" placeholder="Enter your email"
                                name="email" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Message Field -->
            <div class="form-group position-relative mb-3">
                <label for="message">Message</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-comment"></i>
                        </span>
                    </div>
                    <textarea id="message" rows="5" class="form-control" placeholder="Enter your message" name="message"
                        required></textarea>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4 py-2" >
                    Submit
                    <i class="fas fa-paper-plane ml-2"></i>
                </button>
            </div>
        </form>
    </div>
</section>

<?php include("footer.php"); ?>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

<script>
    function handleFormSubmission(event) {
        event.preventDefault(); // Prevents default form submission

        const form = event.target;

        // Submits the form to Web3Forms
        fetch(form.action, {
            method: form.method,
            body: new FormData(form)
        }).then(response => {
            if (response.ok) {
                // Clears the form after successful submission
                form.reset();

                // Reloads the page after a delay
                setTimeout(function () {
                    location.reload();
                }, 2000); // Adjust delay time as needed
            } else {
                console.error('Form submission failed:', response);
            }
        }).catch(error => console.error('Error:', error));
    }
</script>

</body>

</html>