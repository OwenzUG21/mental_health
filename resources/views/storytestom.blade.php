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
                    {{-- <a class="km" id="kt" href="">Write a Testimony</a> --}}
                   
                        <a class="km" id="mmm" href="">Write a Testimony</a>
                   

                </div> 
     
                <div class="mespic">
                    <img class="pp" src="young-depressed-adult-home-1.jpg" alt=""  width="556px">
     
                </div>

            </div>
          
            

        </section>

        <section class="kt bg" id="nj">
        <div class="hj">
             <h1>Testimonies</h1>
        {{-- <p>Our customers can reach us out here</p> --}}
        <form action="/tes" method="POST">
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
       
       
    </section>
    

        <section class="courts">
            @foreach ($tests as $test)
                <div class="jk">

                    <p>
                        <h5>{{$test->name}}</h5>
                         {{$test->email}}
                    </p>
                    <p class="mj"> {{$test->test}}</p>
            
                </div>
                
            @endforeach

           
            
        </section>














  <script src="{{asset('js/main.js')}}"></script>

  @include('includes.footer')

 