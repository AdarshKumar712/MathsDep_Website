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
   var result = await fuse.search(document.getElementById('search').value)
   document.getElementById('output').innerHTML = "";

   result.forEach((element,index) => {
    document.getElementById('output').innerHTML +=  "Professor Name: &nbsp<b>" + element.Name + '</b><br>';
    
    document.getElementById('output').innerHTML +=  "<b> " + element.Position + '</b><br>';

    document.getElementById('output').innerHTML += "<a href = '" + element.Biosketch + "'><i>Biosketch</i></a><br><br>";

    if(element.Phone_No||element.Email)
    {
      document.getElementById('output').innerHTML += "Contact details:<br>";
      if (element.Phone_No)
        document.getElementById('output').innerHTML += "Phone No: " + element.Phone_No + "<br>";
      if (element.Email)
        document.getElementById('output').innerHTML += "Email: "+ element.Email + "<br><br>";        
    }
    if (element.Responsibilities.length!==0){
    document.getElementById('output').innerHTML +=  "<b>Responsibilities</b>:<ul>";

    element.Responsibilities.forEach(a => {
        document.getElementById('output').innerHTML += "<li>" + a + "</li>";
    })
     document.getElementById('output').innerHTML += "</ul><br>";
   }
    if (element.ResearchAreas.length!==0){
    document.getElementById('output').innerHTML +=  "<b>ResearchAreas</b>:<ul>";

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
