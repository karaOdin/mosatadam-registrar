<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> Moostadam Application </title>
    <meta charset="UTF-8">
      <meta name="description" content=" Platfrome de préinscription en ligne...Postuler maintenant">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--=====================================================S==========================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/countdowntime/flipclock.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!--===============================================================================================-->
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "105756575163149");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body>


    @if(session()->has('message'))
        <script>
            var type = "{{Session::get('alert-type','success')}}"
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif

<section class="vh-100" style="background-color: #00D100;" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
       <br><center> <b><h1 style="font-family:Hind Siliguri" class="text-white mb-4">Moostadam Application</h1></b> 
       <br><center> <b><h1 style="font-family:Hind Siliguri" class="text-white mb-4">CANDIDATEZ POUR REJOINDRE MOOSTADAM</h1></b>
         <h5 style="font-family:Hind Siliguri" class="text-white mb-" align="justify" >Nous avons mobilisé des experts multidisciplinaires reconnus à l’échelle nationale qui partagent nos valeurs.

Nous sommes convaincus que le croisement de regards interdisciplinaires est la meilleure manière de comprendre les enjeux des mutations profondes qui ébranlent notre société.</p>
       </center>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
              
             <form  id="contact" method="post" action="{{route('sendemail')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="name" style="font-family:Hind Siliguri" >Name</label>
                <input type="text" name="name" class="form-control" placeholder=" votre Nom et Prénom ici" required></div>
                @error('name')
                      <div class="alert alert-danger">{{ $message }}</div>
                      <script >
                        toastr.error("The document field is required."); 
                      </script>
                  @enderror

                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="email" style="font-family:Hind Siliguri" >Email</label>
                    <input type="email"/ name="email" class="form-control"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                    / placeholder="votre adresse email ici" required >
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="Sujet"style="font-family:Hind Siliguri" >Téléphone</label>
                    <input type="text"/ name="phone" class="form-control" placeholder="+213 xxx xxx xxx" required>
                    @error('phone')
                      <div class="alert alert-danger">{{ $message }}</div>
                      <script >
                        toastr.error("The document field is required."); 
                      </script>
                  @enderror

                  </div>
                </div>
              </div>
               <div class="col-md">
                  <div class="form-group">
                    <label for="Sujet" style="font-family:Hind Siliguri"  >Nom de Projet/ Startup</label>
                    <input type="text"/ name="sujet" class="form-control" placeholder="Nom de Projet/ Startup" required>
                  </div>
                </div>
              
              <div class="form-group">
                <label for="message" style="font-family:Hind Siliguri" >Description du projet</label>
                <textarea cols="30" rows="10" class="form-control p-3 rounded-0"  name="message" id="message" placeholder="description du projet" required></textarea>
              </div>
              <div class="form-group">
                   <label for="message" style="font-family:Hind Siliguri" >Présentation de Projet en PDF</label>
                   <input class="form-control form-control-lg" name="document" id="formFileLg" type="file"  />
                  <div class="small text-muted mt-2" style="font-family:Hind Siliguri" >Upload your presentation  or any other relevant file. Max file size 50 MB</div>
                  @error('document')
                      <div class="alert alert-danger">{{ $message }}</div>
                      <script >
                        toastr.error("The document field is required."); 
                      </script>
                  @enderror

              </div>
              <div class="form-group">
                  <button type="submit" id="upload" class="btn btn-primary btn-lg"  style="background-color: #00D100;" >Envoyer</button>
              <button type="reset" class="btn btn-primary btn-lg"  style="background-color: #00D100;" >Réinitialiser</button>
              </div>
            </form>
            <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3 style="font-family:Hind Siliguri" >Sent your message successfully!</h3>
        </div>

        </div>

      </div>
    </div>
  </div>
</section>







<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#upload').bind("click",function() 
    { 
        var imgVal = $('#document').val(); 
        if(imgVal=='') 
        { 
            toastr.error("empty input file"); 
            return false; 
        } 


    }); 
});
</script> 

</body>
</html>
