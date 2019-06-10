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
        "Grade",
        "ResearchAreas"
    ]
    };
   var fuse = new Fuse(list, options);
   var result = await fuse.search(document.getElementById('search').value)
   result.forEach((element,index) => {
    document.getElementById('output').innerText +=   element.Name + '\n'
    
    document.getElementById('output').innerText +=  element.Grade + '\n'

    document.getElementById('output').innerText +=  element.ResearchAreas + '\n'
});
   var temp  = result.map(item => item.title)
   finalResult = temp.join(',')
   //document.getElementById('output').innerText = finalResult
        
}

var querybox = document.getElementById('search')
querybox.addEventListener('change',test) 
