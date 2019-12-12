async function test (){
    var options = {
    shouldSort: true,
    threshold: 0.3,
    location: 0,
    distance: 100,
    maxPatternLength: 32,
    minMatchCharLength: 1,
    keys: [
        "Name",
        "Position",
        "Responsibilities",
        "Phone_No",
        "Email",
        "ResearchAreas",
        "Biosketch",
    ]
    };
   var fuse = new Fuse(list, options);
   var result = await fuse.search(document.getElementById('search').value);
   var x = document.getElementById('search').value;
    document.getElementById('output').style.display='block';
    document.getElementById('output').innerHTML = "";
    //Code for photo of prof starts here
    document.getElementById('prof_photo').style.display='block';
    document.getElementById('prof_photo').style.background="url('./Images/Professor_photo/"+x+".jpeg')";
    document.getElementById('prof_photo').style.backgroundSize="100% 100%";
    document.getElementById('prof_photo').style.backgroundRepeat="no-repeat";
    //Code for photo of prof ends here
   result.forEach((element,index) => {
    document.getElementById('output').innerHTML +=  "Professor Name: &nbsp<span style='color:white'><font size='+3.5'><b>" + element.Name + '</b></font></span><br>';
    
    document.getElementById('output').innerHTML +=  "<b> <span style='color:white'>" + element.Position + '</span></b><br>';

    document.getElementById('output').innerHTML += "<a style='color:red' href= '" + element.Biosketch + "'><i>Biosketch</i></a><br><br>";

    if(element.Phone_No||element.Email)
    {
      document.getElementById('output').innerHTML += "<span style='color:white'><b>Contact details:</b></span><br>";
      if (element.Phone_No)
        document.getElementById('output').innerHTML += "Phone No: " + element.Phone_No + "<br>";
      if (element.Email)
        document.getElementById('output').innerHTML += "Email: "+ element.Email + "<br><br>";        
    }
    if (element.Responsibilities.length!==0){
    document.getElementById('output').innerHTML +=  "<span style='color:white'><b>Responsibilities</b>:</span><ul>";

    element.Responsibilities.forEach(a => {
        document.getElementById('output').innerHTML += "<li>" + a + "</li>";
    })
     document.getElementById('output').innerHTML += "</ul><br>";
   }
    if (element.ResearchAreas.length!==0){
    document.getElementById('output').innerHTML +=  "<span style='color:white'><b>ResearchAreas</b>:</span><ul>";

    element.ResearchAreas.forEach(a => {
        document.getElementById('output').innerHTML += "<li>" + a + "</li>";
    })
     document.getElementById('output').innerHTML += "</ul>";
   }
});
   var temp  = result.map(item => item.title)
   finalResult = temp.join(',')
   //document.getElementById('output').innerText = finalResult
        
}

var querybox = document.getElementById('search')
querybox.addEventListener('change',test) 

