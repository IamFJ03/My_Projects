
<html>
    <head>
    <style>
        body{
            background-image: url('background.webp');
            font-family: sans-serif;
            margin:0;
            padding:0;
        }
        .Frame{
            border-radius: 10px;
            margin:100 0 0 200;
            width:60%;
            height:680px;
            background-color:rgb(55, 51, 51);
            box-shadow: -10px 10px 10px rgb(91, 86, 86);
        }
        h2{
            margin:0 0 0 200;
            padding-top: 10;
        } 
        .schedule{
            width:75%;
            height:20px;
            background-color:black;
            border-radius: 5px;
            color:rgb(255, 255, 255);
            margin:20 0 0 60px;
            padding:15px 25px 15px 25px;
            font-size: larger;
            font-weight: bold;
        }
        .info{
            font-weight: 500;
            color:rgb(255, 255, 255);
            margin:10 0 0 70;
            border-radius: 5px;
            height:200px;
            width:75%;
            transform: translate(-200%,0%) scale(1);
            
            background-color:rgb(15, 15, 15);
        }
        h3{
            padding-top: 15;
            margin-left:20;
        }
        .time{
            margin-left: 10px;
            padding-top: 10px;
            margin:-35 0 0 240;
        }
        ol{
            list-style: none;
            display:inline-flex;
        }
        
        button{
         padding:5 15 5 15;
         background-color:rgb(55, 53, 53);
         border-style: none;
         
        }
        button:hover{
            color:white;
            background-color:black;
            transition:0.5s;
        }
        .open-info{
         transform: translate(0%,0%) scale(1);
         transition:0.5s;
        }
        .ticket{
            color:White;
            width:75%;
            height:450px;
            background-color:rgb(3, 3, 3);
            border-radius: 3px;
            padding:20px 0 20px 20px;
            margin:-210 0 0 70;
            transform:translate(-200%,0%) scale(1);
           
        }
        .open-ticket{
            transform:translate(0%,0%) scale(1);
            transition:0.5s;
        }
        h4{
            margin-left:10;
            padding-top:10;
        }
        .submit{
            
            margin-top:-20px;
            background-image: linear-gradient(to right,purple,black);
            margin-left:120px;
            padding:10px 20px 10px 20px;
            color:White;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
        }
        input{
            width:75%;
            border-radius: 5px;
            padding:5 5 5 5;
        }
        .detail{
            margin-left:45px;
        }
        .fare{
            margin: -400 0 0 70;
            border-radius: 5px;
            width:75%;
            padding: 0 20px 25px 20px;
            height:120px;
            background-color:rgb(8, 8, 8);
            transform:translate(-200%,0%) scale(1);
            color:White;
        }
        .cancel{
            width:25%;
            border-right:2px solid black;
            margin: -20 0 0 5;
        }
        .cancel-info{
            width:60%;
            margin:-48 0 0 120;
        }
        .open-fare{
            transform:translate(0%,0%) scale(1);
            transition:0.5s; 
        }
        input{
            background-color:rgb(3, 3, 3);
            color:white;
            border:none;
            opacity:0.7;
            border-bottom: 1px solid white;
        }
        ::placeholder{
            color:white;
        }
        .head{
            color:white;
            height:75px;
            width:100%;
            background-image:linear-gradient(to right,purple,black);
        }
        .fly{
           
            text-decoration: none;
            color: wheat;
            margin-left:-184px;
        }
        a{
            text-decoration: none;
            color:aliceblue;
            padding-right: 15px;
        }
        .other{
         margin-left:785px;
         margin-top:-10px;
        }
link{
    background-color: rgb(44, 40, 40);
}
h2{
    color:white;
}
    </style>
    </head>
    <body>
        <div class="head">
          <h2 ><a class="fly" href="welcome.php">Jet Ways</a></h2>
          <div class="other">
               <a href="welcome.php">Home</a>
               <a href="service.html">Services</a>
               <a href="about.html">About</a>
               <a href="contact.html">Contact</a>
          </div>
        </div>
        <div class="Frame">
            <div class="link">
                <ol>
                    <li><button type="submit" onclick="openinfo()"> FLIGHT INFO.</li>
                    <li><button type="submit" onclick="openticket()">TICKET BOOKING</li>
                    <li><button type="submit" onclick="openfare()">FARE CANCELLETION</li>
                    
                </ol>
            </div>
            <h2>Air India</h2>
        <div class="schedule">Kolkata-Hyderabad
            <h4 class="time">9:00am - 12:00pm
            </h4>
            </div>
        
        <div class="info" id="info">
           
         <h3>
             BAGGAGE:
             25kg
             </h3>
             <h3>
                 HAND-BAGGAGE:8Kg
             </h3>
             <h3>
                 MEALS:FREE
         </h3>
        </div>
        <div class="ticket" id="ticket">
            <h2 class="detail">Personal Info:</h2>
        <h4>
            <input type="text" name="name" placeholder="Enter name" required>
            </h4>
            <h4>
                <input type="text" name="age" placeholder="Enter age" required>
        </h4>
        <h4>
            <input type="address" name="address" placeholder="Enter your address" required>
        </h4>
        <h4>
            <input type="e-mail" name="id" id="passport" placeholder="Enter your passport Id" required>
        </h4>
        <h4>
            <input type="e-mail" name="email" placeholder="Enter your email" required>
        </h4>
        <h4>
            <input type="number" name="number" placeholder="Enter your phone number" required>
        </h4>
        <h4>
            <button class="submit" type="submit" onclick="validatePassport('896253uwhhr')">SUBMIT</button>
        </h4>
        </div>
        <div class="fare" id="fare">
        <h3>CANCELLATION DETAILS:</h3>
        <h4 class="cancel">0-3(Days left for departure)</h4>
        <h4 class="cancel-info">Lite Fare-Not Applicable Saver Fare-75% of fare will be returned.
        </h4>
        </div>
        </div>
        <script>
            let element=document.getElementById("info");
            function openinfo(){ 
                
              element.classList.add("open-info");
              element2.classList.remove("open-fare");
              element1.classList.remove("open-ticket");
            }
            let element1=document.getElementById("ticket");
            function openticket(){
                
              element1.classList.add("open-ticket");
              element.classList.remove("open-info");
              element2.classList.remove("open-fare");
            }
            let element2=document.getElementById("fare");
            function openfare(){
                
              element2.classList.add("open-fare");
              element1.classList.remove("open-ticket");
              element.classList.remove("open-info");
            }

            function validatePassport(){
                var str=document.getElementById('passport').value;
                let regex = new RegExp(/^[A-PR-WYa-pr-wy][1-9]\d\s?d{4}[1-9]$/);
                if(regex.test(str) == true){
                  alert ("Passport id is correct");
                }
                    else{
                        alert("Next time enter correct passport id");
                        location.href = "TxnTest.php";
                    }

                }
             </script>
    </body>
</html>