// Button is clicked

$(document).ready(function () {

    // //selects which button was clicked
    // switch (key) {
    //     case value:
            
    //         break;
    
    //     default:
    //         break;
    // }

    //initializing GLOBAL variables 
    var indexPage = 'index.php';
    var xmlHttp = createXmlHttpRequestObject();

    function createXmlHttpRequestObject(){ 
        var xmlHttp;
    
        if (window.ActiveXObject) {
            try{
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(e){
                xmlHttp = false;
            }
        }else{
            try{
                xmlHttp = new XMLHttpRequest();
            }catch(e){
                xmlHttp = false;
            }
        }
    
        if (!xmlHttp) {
            alert("cant create that object hoss!");
        }else{
            return xmlHttp;
        }
    }
    

    //this function is called every time home button is pushed
    function indexPage(){
        pageChecker(indexPage);
    }

    //This fuction cheaks if file exists
    function pageChecker(urlToFile){
        var newLink = new XMLHttpRequest();
        newLink.open('HEAD', urlToFile, false);
        newLink.send();

        if (newLink.status == '404') {
            newLink= "../" + newLink; 
            return newLink;
        } else {
            return newLink;
        }
        

        openPage(newLink);
        return newLink;
    }


    function openPage(currentLink) {
        var currentLink= newLink;

        window.location.href = currentLink;
    }

    
});
