<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Document</title>
	<style>
		/* 

RESPONSTABLE 1.0 by jordyvanraaij
  Designed mobile first!

If you like this solution, you might also want to check out the 2.0 version:
  https://gist.github.com/jordyvanraaij/9068893

*/
.responstable {
  /*margin: 1em 0;*/
  width: 100%;
  background: #FFF;
  color: #024457;
  /*border-radius: 10px;*/
  /*border: 1px solid #167F92;*/
  overflow: hidden;
}
.responstable tr {
  border-top: 1px solid #167F92;
  border-bottom: 1px solid #167F92;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  /*border: 1px solid #FFF;*/
  background-color: #167F92;
  color: #FFF;
}
.responstable td {
  display: block;
}
.responstable td:first-child {
  padding-top: 0.5em;
}
.responstable td:last-child {
  padding-bottom: 0.5em;
}
.responstable td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 8em;
  display: inline-block;
}
@media (min-width: 480px) {
  .responstable td:before {
    display: none;
  }
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
  }
}
.responstable th, .responstable td {
  text-align: left;
  margin: 0.5em 1em;
}
	@media (min-width: 480px) {
	  .responstable th, .responstable td {
	    display: table-cell;
	    padding: 1em;
	  }
  .responstable th:first-child, .responstable td:first-child {
    text-align: center;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}
	</style>
</head>
<body>
	<table class="responstable">
		<tr>
		    <th>Main driver</th>
		    <th>First name</th>
		    <th>Surname</th>
		    
		 </tr>
		<tr>
			<td>Test</td>
			<td>Test</td>
			<td>Test</td>
		</tr>
		<tr>
			<td>Test</td>
			<td>Test</td>
			<td>Test</td>
		</tr>
		<tr>
			<td>Test</td>
			<td>Test</td>
			<td>Test</td>
		</tr>
	</table>
</body>
</html>