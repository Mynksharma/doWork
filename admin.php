<?php require 'common.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link rel="shortcut icon" type="image/png" href="images/clock.png" >
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dowork3.css" />
    <title>Admin</title>
</head>
<style>
.common{
border:none;border-radius:10px;color:grey;padding:5px;font-family:monospace;margin:7px;width:150px;height:20px;
}
.btncolor{
    padding:10px;font-family:monospace;color:black;border-radius:5px;border:2px solid white;cursor:pointer;
    width:150px;margin:10px auto;
}
.btncolor:hover{
    border:2px solid black;
}
</style>
<body>
    <div id="header">
        <img src="images/clock.png" style="width:30px;height:30px;vertical-align: middle;" alt="clock" /> 
        <span style="font-family: 'Anton', sans-serif;vertical-align: middle;font-size:20px;">
            <a href="index.php" style="text-decoration:none;color:#555;cursor:pointer;">DoWork</a>
        </span>
    </div>
    <div style="height:400px;width:100%;position:relative;">
        <div id="content">
         <h2 style="letter-spacing:2px;">Admin Panel</h2>
           <div style="height:240px;width:90%;margin:auto;color:red;font-family:monospace;font-weight:bold">
           <select style="border:none;border-radius:10px;background-color:white;padding:5px;font-family:monospace;" onChange="section(event)">
           <option value="" disabled selected>Select section</option>
<option value="diary">Diary</option>
<option  value="test">Test scores</option>
<option value="reminder">Reminders</option>
           </select>
           <div id="fm">
           </div>
           </div>
        </div>
        </div>
        <script>
        function section(event){
            var form=document.createElement('form');
            form.setAttribute('method','get');
                var br=document.createElement('br');


            if(event.target.value=='diary'){
                document.getElementById('fm').innerHTML='';
                var form=document.createElement('form');
            var inputentries=[{placeholder:'Person Id',type:'text',name:'perid',value:''},{placeholder:'Date',type:'date',name:'date',value:'2000-12-07'},{placeholder:'Add Diary',type:'text',name:'adddiary',value:''}];
            for(inp of inputentries){
       
                var input=document.createElement('input');  
                input.style.backgroundColor='white';
            input.setAttribute('placeholder',inp.placeholder);
            input.setAttribute('value',inp.value);
            input.setAttribute('type',inp.type);
            input.setAttribute('name',inp.name);
            input.classList.add('common');
            form.appendChild(input);
            }
             var btn=document.createElement('input');
             btn.setAttribute('value','submit');
            btn.setAttribute('type','submit');
            btn.classList.add('btncolor');
            btn.style.backgroundColor="salmon";
            form.appendChild(br);
            form.appendChild(btn);  
            document.getElementById('fm').appendChild(form);  
            form.setAttribute('action','admincontrol.php');       
            }


            else if(event.target.value=='test'){
                document.getElementById('fm').innerHTML='';
            var inputentries=[{placeholder:'Person Id',type:'text',name:'perid',value:''},{placeholder:'Date',type:'date',name:'date',value:'2000-12-08'},
            {placeholder:'Subject',type:'text',name:'testsub',value:''},
            {placeholder:'Marks',type:'text',name:'marks',value:''},{placeholder:'Total Marks',type:'text',name:'totalmarks',value:''}];
            for(inp of inputentries){
                var input=document.createElement('input'); 
                input.style.backgroundColor='white';
            input.setAttribute('placeholder',inp.placeholder);
            input.setAttribute('value',inp.value);
            input.setAttribute('type',inp.type);
            input.setAttribute('name',inp.name);
            input.classList.add('common');
            form.appendChild(input);
            }
            var btn=document.createElement('input');
             btn.setAttribute('value','submit');
            btn.setAttribute('type','submit');
            btn.classList.add('btncolor');
            btn.style.backgroundColor="salmon";
            form.appendChild(br);
            form.appendChild(btn);
            document.getElementById('fm').appendChild(form);
            form.setAttribute('action','admincontrol.php');       
            }


            else if(event.target.value=='reminder'){
                document.getElementById('fm').innerHTML='';
                var add=document.createElement('div');
                var del=document.createElement('div');
                add.classList.add('btncolor');
                del.classList.add('btncolor');
                del.style.backgroundColor="salmon";
                add.style.backgroundColor='skyblue';
                add.innerHTML="Add";
                del.innerHTML='Delete'
                document.getElementById('fm').appendChild(add);document.getElementById('fm').appendChild(del);
                add.addEventListener('click',function(){
    document.getElementById('fm').innerHTML='';
    var inputentries=[{placeholder:'Person Id',type:'text',name:'perid'},{placeholder:'Add reminder',type:'text',name:'addrem'}];
            for(inp of inputentries){
                var input=document.createElement('input');           
            input.setAttribute('placeholder',inp.placeholder);
            input.setAttribute('type',inp.type);
            input.setAttribute('name',inp.name);
            input.classList.add('common');
            form.appendChild(input);
            }
            var btn=document.createElement('input');
             btn.setAttribute('value','submit');
            btn.setAttribute('type','submit');
            btn.classList.add('btncolor');
            btn.style.backgroundColor="salmon";
            form.appendChild(br);
            form.appendChild(btn);
            document.getElementById('fm').appendChild(form);
            form.setAttribute('action','admincontrol.php');       
})

del.addEventListener('click',function(){
    document.getElementById('fm').innerHTML='';
    var input=document.createElement('input');           
            input.setAttribute('placeholder','Person Id');
            input.setAttribute('type','text');
            input.classList.add('common');
            var btn=document.createElement('input');
             btn.setAttribute('value','submit');
            btn.setAttribute('type','submit');
            btn.classList.add('btncolor');
            btn.style.backgroundColor="salmon";
            document.getElementById('fm').appendChild(input);
            document.getElementById('fm').appendChild(btn);
            btn.addEventListener('click',function(){
                location.href='admincontrol.php?del='+input.value;
            });
})

            }
             
        }
        </script>
</body>
</html>