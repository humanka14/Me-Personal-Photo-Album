<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
background: linear-gradient( #ebbb8f,#cce6ff);
}

h1 {
background: linear-gradient( #6495ED,#eb8a8a);
	text-align: center;
}

.outer-grid {
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}

.inner-grid {
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}

.inner-grid img {
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}

@media screen and (max-width: 800px) {
	.inner-grid {
		flex: 50%;
		max-width: 50%;
		}
	}

@media screen and (max-width: 600px) {
	.inner-grid {
		flex: 100%;
		max-widt: 100%;
		}
	}

</style>
<body>
<h1> Responsive Image Grid Example </h1>
<div class = "outer-grid">
<div class = "inner-grid">
<a href = "hoami.html"> <img src="https://images.pexels.com/photos/6325051/
pexels-photo-6325051.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="400"/></a>
</div>
<div class = "inner-grid">
<a href = "hoami.html"> <img src="https://images.pexels.com/photos/6325188/
pexels-photo-6325188.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="400"/></a>
</div>
<div class = "inner-grid">
<a href = "hoami.html"> <img src="https://images.pexels.com/photos/6325135/
pexels-photo-6325135.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="400"/></a>
</div>
<div lass = "inner-grid">
<a href = "hoami.html"> <img src="https://images.pexels.com/photos/6325107/
pexels-photo-6325107.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" height="400" width="300" /></a>

</body>
</html>