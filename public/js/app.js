
var app = {
   
    currentQuoteIndex: 0,
    
    init: function () {
        
        app.displayCurrentQuote();

        document.getElementById('nav-next').addEventListener('click', app.handleClickOnNextButton);
        document.getElementById('nav-prev').addEventListener('click', app.handleClickOnPreviousButton);
        
    },  

    displayCurrentQuote: function () {
   
        let addQuote = document.getElementById('quote');
        let addAuthor = document.getElementById('author');
        addQuote.innerHTML = quotes[app.currentQuoteIndex].quote;
        addAuthor.innerHTML = quotes[app.currentQuoteIndex].author;
    },

    handleClickOnNextButton: function () {
    
            app.currentQuoteIndex++;
            if (app.currentQuoteIndex > quotes.length-1) {
                app.currentQuoteIndex = 0 ;      
            }
            app.displayCurrentQuote();      
    },

    handleClickOnPreviousButton: function () {

            app.currentQuoteIndex--;
            if (app.currentQuoteIndex < 0) {
                app.currentQuoteIndex = quotes.length-1 ;      
            }
            app.displayCurrentQuote();   
    },  
};


document.addEventListener('DOMContentLoaded', app.init);