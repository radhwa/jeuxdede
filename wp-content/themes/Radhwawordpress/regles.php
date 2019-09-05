<?php
/*
    Template Name: regles
    Template Post Type: post, page, product
    */
get_header(); ?>

<div>
		<h1>Les régles du jeu</h1>
		<h3>Choisissez les dés:</h3>

		<div id="size">
                                            
                <button type="button" class="btn btn-primary">2</button>
                <input type="number" class="number1" id="input1">
                <button type="button" class="btn btn-primary">4</button>
                <input type="number" class="number1" id="input2">
                <button type="button" class="btn btn-primary">6</button>
                <input type="number" class="number1" id="input3">
                <button type="button" class="btn btn-primary">8</button>
                <input type="number" class="number1" id="input4">
                <button type="button" class="btn btn-primary">10</button>
                <input type="number" class="number1" id="input5">
                <button type="button" class="btn btn-primary">12</button>
                <input type="number" class="number1" id="input6">
                <button type="button" class="btn btn-primary">20</button>
                <input type="number" class="number1" id="input7">
                <button type="button" class="btn btn-primary">100</button>
                <input type="number" class="number1" id="input8">

        </div>
        <div>
        	<button type="button" class="btn btn-primary" id="partie" onclick="computescore()">Commencer</button>
        </div>
       
        <div class="form-group row  m-4">
   			 <label for="score" class="col-sm-1 col-form-label">Score</label>
   			 <div class="col-sm-4">
      		 	<input type="text" class="form-control" id="score" >
   			 </div>
  		</div>
  		<div class="form-group row m-4">
   			 <label for="ajout" class="col-sm-2 col-form-label">Nombre ajouté</label>
   			 <div class="col-sm-4">
      		 	<input type="number" class="form-control" id="ajout" >
   			 </div>
  		</div>

  		<div class="form-group row  m-4">
   			 <label for="final" class="col-sm-2 col-form-label">Score final</label>
   			 <div class="col-sm-4">
      		 	<input type="text" class="form-control" id="final" >
   			 </div>
  		</div>


</div>
<script>
		function computescore(){
    let valeur1 = $("#input1").val();
    let valeur2 = $("#input2").val();
    let valeur3 = $("#input3").val();
    let valeur4 = $("#input4").val();
    let valeur5 = $("#input5").val();
    let valeur6 = $("#input6").val();
    let valeur7 = $("#input7").val();
    let valeur8 = $("#input8").val();
    
     let scorearray= [];
      for (var i=0; i< valeur1; i++){
       scorearray.push(entierAleatoire(1,2));
      }

       for (var i=0; i< valeur2; i++){
         scorearray.push(entierAleatoire(1,4));
      }

       for (var i=0; i< valeur3; i++){
        scorearray.push(entierAleatoire(1,6));
      }

       for (var i=0; i< valeur4; i++){
       scorearray.push(entierAleatoire(1,8));
      }

       for (var i=0; i< valeur5; i++){
        scorearray.push(entierAleatoire(1,10));
      }
       for (var i=0; i< valeur6; i++){
         scorearray.push(entierAleatoire(1,12));
      }
       for (var i=0; i< valeur7; i++){
        scorearray.push(entierAleatoire(1,20));
      }
       for (var i=0; i< valeur8; i++){
        scorearray.push(entierAleatoire(1,100));
      }  
      console.log(scorearray);

      let scorepartiel = 0;
      for(var j = 0; j<scorearray.length;j++){
        scorepartiel += scorearray[j];
      }

      console.log(scorepartiel);
      $("#score").val(scorepartiel);
		}

         $("#partie").on("click", computescore())

			function entierAleatoire(min, max){
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}
				

</script>

 <?php
get_footer();?>