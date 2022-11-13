<?php
  include('./db_config.php');

    if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        $communication = $_POST['communication'];
        $understandability = $_POST['understandability'];
        $nervous = $_POST['nervous'];
        $recommended = $_POST['recommended-material'];
        $knowledgeable = $_POST['knowledgeable'];
        $syllabus = $_POST['follow-syllabus'];
        $practical = $_POST['practical'];
        $audible = $_POST['audible'];
        $recommend = $_POST['recommend'];
        $rating = $_POST['rating'];
        $suggestions = $_POST['suggestions'];
        $name = $_POST['name'];
        $errors;

        //default
        if ($name="NULL"){
            $name="Anonymous";
        }
     
        
        // $conn = new mysqli("localhost:3307","root","","feedback_form");

        // if($conn->connect_error){
        //     die("$conn->connect_error");
        // }

        // echo "db connection success";
        
       
        $sql = "INSERT INTO feedback_data 
        (`communication`,`understandability`,`nervous`,`recommended-material`,`knowledgeable`,`follow-syllabus`,`practical`,`audible`,`recommend`,`rating`,`suggestions`,`name`)
         VALUES 
        ('$communication',' $understandability','$nervous','$recommended','$knowledgeable','$syllabus','$practical','$audible','$recommend','$rating','$suggestions','$name') ";

        $result = $conn -> query($sql);

        if($result){
            header('location: ./index.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyles.css">
    <script src="myscript.js"></script>



</head>
<body>
    <div class="container">
        <header class="header">
            <h1 class="text-center">Give us your valuable Feedback</h1>
            <h3 class="text-center">What's on your mind?</h3>
            <p class="description text-center">You can be honest—this form is anonymous</p>
        </header>
    

       
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
            
         
        <!-- communication -->
        <div class="question">
            <p>Do you find it simple to communicate with your teacher? <span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="communication" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!
                </label>

                <label>
                    <input type="radio" name="communication" value="slightly" class="input-radio" required>
                    Slightly
                </label>

                <label>
                    <input type="radio" name="communication" value="moderately" class="input-radio" required>
                    Moderately            
                </label>

                <label>
                    <input type="radio" name="communication" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>

            <!-- <span class="error">*required</span>
            <span class="error"> <?php 
            // echo $errors; 
            
            ?> </span> -->

        </div>  

        <!-- understandability-->
        <div class="question">
        <p>Do you fully understand the concepts covered in class? <span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="understandability" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!                
                </label>
                <label>
                    <input type="radio" name="understandability" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="understandability" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="understandability" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>
        </div>

        <!-- nervous -->
        <div class="question">
            <p>Do you feel nervous or scared to ask questions to your teacher? <span class="error">*</span></p>
            <div class="form-group"> 
                <label>
                    <input type="radio" name="nervous" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="nervous" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="nervous" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="nervous" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>   
        </div>

        <!-- recommended-material -->
        <div class="question">
            <p>Do you think the recommended reading materials, websites, texts, or reference books are relevant to you? <span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="recommended-material" value="Nope, not at all!" class="input-radio"required>
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="recommended-material" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="recommended-material" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="recommended-material" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>
        </div>

        <!--knowledgeable -->
        <div class="question">
            <p>Do you think the teacher has sound knowledge of the topic being discussed in the classroom? Are you happy with the teacher's technical knowledge?<span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="knowledgeable" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="knowledgeable" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="knowledgeable" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="knowledgeable" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>
        </div>

        <!-- follow-syllabus -->
        <div class="question">
            <p>Does your teacher follow the syllabus and the course structure correctly and timely? <span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="follow-syllabus" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="follow-syllabus" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="follow-syllabus" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="follow-syllabus" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>
        </div>

        <!-- practical -->
        <div class="question"> 
            <p>Does your teacher share the knowledge outside the book/practical knowledge? <span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="practical" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="practical" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="practical" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="practical" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>
        </div>

        <!-- audible -->
        <div class="question">       
            <p>Do you have a hard time listening to the teacher's voice? <span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="audible" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="audible" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="audible" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="audible" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>
        </div>

        <!-- recommend -->
        <div class="question">    
            <p>Would you like to recommend the same teacher for another semester for you and your junior? <span class="error">*</span></p>
            <div class="form-group">
                <label>
                    <input type="radio" name="recommend" value="Nope, not at all!" class="input-radio" required>
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="recommend" value="slightly" class="input-radio" required>
                    Slightly
                </label>
                <label>
                    <input type="radio" name="recommend" value="moderately" class="input-radio" required>
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="recommend" value="Yes, very!" class="input-radio" required>
                    Yes, very!
                </label>
            </div>
        </div>

        <!-- rating -->
        <div class="question">  
           <p>How would you rate your experience? <span class="error">*</span></p>
            <div class="form-group">
                <!-- <input type="text" name="rating" id="" class="form-control" placeholder="Enter your rating " required> -->
                    <div class="rating"></div>

                <label>
                    <div class="rating">1</div>
                    <input type="radio" name="rating"  class="input-radio" value="1" required>
                 
                </label>
                <label>
                    <div class="rating">2</div>
                    <input type="radio" name="rating"  class="input-radio" value="2" required>
                 
                </label>
                <label>
                    <div class="rating">3</div>
                    <input type="radio" name="rating"  class="input-radio" value="3" required>
                 
                </label>
                <label>
                    <div class="rating">4</div>
                    <input type="radio" name="rating"  class="input-radio" value="4" required>
                 
                </label>
                <label>
                    <div class="rating">5</div>
                    <input type="radio" name="rating"  class="input-radio" value="5" required>
                </label>
                <label>
                    <div class="rating">6</div>
                    <input type="radio" name="rating"  class="input-radio" value="6" required>
                </label>
                <label>
                    <div class="rating">7</div>
                    <input type="radio" name="rating"  class="input-radio" value="7" required>
                </label>
                <label>
                    <div class="rating">8</div>
                    <input type="radio" name="rating"  class="input-radio" value="8" required>
                </label>
                <label>
                    <div class="rating">9</div>
                    <input type="radio" name="rating"  class="input-radio" value="9" required>
                </label>
                <label>
                    <div class="rating">10</div>
                    <input type="radio" name="rating"  class="input-radio" value="10" required>
                </label>
                <div class="rating"></div>

                
            </div>
        </div>

        <!-- suggestions -->
        <div class="question">
            <p>Any feedback/suggestion? <span class="error">*</span></p> 
            <div class="form-group">
                <textarea name="suggestions" id="comments" cols="30" rows="1" placeholder="Your answer" required autocomplete="off"></textarea>
            </div>
        </div>

        <!-- name -->
        <div class="question">
         <p><label for="name">Your Name</label> </p>
            <div class="from-group">               
                <input type="text" name="name" id="name"  placeholder="Your answer " autocomplete="off">
            </div>
        </div>

        <!-- button -->      
            <div class="form-group">
                <button type="submit" id="submit" class="btn btn-light ">Submit</button>
            </div>
     

        </form>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>