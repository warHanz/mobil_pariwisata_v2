@extends('layouts.frontend')

@section('content')
    <!-- Page Title -->
    <div class="page-title bg-gray">
        <div class="container">
            <h1>Contact</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Contact Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section class="contact light-background">
        <div style="padding: 0 40px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.844316629504!2d110.47841881389219!3d-7.740818340655591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bdda01b3cc1%3A0x9650e6a9f0985415!2sJb%20Trans!5e0!3m2!1sid!2sid!4v1735561433113!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                        <h3>Contact Info</h3>
                        <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Our Location</h4>
                                <p>{{ $config['location'] }}</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div class="content">
                                <h4>Phone Number</h4>
                                <p>{{ $config['phone'] }}</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="content">
                                <h4>Email Address</h4>
                                <p>{{ $config['phone'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                        <h3>Get In Touch</h3>
                        <form id="emailForm" action="mailto:agenttripjogja@gmail.com" method="post" enctype="text/plain"
                            class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <div class="loading d-none">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message d-none">Your message has been sent. Thank you!</div>
                                    <button type="submit" class="btn">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Contact Section -->

    @push('js')
        <script>
            // Reset form when page loads
            window.onload = function() {
                document.getElementById('emailForm').reset();
            };

            // Handle form submission
            document.getElementById('emailForm').onsubmit = function(e) {
                // Get form data
                const name = this.elements['name'].value;
                const email = this.elements['email'].value;
                const subject = this.elements['subject'].value;
                const message = this.elements['message'].value;

                // Format body for mailto
                this.action = `mailto:agenttripjogja@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(
                `Name: ${name}
                                                                                        Email: ${email}
                                                                                        
                                                                                        Message:
                                                                                        ${message}`
            )}`;

                // Show loading and sent message
                const loadingDiv = this.querySelector('.loading');
                const sentDiv = this.querySelector('.sent-message');

                loadingDiv.classList.remove('d-none');

                setTimeout(() => {
                    loadingDiv.classList.add('d-none');
                    sentDiv.classList.remove('d-none');

                    // Hide success message after 3 seconds
                    setTimeout(() => {
                        sentDiv.classList.add('d-none');
                        this.reset(); // Reset form after sending
                    }, 3000);
                }, 1000);
            };
        </script>
    @endpush
@endsection
