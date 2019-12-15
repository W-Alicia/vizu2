$(document).ready(function(){
    
    $("#register_btn").click(function(){
        $("#block").animate({left:"22.5%"},400); 
        $("#block").animate({left:"30%"},500); 
        $(".login").css("visibility","hidden");
        $(".login").animate({left:"25%"},400);
        
        $(".register").animate({left:"17%"},400);
        $(".register").animate({left:"30%"},500);
        $(".register").css("visibility","visible");
    }); 
    
    $("#login_btn").click(function(){
        $("#block").animate({left:"77.5%"},400); 
        $("#block").animate({left:"70%"},500);
        $(".register").css("visibility","hidden");
        $(".register").animate({left:"75%"},400);
        
        $(".login").animate({left:"83.5%"},400);
        $(".login").animate({left:"70%"},500);
        $(".login").css("visibility","visible");
    });

    $('#form-login').validetta({
        showErrorMessages : true, // If you dont want to display error messages set this option false
        /** You can display errors as inline or bubble */
        display : 'bubble', // bubble or inline
        /**
         * Error template class
         * This is the class which will be added to the error message window template.
         * If you want special style, you can change class name as you like with this option.
         * Error message window template : <span class="errorTemplateClass">Error messages will be here !</span>
         */
        errorTemplateClass : 'validetta-bubble',
        /** Class that would be added on every failing validation field */
        errorClass : 'validetta-error',
        /** Same for valid validation */
        validClass : 'validetta-valid', // Same for valid validation
        bubblePosition: 'right', // Bubble position // right / bottom
        bubbleGapLeft: 15, // Right gap of bubble (px unit)
        bubbleGapTop: 0, // Top gap of bubble (px unit)
        /* To enable real-time form control, set this option true. */
        realTime : true,
        validators: {}, // Custom validators stored in this variable
        /** Callback functions */
        onValid : function(e){
        
                e.preventDefault();
        
                var loginrecu = $("input[name='login']").val();
                var passwordrecu =  $("input[name='password']").val();
        
        
                    $.ajax({
                    // 1) on définit le fichier vers lequel on envoye la requête POST
                            url :'https://elzbieta.techniques-graphiques.be/login-register/php.php',
        
                    // 2/ on spécifie la méthode  
                            type :'POST',// Le type de la requête HTTP, ici  POST
        
                    // 3) on définit les variables POST qui sont ennvoyées au fichier .php qui les récupère sous forme de $_POST["nom"] 
                            data :/*donnees */{
                                    login:loginrecu,
                                    password: passwordrecu
                    },// On fait passer nos variables au script coucou.php
        
                    // 4) format de retour du fichier php dans "data"
                            dataType :'html',
        
                    // 5) fonction à effectuer en cas de succès
                    success:function(data){//  contient le HTML renvoyé
        
                    $('#block-connection').html(data);  
        
                    }// success
        
                    });// $.ajax function
        
        },
        onError : function(){
            alert('error');
        },

        required  : 'Custom error message.'
      });

      
    $('#form-register').validetta({
        showErrorMessages : true, // If you dont want to display error messages set this option false
        /** You can display errors as inline or bubble */
        display : 'bubble', // bubble or inline
        /**
         * Error template class
         * This is the class which will be added to the error message window template.
         * If you want special style, you can change class name as you like with this option.
         * Error message window template : <span class="errorTemplateClass">Error messages will be here !</span>
         */
        errorTemplateClass : 'validetta-bubble',
        /** Class that would be added on every failing validation field */
        errorClass : 'validetta-error',
        /** Same for valid validation */
        validClass : 'validetta-valid', // Same for valid validation
        bubblePosition: 'right', // Bubble position // right / bottom
        bubbleGapLeft: 15, // Right gap of bubble (px unit)
        bubbleGapTop: 0, // Top gap of bubble (px unit)
        /* To enable real-time form control, set this option true. */
        realTime : true,
        validators: {}, // Custom validators stored in this variable
        /** Callback functions */
        onValid : function(e){
            
                e.preventDefault();
        
                var nomrecu = $("input[name='nom']").val();
        
        
                    $.ajax({
                    // 1) on définit le fichier vers lequel on envoye la requête POST
                            url :'https://elzbieta.techniques-graphiques.be/login-register/php.php',
        
                    // 2/ on spécifie la méthode  
                            type :'POST',// Le type de la requête HTTP, ici  POST
        
                    // 3) on définit les variables POST qui sont ennvoyées au fichier .php qui les récupère sous forme de $_POST["nom"] 
                            data :/*donnees */{
                                    nom:nomrecu
                    },// On fait passer nos variables au script coucou.php
        
                    // 4) format de retour du fichier php dans "data"
                            dataType :'html',
        
                    // 5) fonction à effectuer en cas de succès
                    success:function(data){//  contient le HTML renvoyé
        
                    $('#block-connection').html(data);  
        
                    }// success
        
                    });// $.ajax function
        
        },
        onError : function(){
            alert('error');
        }
      });


      
      var villes =[];
      var url ="cities.json";
      $.getJSON( url, function(arrayvilles) {

        for (i=0;i<arrayvilles.length;i++){
                var obj ={};
                obj["value"] = arrayvilles[i].zip;
                obj["label"] = arrayvilles[i].name;

                villes.push(obj);
        }

        console.log(arrayvilles);

        $("#ville").autocomplete({
        minLength: 0,
        source: villes,
        select: function( event, ui ) {
                $( "#ville" ).val( ui.item.label );
                $( "#cp" ).val( ui.item.value );
               // $( "#contenu" ).html( ui.item.value );
        
                return false;
        }
        
        })
        .autocomplete( "instance" )._renderItem = function( ul, item ) {
        return $( "<li>" )
                .append( "<div>" + item.label + " - " + item.value + "</div>" )
                .appendTo( ul );
        };

   }); //JSON


    
});


