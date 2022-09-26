<?php
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

        $conn = new mysqli("localhost:3307","root","","feedback_form");

        if($conn->connect_error){
            die("$conn->connect_error");
        }

        echo "db connection success";
        
        $sql = "INSERT INTO feedback_data 
        (`communication`,`understandability`,`nervous`,`recommended-material`,`knowledgeable`,`follow-syllabus`,`practical`,`audible`,`recommend`,`rating`,`suggestions`,`name`)
         VALUES 
        ('$communication',' $understandability','$nervous','$recommended','$knowledgeable','$syllabus','$practical','$audible','$recommend','$rating','$suggestions','$name') ";

        $result = $conn -> query($sql);
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
    <link rel="stylesheet" href="mystyles.css">

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
            <div class="form-group">
                <p>Do you find it simple to communicate with your teacher?</p>
                <label>
                    <input type="radio" name="communication" value="Nop, not at all!" class="input-radio">
                    Nope, not at all!
                </label>

                <label>
                    <input type="radio" name="communication" value="slightly" class="input-radio">
                    Slightly
                </label>

                <label>
                    <input type="radio" name="communication" value="moderately" class="input-radio">
                    Moderately            
                </label>

                <label>
                    <input type="radio" name="communication" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            
            <!-- understandability-->
            <div class="form-group">
                <p>Do you fully understand the concepts covered in class?</p>
                <label>
                    <input type="radio" name="understandability" value="Nop, not at all!" class="input-radio">
                    Nope, not at all!                
                </label>
                <label>
                    <input type="radio" name="understandability" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="understandability" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="understandability" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
    <!-- nervous -->
        <div class="form-group">
                <p>Do you feel nervous or scared to ask questions to your teacher?</p>
                <label>
                    <input type="radio" name="nervous" value="Nop, not at all!" class="input-radio">
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="nervous" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="nervous" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="nervous" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            <!-- recommended-material -->
            <div class="form-group">
                <p>Do you think the recommended reading materials, websites, texts, or reference books are relevant to you?</p>
                <label>
                    <input type="radio" name="recommended-material" value="Nope, not at all!" class="input-radio">
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="recommended-material" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="recommended-material" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="recommended-material" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            <!--knowledgeable -->
            <div class="form-group">
                <p>Do you think the teacher has sound knowledge of the topic being discussed in the classroom? Are you happy with the teacher's technical knowledge?</p>
                <label>
                    <input type="radio" name="knowledgeable" value="Nope, not at all!" class="input-radio">
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="knowledgeable" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="knowledgeable" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="knowledgeable" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            <!-- follow-syllabus -->
            <div class="form-group">
                <p>Does your teacher follow the syllabus and the course structure correctly and timely?</p>
                <label>
                    <input type="radio" name="follow-syllabus" value="Nope, not at all!" class="input-radio">
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="follow-syllabus" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="follow-syllabus" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="follow-syllabus" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            <!-- practical -->
            <div class="form-group">
                <p>Does your teacher share the knowledge outside the book / practical knowledge?</p>
                <label>
                    <input type="radio" name="practical" value="Nope, not at all!" class="input-radio">
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="practical" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="practical" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="practical" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            <!-- audible -->
            <div class="form-group">
                <p>Do you have a hard time listening to the teacher's voice?</p>
                <label>
                    <input type="radio" name="audible" value="Nope, not at all!" class="input-radio">
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="audible" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="audible" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="audible" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            <!-- recommend -->
            <div class="form-group">
                <p>Would you like to recommend the same teacher for another semester for you and your junior?</p>
                <label>
                    <input type="radio" name="recommend" value="Nope, not at all!" class="input-radio">
                    Nope, not at all!
                </label>
                <label>
                    <input type="radio" name="recommend" value="slightly" class="input-radio">
                    Slightly
                </label>
                <label>
                    <input type="radio" name="recommend" value="moderately" class="input-radio">
                    Moderately            
                </label>
                <label>
                    <input type="radio" name="recommend" value="Yes, very!" class="input-radio">
                    Yes, very!
                </label>
            </div>
            <!-- rating -->
            <div class="form-group">
            <label for="rating">How would you rate your experience?</label> 
            <p>code for rating</p>
            <input type="text" name="rating" id="" class="form-control" placeholder="Enter your rating ">

            </div>
            <!-- suggestions -->
            <div class="form-group">
            <p>Any comments or suggestions?</p> 
            <textarea name="suggestions" id="comments" cols="30" rows="3" placeholder="Enter your thoughts right here." required></textarea>
            </div>
            <!-- name -->
            <div class="from-group">
                <label for="name">Name</label> 
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name ">
            </div>
            <!-- button -->
            <div class="form-group">
          <button type="submit" id="submit" class="submit-button">Submit</button>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>