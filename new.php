.gun {
  width: 50px;
  height: 30px;
  border: 1px solid black;
  position: relative;
}

.gun:before {
  content: '';
  width: 20px;
  height: 20px;
  background-color: gray;
  position: absolute;
  top: 5px;
  left: -15px;
adius: 50%;
}

.gun:after {
  content: '';
  width: 5px;
  height: 10px;
  background-color: black;

}
<!DOCTYPE html>

<html>

<head>

	<title>Mouseover Example</title>

	<script type="text/javascript">

		function onMouseOver() {

			document.getElementById("myImg").style.display = "block";

			document.getElementById("myPara").innerHTML = "";

		}

		function onMouseOut() {

			document.getElementById("myImg").style.display = "none";

			document.getElementById("myPara").innerHTML = "Hello, this is a paragraph.";

			alert("Outside the paragraph.");

		}

	</script>

</head>

<body>

	<p id="myPara" onmouseover="onMouseOver()" onmouseout="onMouseOut()">Hello, this is a paragraph.</p>

	<img id="myImg" src="https://via.placeholder.com/150" style="display:none">

</body>

</html>
