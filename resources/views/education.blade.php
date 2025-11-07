 @include('includes.header')
 <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container">
             
                <h2> MUBS MENTAL HEALTH EDUCATION</h2>
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
       
{{-- 
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
          
            

        </section> --}}

        <title>Mental Health Resource Library</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .jjj {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #f9fafb 0%, #e5e7eb 100%);
            min-height: 100vh;
            /* padding: 3rem 1rem; */
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .header h1 {
            font-size: 2.5rem;
            color: #111827;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .header p {
            color: #6b7280;
            max-width: 42rem;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Search Bar */
        .search-container {
            max-width: 42rem;
            margin: 0 auto 2rem;
            position: relative;
        }

        .search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s;
        }

        .search-input:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
        }

        /* Filters */
        .filters {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.75rem;
            margin-bottom: 3rem;
        }

        .filter-btn {
            padding: 0.5rem 1.5rem;
            border-radius: 9999px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: 1px solid #e5e7eb;
            background: white;
            color: #374151;
        }

        .filter-btn:hover {
            background: #f9fafb;
        }

        .filter-btn.active {
            background: #10b981;
            color: white;
            border-color: #10b981;
            box-shadow: 0 4px 6px rgba(16, 185, 129, 0.2);
        }

        /* Resource Grid */
        .resource-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .resource-card {
            background: white;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .resource-card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }

        .resource-image {
            width: 100%;
            height: 12rem;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .resource-card:hover .resource-image {
            transform: scale(1.05);
        }

        .resource-content {
            padding: 1.5rem;
        }

        .resource-category {
            font-size: 0.75rem;
            font-weight: 600;
            color: #10b981;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.5rem;
        }

        .resource-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #111827;
            margin-bottom: 0.75rem;
        }

        .resource-description {
            color: #6b7280;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .resource-btn {
            width: 100%;
            padding: 0.75rem 1rem;
            background: #10b981;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: background 0.3s;
        }

        .resource-btn:hover {
            background: #059669;
        }

        .no-results {
            text-align: center;
            padding: 3rem 0;
            color: #6b7280;
            font-size: 1.125rem;
        }

        .hidden {
            display: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .resource-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="jjj">
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Your Mental Health Resource Library</h1>
            <p>Explore our collection of articles, workbooks, and guides to support your well-being and personal growth journey.</p>
        </div>

        <!-- Search Bar -->
        <div class="search-container">
            <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.35-4.35"></path>
            </svg>
            <input type="text" class="search-input" id="searchInput" placeholder="Search for topics like Anxiety, Mindfulness...">
        </div>

        <!-- Filters -->
        <div class="filters" id="filters">
            <button class="filter-btn active" data-filter="All">All</button>
            <button class="filter-btn" data-filter="Anxiety">Anxiety</button>
            <button class="filter-btn" data-filter="Depression">Depression</button>
            <button class="filter-btn" data-filter="Mindfulness">Mindfulness</button>
            <button class="filter-btn" data-filter="Workbooks">Workbooks</button>
            <button class="filter-btn" data-filter="Stress">Stress</button>
        </div>

        <!-- Resource Grid -->
        <div class="resource-grid" id="resourceGrid"></div>

        <!-- No Results -->
        <div class="no-results hidden" id="noResults">
            No resources found. Try adjusting your search or filters.
        </div>
    </div>

    <script>
        const resources = [
            {
                id: 1,
                category: 'WORKBOOK',
                title: "Beginner's Guide to Mindfulness",
                description: 'A simple workbook to help you start your mindfulness practice and reduce daily stress.',
                image: 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=400&h=250&fit=crop',
                type: 'download',
                tags: ['Mindfulness', 'Workbooks']
            },
            {
                id: 2,
                category: 'PDF GUIDE',
                title: 'Understanding Anxiety PDF',
                description: 'An introductory guide to understanding forms of anxiety and how to manage symptoms.',
                image: 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=250&fit=crop',
                type: 'download',
                tags: ['Anxiety']
            },
            {
                id: 3,
                category: 'ARTICLE',
                title: 'Journaling for Stress Relief',
                description: 'Help process your thoughts and feelings through expressive writing.',
                image: 'https://images.unsplash.com/photo-1455390582262-044cdead277a?w=400&h=250&fit=crop',
                type: 'view',
                tags: ['Stress']
            },
            {
                id: 4,
                category: 'WORKBOOK',
                title: 'Depression Management Workbook',
                description: 'Practical exercises and strategies to help manage depression symptoms effectively.',
                image: 'https://images.unsplash.com/photo-1499209974431-9dddcece7f88?w=400&h=250&fit=crop',
                type: 'download',
                tags: ['Depression', 'Workbooks']
            },
            {
                id: 5,
                category: 'GUIDE',
                title: 'Breathing Techniques for Anxiety',
                description: 'Learn evidence-based breathing exercises to calm your mind and reduce anxiety.',
                image: 'https://images.unsplash.com/photo-1447452001602-7090c7ab2db3?w=400&h=250&fit=crop',
                type: 'view',
                tags: ['Anxiety', 'Mindfulness']
            },
            {
                id: 6,
                category: 'PDF GUIDE',
                title: 'Sleep Hygiene Guide',
                description: 'Improve your sleep quality with practical tips and habits for better rest.',
                image: 'https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?w=400&h=250&fit=crop',
                type: 'download',
                tags: ['Stress']
            }
        ];

        let activeFilter = 'All';
        let searchTerm = '';

        function renderResources() {
            const grid = document.getElementById('resourceGrid');
            const noResults = document.getElementById('noResults');
            
            const filtered = resources.filter(resource => {
                const matchesFilter = activeFilter === 'All' || resource.tags.includes(activeFilter);
                const matchesSearch = resource.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
                                    resource.description.toLowerCase().includes(searchTerm.toLowerCase());
                return matchesFilter && matchesSearch;
            });

            if (filtered.length === 0) {
                grid.innerHTML = '';
                noResults.classList.remove('hidden');
                return;
            }

            noResults.classList.add('hidden');
            
            grid.innerHTML = filtered.map(resource => `
                <div class="resource-card">
                    <img src="${resource.image}" alt="${resource.title}" class="resource-image">
                    <div class="resource-content">
                        <div class="resource-category">${resource.category}</div>
                        <h3 class="resource-title">${resource.title}</h3>
                        <p class="resource-description">${resource.description}</p>
                        <button class="resource-btn">
                            ${resource.type === 'download' 
                                ? '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download'
                                : '<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> View Resource'
                            }
                        </button>
                    </div>
                </div>
            `).join('');
        }

        // Filter buttons
        document.getElementById('filters').addEventListener('click', (e) => {
            if (e.target.classList.contains('filter-btn')) {
                document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                e.target.classList.add('active');
                activeFilter = e.target.dataset.filter;
                renderResources();
            }
        });

        // Search input
        document.getElementById('searchInput').addEventListener('input', (e) => {
            searchTerm = e.target.value;
            renderResources();
        });

        // Initial render
        renderResources();
    </script>













  @include('includes.footer')