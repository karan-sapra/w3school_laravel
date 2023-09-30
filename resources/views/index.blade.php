
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w3 school</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="jquery.js"></script>

        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 

</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <div class="upperdiv">
          <img src="{{asset('/images/download.png')}}" class="img">
          
      <input type="button" value="Tutorials" class="upper_btn">
      <input type="button" value="Refrences" class="upper_btn">
      <input type="button" value="Excercises" class="upper_btn">
      <input type="button" value="Videos" class="upper_btn">
     <!-- <input type="button"  class="rightupper_btn" value="Pro"> -->
     <button class="rightupper_btn">
       Pro <input type="button" class="inside_btn"value="NEW" >
     </button>
     <button class="rightupper_btn1">
        Website <input type="button" class="inside_btn1"value="NEW" >
      </button>
      <input type="button" value="Paid Courses" class="paid_btn">
      @if(isset($username)){     
        <input type="button" value={{$username}}  class="login_btn" >
      }
      @else{
        <input type="button" value="Login"  class="login_btn" onclick="location.href='login'">
      }
      @endif
      
      </div>
    
    <div class="lower">
        <svg xmlns="http://www.w3.org/2000/svg" class="home_icon" width="30" height="30" fill="white" class="bi bi-house-door" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
          </svg>
        <i class="bi bi-house-door"></i>
        <input type="button"  value="HTML" class="lower_btn">
        <input type="button" value="CSS" class="lower_btn">
        <input type="button"  value="JAVA SCRIPT" class="lower_btn">
        <input type="button"  value="SQL" class="lower_btn">
        <input type="button"  value="PYTHON" class="lower_btn">
        <input type="button"  value="PHP" class="lower_btn">
        <input type="button"  value="BOOTSTRAP" class="lower_btn">
        <input type="button"  value="HOW TO" class="lower_btn">
        <input type="button"  value="W3.CSS" class="lower_btn">
        <input type="button"  value="JAVA" class="lower_btn">
        <input type="button"  value="JQUERY" class="lower_btn">
        <input type="button"  value="C" class="lower_btn">
    </div>
    <div class="sidebar">
       <th><h5>HTML Tutorial</h4></th>
      <ul> 
        <div class="sidebarli">
                 <li><a href="bcnsdj" class="active">HTML HOME</a></li>
       <li><a href="bcnsdj" >HTML Introduction</a></li>
       <li><a href="bcnsdj" >HTML Editors</a></li>
       <li><a href="bcnsdj" >HTML Basic</a></li>
       <li><a href="bcnsdj" >HTML Elements</a></li>
       <li><a href="bcnsdj" >HTML Atributes</a></li>
       <li><a href="bcnsdj" >HTML Headings</a></li>
       <li><a href="bcnsdj" >HTML Paragraphs</a></li>
       <li><a href="bcnsdj" >HTML Styles</a></li>
       <li><a href="bcnsdj" >HTML Formatting</a></li>
       <li><a href="bcnsdj" >HTML Quotations </a></li>
       <li><a href="bcnsdj" >HTML Comments</a></li>
       <li><a href="bcnsdj" >HTML Colors</a></li>
       <li><a href="bcnsdj" >HTML CSS</a></li>
       <li><a href="bcnsdj" >HTML Links</a></li>
       <li><a href="bcnsdj" >HTML Images</a></li>
       <li><a href="bcnsdj" >HTML Favicon</a></li>
       <li><a href="bcnsdj" >HTML Tables</a></li>
       <li><a href="bcnsdj" >HTML Lists</a></li>
       <li><a href="bcnsdj" >HTML Block & Inline</a></li>
       <li><a href="bcnsdj" >HTML Classes</a></li>
       <li><a href="bcnsdj" >HTML Id</a></li>
       <li><a href="bcnsdj" >HTML Iframes</a></li>
       <li><a href="bcnsdj" >HTML Javascript</a></li>
       <li><a href="bcnsdj" >HTML File paths</a></li>
       <li><a href="bcnsdj" >HTML Head</a></li>
       <li><a href="bcnsdj" >HTML Layout</a></li>
       <li><a href="bcnsdj" >HTML Responsive</a></li>
      </div>

      </ul>
    </div>
     
    <div class="mainheaderdiv">
      <h1>HTML Tutorial</h1>
    <input type="button" value="Home" class="home_btn">
    <input type="button" value="Next" class="back_btn"> 
    <br>
    <br>
    @if(session()->has('username'))



    
        
    <button type="button" class="btn btn-danger" onclick="location.href='logout'">Logout</button>
    <br>
   <form action="/info" method="POST">
    @csrf
    <h2>Enter your details</h2>
    <br>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br>
    <br>
    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary">
    <br>
    <br>
    <button type="submit" >Submit</button>
   </form>

   <br>
   @if (@isset($message))
       
   
     {{$message}}
     
   @endif
<br>
<br>


   <button type="button" onclick="location.href='/viewchart' ">View chart</button>





    {{-- 
   <form action="/sendsms" method="POST">
    @csrf
   <label for="message">Enter your message:</label><br><br>
    <textarea type="text" name="message" id="message" required ></textarea>
    <br>
    <br>  
   <label for="phone">Enter phone no:</label>
    <input type="text" name="phone"  id="phone" required>
    <br>  
    <br>
   <button type="submit">Send</button> --}}









    
    @endif
    {{-- @php
    $allSessionData = session()->all();
    print_r($allSessionData);
    @endphp --}}

   
    
  </div>

</body>
</html>
<script>
// $(document).ready(function() {
//   // Your jQuery code here
//   $("#login").click(function() {
//       alert("Hello, jQuery!");
//   });
// });
// </script>