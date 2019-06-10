async function test (){
    var options = {
    shouldSort: true,
    threshold: 0.6,
    location: 0,
    distance: 100,
    maxPatternLength: 32,
    minMatchCharLength: 1,
    keys: [
        "title",
        "author.firstName",
        "author.lastName"
    ]
    };
   var fuse = new Fuse(list, options);
   var result = await fuse.search(document.getElementById('search').value)
   result.forEach((element,index) => {
    document.getElementById('output').innerText +=   element.title + '\n'
    
    document.getElementById('output').innerText +=  element.author.firstName + '\n'

    document.getElementById('output').innerText +=  element.author.lastName + '\n'
});
   var temp  = result.map(item => item.title)
   finalResult = temp.join(',')
 //  document.getElementById('output').innerText = finalResult
		
}

var querybox = document.getElementById('search')
querybox.addEventListener('change',test) 


	
