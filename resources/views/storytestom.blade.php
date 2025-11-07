 @include('includes.header')
 <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container">
             
                <h2> MUBS MENTAL HEALTH STORYS & TESTOMARIES</h2>
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
       

        {{-- <section id="message">
            
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
                   
                </div> 
     
                <div class="mespic">
                    <img class="pp" src="young-depressed-adult-home-1.jpg" alt=""  width="556px">
     
                </div>

            </div>
          
            

        </section> --}}
{{-- 
        <section class="kt bg" id="nj">
        <div class="hj">
             <h1>Testimonies</h1>
        {{-- <p>Our customers can reach us out here</p> --}}
        {{-- <form action="/tes" method="POST">
            @csrf
            <label for="name">Name</label><br>
            <input type="file" placeholder="Your image"  name="image"><br>
            <label for="name">Name</label><br>
            <input type="text" placeholder="Your name"  name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" placeholder="Your email address" name="email"><br>
            <label for="message">Testimony</label><br>
            <textarea placeholder="your Testimony on mental health" name="test"></textarea><br>
            <button>Send Testimony</button>
        </form>

        
           <a href="" id="clx"><span class="close" id="clk">&times;</span></a>
             


        </div>
       
       
    </section> --}} 
    

        {{-- <section class="courts">
            @foreach ($tests as $test)
                <div class="jk">

                    <p>
                        <h5>{{$test->name}}</h5>
                         {{$test->email}}
                    </p>
                    <p class="mj"> {{$test->test}}</p>
            
                </div>
                
            @endforeach

           
            
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
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1.5rem;
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
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .write-testimony-btn {
            background-color: #6dc5b8;
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .write-testimony-btn:hover {
            background-color: #5ab5a8;
        }

        /* Stories Section */
        .stories-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .stories-header h2 {
            font-size: 1.5rem;
            color: #4a5568;
            font-weight: 600;
        }

        .sort-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .sort-container label {
            color: #718096;
            font-size: 0.9rem;
        }

        .sort-select {
            padding: 0.5rem 2rem 0.5rem 1rem;
            border: 1px solid #cbd5e0;
            border-radius: 5px;
            background-color: white;
            color: #4a5568;
            cursor: pointer;
            font-size: 0.9rem;
        }

        /* Testimonies Grid */
        .testimonies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .testimony-card {
            background-color: white;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .testimony-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .testimony-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2d3748;
        }

        .testimony-date {
            font-size: 0.85rem;
            color: #a0aec0;
        }

        .testimony-text {
            color: #4a5568;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        /* Load More Button */
        .load-more-container {
            text-align: center;
            padding: 2rem 0;
        }

        .load-more-btn {
            background-color: #d4e8e5;
            color: #4a5568;
            padding: 0.75rem 2.5rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .load-more-btn:hover {
            background-color: #c2dcd8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .testimonies-grid {
                grid-template-columns: 1fr;
            }

            .stories-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }

        /*  Form style */
          .form-container {
            background-color: white;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            width: 100%;
        }

        .form-title {
            font-size: 1.75rem;
            color: #4a5568;
            margin-bottom: 2rem;
            font-weight: 600;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
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
        textarea {
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
            font-size: 0.95rem;
            font-family: inherit;
            color: #4a5568;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: #6dc5b8;
        }

        input::placeholder,
        textarea::placeholder {
            color: #cbd5e0;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            background-color: #6dc5b8;
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background-color: #5ab5a8;
        }

        .disclaimer {
            margin-top: 1.5rem;
            font-size: 0.8rem;
            color: #a0aec0;
            line-height: 1.6;
        }

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
        @media (max-width: 640px) {
            body {
                padding: 1rem;
            }

            .form-container {
                padding: 1.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .form-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Words From Our Community</h1>
            <p>Read stories from people who have found support and healing through our community. Your story has power too.</p>
            <button class="write-testimony-btn km" id="mmm" href="">Write a Testimony</button>
        </div>

        <section class="ktz bg" id="nj">
            
                
            <div class="hj">
            <div class="form-container"> 
                <h1 class="form-title">Share Your Experience</h1>
                
                
                <div class="success-message" id="successMessage">
                    Thank you for sharing your story! Your testimony has been submitted successfully.
                </div>

                <form action="/tes" id="testimonyForm" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label for="yourName">
                                Your Name <span class="optional">(Optional)</span>
                            </label>
                            <input 
                                type="text" 
                                id="yourName" 
                                name="name"
                                placeholder="Anonymous"
                            >
                        </div>

                        <div class="form-group">
                            <label for="yourEmail">
                                Your Email <span class="optional">(Optional)</span>
                            </label>
                            <input 
                                type="email" 
                                id="yourEmail" 
                                name="email"
                                placeholder="you@example.com"
                            >
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="yourStory">Your Story</label>
                        <textarea 
                            id="yourStory" 
                            name="test"
                            placeholder="Share your journey with us..."
                            required
                        ></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Submit Your Story</button>

                    <p class="disclaimer">
                        Your privacy is important to us. Your name and contact information will not be shared publicly. 
                        All testimonials are reviewed before being published to ensure a safe and supportive community space.
                    </p>
                </form>

                {{-- <a href="" id="clxx"><span class="close" id="clk">&times;</span></a> --}}
            </div>
            <a href="" id="clx"><span class="clos" id="clk">&times;</span></a>
                </div>
    <script>
        function handleSubmit(event) {
            event.preventDefault();
            
            const form = document.getElementById('testimonyForm');
            const successMessage = document.getElementById('successMessage');
            
            // Get form values
            const formData = {
                name: document.getElementById('yourName').value || 'Anonymous',
                email: document.getElementById('yourEmail').value,
                story: document.getElementById('yourStory').value
            };

            // Log the submission (in real app, this would send to server)
            console.log('Testimony submitted:', formData);

            // Show success message
            successMessage.classList.add('show');

            // Reset form
            form.reset();

            // Hide success message after 5 seconds
            setTimeout(() => {
                successMessage.classList.remove('show');
            }, 5000);

            // Scroll to top to show success message
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
            </script>
         </section>

        <!-- Stories Header -->
        {{-- <div class="stories-header">
            <h2>Community Stories</h2>
            <div class="sort-container">
                <label for="sortSelect">Sort by:</label>
                <select id="sortSelect" class="sort-select" onchange="sortTestimonies()">
                    <option value="recent">Most Recent</option>
                    <option value="oldest">Oldest First</option>
                    <option value="name">Name (A-Z)</option>
                </select>
            </div>
        </div> --}}

        <!-- Testimonies Grid -->
        <div class="testimonies-grid" id="testimoniesGrid">
            <!-- Testimonies will be loaded here -->
        </div>

        <style>
.testimonies-section {
    margin-top: 2rem;
    padding: 1.5rem;
}

.testimonies-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1rem;
}

.testimonies-header h2 {
    font-size: 1.5rem;
    font-weight: bold;
}

.sort-bar {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.testimonies-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1rem;
}

.testimony-card {
    background-color: #fff;
    border-radius: 12px;
    padding: 1rem;
    box-shadow: 0 3px 8px rgba(0,0,0,0.08);
}

.testimony-header {
    display: flex;
    justify-content: space-between;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.testimony-name {
    color: #333;
}

.testimony-date {
    font-size: 0.85rem;
    color: #777;
}

.testimony-text {
    font-size: 1rem;
    color: #444;
    line-height: 1.4;
}

.no-testimonies {
    text-align: center;
    color: #666;
}

.pagination {
    margin-top: 1.5rem;
    text-align: center;
}
</style>






    <div class="testimonies-section ">
    <div class="testimonies-header">
        <h2>Community Testimonies</h2>

        <div class="sort-bar">
            <label for="sortSelect">Sort by:</label>
            <select id="sortSelect" class="sort-select"  onchange="window.location='?sort='+this.value">
                <option value="recent" {{ request('sort') == 'recent' ? 'selected' : '' }}>Most Recent</option>
                <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest</option>
                <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Name</option>
            </select>
        </div>
    </div>

    <div class="testimonies-grid">
        @forelse ($tests as $test)
            <div class="testimony-card">
                <div class="testimony-header">
                    <div class="testimony-name">{{ $test->name ?? 'Anonymous' }}</div>
                    <div class="testimony-date">{{ $test->created_at->format('F d, Y \a\t h:i A') }}</div>
                </div>
                <div class="testimony-text">{{ $test->test }}</div>
            </div>
        @empty
            <p class="no-testimonies">No testimonies yet. Be the first to share your story!</p>
        @endforelse
    </div>

    @if ($tests->hasPages())
        <div class="pagination">
            {{ $tests->links() }}
        </div>
    @endif
</div>


        <!-- Load More Button -->
        <div class="load-more-container">
            <button class="load-more-btn" onclick="loadMoreStories()">Load More Stories</button>
        </div>
    </div>




    {{-- <script>

        
        const testimonies = [
            {
                name: "{{$test->name}}",
                date: "April 15, 2025 at 8:30 AM",
                text: '"Finding Serenity Space was a turning point for me. The resources and community support helped me navigate my anxiety in a way I never thought possible. I\'m so grateful for this platform."',
                timestamp: new Date('2025-04-15T08:30:00')
            },
            {
                name: "Anonymous",
                date: "April 12, 2025 at 11:45 AM",
                text: '"I was hesitant to share my story, but reading others\' experiences gave me the courage. It\'s comforting to know you\'re not alone. The therapist matching service was incredibly helpful and led me to someone who truly understands me. Thank you."',
                timestamp: new Date('2025-04-12T11:45:00')
            },
            {
                name: "Jordan Lee",
                date: "April 10, 2025 at 9:15 PM",
                text: '"The guided meditations have become a daily ritual for me. They\'ve significantly reduced my stress levels."',
                timestamp: new Date('2025-04-10T21:15:00')
            },
            {
                name: "Casey R.",
                date: "April 08, 2025 at 6:20 PM",
                text: '"An incredible community. The articles are insightful and the workshops are practical and engaging. Highly recommend to anyone on their mental wellness journey."',
                timestamp: new Date('2025-04-08T18:20:00')
            },
            {
                name: "Sam B.",
                date: "March 28, 2025 at 10:45 AM",
                text: '"The weekly check-in tool helped me track my moods and identify patterns I wasn\'t aware of. This simple feature has made a big difference in my self-awareness and has given me concrete things to discuss in therapy."',
                timestamp: new Date('2025-03-28T10:45:00')
            },
            {
                name: "Maya G.",
                date: "March 22, 2025 at 5:15 PM",
                text: '"A safe and non-judgmental space to learn and grow. The peer support groups have been invaluable."',
                timestamp: new Date('2025-03-22T17:15:00')
            },
            {
                name: "Taylor M.",
                date: "March 18, 2025 at 2:30 PM",
                text: '"The crisis resources are comprehensive and easy to access. Knowing there\'s support available 24/7 gives me peace of mind."',
                timestamp: new Date('2025-03-18T14:30:00')
            },
            {
                name: "Jamie K.",
                date: "March 15, 2025 at 11:00 AM",
                text: '"I love the variety of self-help tools available. From journaling prompts to coping strategies, there\'s something for everyone at every stage of their journey."',
                timestamp: new Date('2025-03-15T11:00:00')
            }
        ];

        let displayedTestimonies = testimonies.slice(0, 6);
        let currentSort = 'recent';

        function renderTestimonies() {
            const grid = document.getElementById('testimoniesGrid');
            grid.innerHTML = displayedTestimonies.map(testimony => `
                <div class="testimony-card">
                    <div class="testimony-header">
                        <div class="testimony-name">${testimony.name}</div>
                        <div class="testimony-date">${testimony.date}</div>
                    </div>
                    <div class="testimony-text">${testimony.text}</div>
                </div>
            `).join('');
        }

        function sortTestimonies() {
            const sortValue = document.getElementById('sortSelect').value;
            currentSort = sortValue;

            let sorted = [...testimonies];

            if (sortValue === 'recent') {
                sorted.sort((a, b) => b.timestamp - a.timestamp);
            } else if (sortValue === 'oldest') {
                sorted.sort((a, b) => a.timestamp - b.timestamp);
            } else if (sortValue === 'name') {
                sorted.sort((a, b) => a.name.localeCompare(b.name));
            }

            displayedTestimonies = sorted.slice(0, displayedTestimonies.length);
            renderTestimonies();
        }

        function loadMoreStories() {
            const currentLength = displayedTestimonies.length;
            if (currentLength < testimonies.length) {
                displayedTestimonies = testimonies.slice(0, Math.min(currentLength + 6, testimonies.length));
                sortTestimonies();
            } else {
                alert('No more stories to load!');
            }
        }

        function writeTestimony() {
            alert('This would open a form to write a new testimony!');
        }

        // Initial render
        renderTestimonies();
    </script>


 --}}

  <script src="{{asset('js/main.js')}}"></script>

  @include('includes.footer')

 