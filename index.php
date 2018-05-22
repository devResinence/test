<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf-8'>
	
	</head>
	<body>
		<h1 id='h'>test</h1>
		<form method ='post' action='' id='myForm'>
			<label for ='choise'>Food</label>
			<select name='choise' id='choise' onchange="check()">
				<option value='pain'>Pain</option>
				<option value='pizza'>pizza</option>
				<option value='salade'>salade</option>
				<option value='merguez'>merguez</option>
				<option value='burger'>burger</option>
			</select>
		
		</form>
		<?= 'simple test';?>

		<?php
			function hello($name=null){
				return 'hello'.$name;
			}
			hello('garry');


		?>
	</body>
		<script>
	
		/*
		let req = new XMLHttpRequest();
		req.onload = function(){
		  document.querySelector('h1').innerHTML=this.response
		}
		
		req.open('get','https://developer.mozilla.org/fr/docs/Web/API/XMLHttpRequest/Utiliser_XMLHttpRequest',true)
		
		req.send()
		
		new Promise((resolve, reject) =>{
			console.log('initial')
			
			resolve();
			
		})
		.then(()=>{
			throw new Error('Something failed')
			console.log('do this')
		
		})
		.catch(()=>{
			console.log('do that')
		}).then(()=>{
			console.log('do this whatever happened before')
		})
		*/
		
		// commander es une fonction qui prend un argument() qui retourne une promise 
		
			
		
	
		let food = ['burger','pizza']
		const commander = arg =>{
			return new Promise((resolve,reject)=>{
				food.includes(arg)?resolve('votre produit est disponible') : reject('Une erreur est survenue le produit est en rupture')	
			})
		}
		
		commander('pizza').then(
			resultat => document.querySelector('h1').innerHTML = resultat,
			error => document.querySelector('h1').innerHTML = error
		)
		
		const check =()=>{
			let c = document.getElementById('choise').value
			commander(c).then(
			resultat => document.querySelector('h1').innerHTML = resultat,
			error => document.querySelector('h1').innerHTML = error
		)
		}
		
		</script>
</html>