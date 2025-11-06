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

<section class="kt ko">
        <div class="hj">
             <h1>Contact us</h1>
        {{-- <p>Our customers can reach us out here</p> --}}
        <form action="/cont" method="POST">
            @csrf
            <label for="name">Name</label><br>
            <input type="text" placeholder="Your name" required name="name"><br>
            <label for="email">Email</label><br>
            <input type="text" placeholder="Your email address" name="email"><br>
            <label for="message">Message</label><br>
            <textarea name="message"  placeholder="your message" name="message"></textarea><br>
            <button type="submit">Send message</button>
        

             {{-- <script>
                showNotification('Message Sent!',"{{session('success')}}");
            </script> --}}

        </form>
            @if (session('success'))
            <script>
                showNotification('Message sent',"{{session('success')}");
            </script>
            @endif

        </div>
       
    </section>
    




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