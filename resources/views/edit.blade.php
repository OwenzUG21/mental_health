<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Experience</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #f5f5f0;
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

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
    <div class="form-container">
        <h1 class="form-title">Share Your Experience</h1>
        
        <div class="success-message" id="successMessage">
            Thank you for sharing your story! Your testimony has been submitted successfully.
        </div>

        <form id="testimonyForm" action="/edit/{{ $test->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-row">
        <div class="form-group">
            <label for="yourName">
                Your Name <span class="optional">(Optional)</span>
            </label>
            <input 
                type="text" 
                id="yourName" 
                name="name"
                value="{{ $test->name }}"
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
                value="{{ $test->email }}"
            >
        </div>
    </div>

    <div class="form-group full-width">
        <label for="yourStory">Your Story</label>
        <textarea 
            id="yourStory" 
            name="test"
            required
        >{{ $test->test }}</textarea>
    </div>

    <button type="submit" class="submit-btn">Save changes</button>
</form>


        {{-- <form id="testimonyForm" onsubmit="handleSubmit(event)" action="/edit/{{$test->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group">
                    <label for="yourName">
                        Your Name <span class="optional">(Optional)</span>
                    </label>
                    <input 
                        type="text" 
                        id="yourName" 
                        name="name"
                        value="{{$test->name}}"
                    >
                    <input type="text" value="{{$test->name}}">
                </div>

                <div class="form-group">
                    <label for="yourEmail">
                        Your Email <span class="optional">(Optional)</span>
                    </label>
                    <input 
                        type="email" 
                        id="yourEmail" 
                        name="email"
                        value="{{$test->email}}"
                    >
                </div>
            </div>

            <div class="form-group full-width">
                <label for="yourStory">Your Story</label>
                <textarea 
                    id="yourStory" 
                    name="story"
                  value={{$test->test}}
                    required
                ></textarea>
            </div>

            <button type="submit" class="submit-btn">Save changes</button>

            <p class="disclaimer">
                Your privacy is important to us. Your name and contact information will not be shared publicly. 
                All testimonials are reviewed before being published to ensure a safe and supportive community space.
            </p>
        </form> --}}
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
</body>
</html>