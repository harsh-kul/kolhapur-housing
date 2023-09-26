class ScreenLoaderHandler {
    
    constructor(display,loader) {
 
      this.jsdisply = $("."+display+"");
      this.jsloader = $(".loadingScreen");
    this.handlerLoadingSceen();
    }
  
    hideDisplay() {
      $(this.jsdisply).hide();
    }
    showDisplay(){
        $(this.jsdisply).show();
    }
  
    
  
    handlerLoadingSceen() {
      var myclass = this;

        $(document).ready(function() {
          myclass.hideDisplay();  
          
            $(window).on( "load", function() {
             
               myclass.onload();
              });
          
          
          
          });
   
    }
    onload() {
        $(this.jsloader).delay(5000).fadeOut("slow");
        $(this.jsdisply).fadeIn("slow");
        $(this.jsloader).hide();
    }
  
    
  }
  