
        *{
            margin: 0px;
            padding: 0px;
        }

       div{
         border: 2px black solid;
         background-color: skyblue;
         padding-bottom: 200px;
         position: relative;

       }
        #container{
            border: none;
        }
       h1{
         text-align: center;
         color: darkblue;

       }

       button,#bulbimg{
        font-size: 16px;
        margin: 3px;
        position: relative;
        left: 760px;
       }

        
       #times
       {
         font-size:50px;


         color: white;
         margin: 3px;
         position: relative;
         left: 500px;
       }
        
        #animate{
            width: 50px;
            height: 50px;
            background-color: firebrick;
            position: absolute;
        }
        img{
            position: relative;
            left: 50px;
            top: 150px;
        }
        
        p{
            position: relative;
            left: 40px;
            font-size: 25px;
            font-weight: bolder;
        }
        #p1,#p2{
            position: relative;
            left: 45px;
            font-size:20px;
            font-weight: normal;
        }
    </style>


</head>

<body >

 <div >
     <h1> DIGITAL CLOCK </h1>
	 <p id="time" ><button onclick="clock()"> Click</button> </p>
     <p id="times"></p>
     <P> <button onclick="document.getElementById('times').style.display='none'"> HIDE </button></p>
</div>
 

<div id="bgchange">
    <h1>Random Background</h1>
    <p ><button  onclick="bgchanger() ">Start</button></p>
    <p><button onclick="bgstop()">Stop</button></p>
</div>
    
    
<div style="text-align: center">
 <h1>Change Font Size</h1>
 <p id="para" onmouseover="SizeChanged()" onmouseout="NormalSize()">This is my Experiment Number 5 in JavaScript In which I have to Change the Font size of this paragraph on mouse over.</p>
</div>
    
<div>
    <h1>Moving Car</h1>
    <button onclick="CarAnim()">Start</button>
    <button onclick="StopAnim()">Stop</button>
    <img src="Car.jpg" id="CarImage" height="100px" width="100px">
</div>
    
<div>
    <h1>Objects In JS</h1>
    <button onclick="ObjDisp()">Show</button>
    <button onclick="ObjHide()">Hide</button>
    <br>
    <p> ARRAY OF OBJECTS IS SHOWN HERE </p>
    <br>
    <br>
    <p> PEOPLE BORN BEFORE 1980</p>
    <p id="p1"> </p>
    <br>
    <br>
    <br>
    <p> PEOPLE BORN BEFORE 1980</p>
    <p id="p2"> </p>
</div>
    




</body>


</html>
