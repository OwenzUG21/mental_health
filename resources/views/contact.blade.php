 @include('includes.header')
       <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container">
             
                <h2> MUBS MENTAL HEALTH CONTACT</h2>
                <p>NOW IS THE TIME <br>
                 Your Mental Health Matters together  with MUBS 
                </p>
                <p>Empowering students with knowledge about   Mental Health Matters together  with MUBS </p>
                <!-- <button class="cta-button">Explore More</button> -->
            </div>
        </section>
        <section class="mrr">
            <div class="mar">
                <div>
                     <h3 class="hr3" >MENTAL NEWS:</h3>
                </div>

               
                
                <marquee class="mmm" behavior="" direction="left">
                       <p>
                        Your Mental Health Matters together  with MUBS and the Ministry of Education and Sports. It is a Non – denominational Campain which strives for Academic Excellence, Discipline and Spirituality.

                       MUBS MENTAL HEALTH provides a holistic Condition to cater for the learners’ proper growth and development needs.

                       </p> 

                </marquee>
                
            </div>

        </section>
       

        <section id="message">
            
            <div class="mes">
                <div class="mass">
                    <h1>MUBS MENTAL HEALTH</h1>
                    <p>
                       Your Mental Health Matters together  with MUBS and the Ministry of Education and Sports. It is a Non – denominational Campain which strives for Academic Excellence, Discipline and Spirituality.

                       MUBS MENTAL HEALTH provides a holistic Condition to cater for the learners’ proper growth and development needs.

                          Since its inception in 1995, the school has registered remarkable growth  and development in Mental heaith in terms of  population.
                    </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a class="km" href="">More About us</a>

                </div> 
     
                <div class="mespic">
                    <img class="pp" src="young-depressed-adult-home-1.jpg" alt=""  width="556px">
     
                </div>

            </div>
          
            

        </section>

        <section class="courts">

            <div>
                <div>

                </div>
            </div>

            <div>
                <div>

                </div>
            </div>
        </section>
{{-- 
<section class="kt ko">
        <div class="hj">
             <h1>Contact us</h1> --}}
        {{-- <p>Our customers can reach us out here</p> --}}
        {{-- <form action="/cont" method="POST">
            @csrf
            <label for="name">Name</label><br>
            <input type="text" placeholder="Your name" required name="name"><br>
            <label for="email">Email</label><br>
            <input type="text" placeholder="Your email address" name="email"><br>
            <label for="message">Message</label><br>
            <textarea name="message"  placeholder="your message" name="message"></textarea><br>
            <button type="submit">Send message</button>
         --}}

             {{-- <script>
                showNotification('Message Sent!',"{{session('success')}}");
            </script> --}}

        {{-- </form>
            @if (session('success'))
            <script>
                showNotification('Message sent',"{{session('success')}");
            </script>
            @endif

        </div>
       
    </section> --}}
    


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f5f5f0;
            padding: 2rem 1rem;
            color: #4a5568;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #4a5568;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .header p {
            color: #718096;
            font-size: 1rem;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Main Content Grid */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: start;
        }

        /* Left Column - Contact Form */
        .contact-form-section {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            font-size: 1.5rem;
            color: #4a5568;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        label {
            font-size: 0.9rem;
            color: #4a5568;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .optional {
            color: #a0aec0;
            font-weight: 400;
        }

        input[type="text"],
        input[type="email"],
        select,
        textarea {
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            font-size: 0.95rem;
            font-family: inherit;
            color: #4a5568;
            background-color: white;
            transition: border-color 0.3s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #a8c5a0;
        }

        input::placeholder,
        textarea::placeholder {
            color: #cbd5e0;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23718096' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            padding-right: 2.5rem;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background-color: #a8c5a0;
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 0.5rem;
        }

        .submit-btn:hover {
            background-color: #95b389;
        }

        .privacy-note {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            font-size: 0.8rem;
            color: #a0aec0;
        }

        .privacy-note svg {
            width: 14px;
            height: 14px;
            flex-shrink: 0;
        }

        .privacy-link {
            color: #a0aec0;
            text-decoration: underline;
        }

        /* Right Column */
        .right-column {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Other Ways to Reach Us */
        .contact-info-section {
            background-color: #e8ebe6;
            padding: 2rem;
            border-radius: 10px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.25rem;
            color: #4a5568;
            font-size: 0.95rem;
        }

        .contact-item:last-of-type {
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            width: 20px;
            height: 20px;
            color: #718096;
            flex-shrink: 0;
        }

        .response-time {
            font-size: 0.85rem;
            color: #718096;
            line-height: 1.5;
        }

        /* Common Questions */
        .faq-section {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .faq-item {
            margin-bottom: 0.75rem;
        }

        .faq-question {
            width: 100%;
            padding: 1rem;
            background-color: white;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            text-align: left;
            cursor: pointer;
            font-size: 0.95rem;
            color: #4a5568;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s;
        }

        .faq-question:hover {
            background-color: #f9fafb;
        }

        .faq-answer {
            display: none;
            padding: 1rem;
            background-color: #f9fafb;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 5px 5px;
            margin-top: -5px;
            color: #718096;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .faq-answer.show {
            display: block;
        }

        /* Success Message */
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
            display: none;
        }

        .success-message.show {
            display: block;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .contact-form-section,
            .contact-info-section,
            .faq-section {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>We're Here to Listen</h1>
            <p>Your first step towards support is just a message away. Reach out to us, and we'll get back to you as soon as possible. Your conversation is safe with us.</p>
        </div>

        <!-- Main Content -->
        <div class="content-grid">
            <!-- Left Column - Contact Form -->
            <div class="contact-form-section">
                <h2 class="section-title">Send Us a Message</h2>
                
                <div class="success-message" id="successMessage">
                    Thank you for reaching out! We've received your message and will respond within 24-48 hours.
                </div>
{{-- onsubmit="handleSubmit(event) --}}
                <form action="/cont" id="contactForm" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="yourName">Your Name</label>
                            <input 
                                type="text" 
                                id="yourName" 
                                name="name"
                                placeholder="Enter your full name"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="yourEmail">Your Email</label>
                            <input 
                                type="email" 
                                id="yourEmail" 
                                name="email"
                                placeholder="Enter your email address"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="subject">Subject <span class="optional">(Optional)</span></label>
                        <select id="subject" name="subject">
                            <option value="">How can we help?</option>
                            <option value="general">General Inquiry</option>
                            <option value="support">Need Support</option>
                            <option value="resources">Resource Request</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Message</label>
                        <textarea 
                            id="message" 
                            name="message"
                            placeholder="Please type your message here..."
                            required
                        ></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>

                    <div class="privacy-note">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span>Your information is confidential. Read our <a href="#" class="privacy-link">Privacy Policy</a></span>
                    </div>
                </form>
            </div>

            <!-- Right Column -->
            <div class="right-column">
                <!-- Other Ways to Reach Us -->
                <div class="contact-info-section">
                    <h2 class="section-title">Other Ways to Reach Us</h2>
                    
                    <div class="contact-item">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>support@mindwell.com</span>
                    </div>

                    <div class="contact-item">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>(123) 456-7890</span>
                    </div>

                    <div class="contact-item">
                        <svg class="contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>123 Wellness Lane, Serenity City, ST 12345</span>
                    </div>

                    <p class="response-time">We typically respond within 24-48 business hours.</p>
                </div>

                <!-- Common Questions -->
                <div class="faq-section">
                    <h2 class="section-title">Common Questions</h2>
                    
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFaq(0)">
                            <span>What happens after I reach out?</span>
                            <span>▼</span>
                        </button>
                        <div class="faq-answer" id="faq0">
                            Once you submit your message, our support team will review it and respond within 24-48 hours. We'll reach out via email to continue the conversation and provide the assistance you need.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFaq(1)">
                            <span>Is my information confidential?</span>
                            <span>▼</span>
                        </button>
                        <div class="faq-answer" id="faq1">
                            Yes, absolutely. We take your privacy very seriously. All information shared with us is kept strictly confidential and is protected under our privacy policy. We never share your personal information without your explicit consent.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            
            const form = document.getElementById('contactForm');
            const successMessage = document.getElementById('successMessage');
            
            // Get form values
            const formData = {
                name: document.getElementById('yourName').value,
                email: document.getElementById('yourEmail').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };

            // Log the submission (in real app, this would send to server)
            console.log('Contact form submitted:', formData);

            // Show success message
            successMessage.classList.add('show');

            // Reset form
            form.reset();

            // Scroll to top to show success message
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);
        }

        function toggleFaq(index) {
            const answer = document.getElementById('faq' + index);
            answer.classList.toggle('show');
        }
    </script>



<script>
      function showNotification(name,email,message){
        if(!("Notification" in window)){
            alert(name +"\n"+ email +"\n"+ message);
            return;
        }

        if(Notification.permission==="granted"){
            new Notification(name,email,{ body:message});
            
        }else if(Notification.permission==="denied"){
            Notification.requestPermission().then(permission =>{
                 if(permission==="granted"){
            new Notification(name,email,{ body:message});
            
        }
            });
        }
    }
     console.log("main.js loaded succefully");

</script>





 

  @include('includes.footer')