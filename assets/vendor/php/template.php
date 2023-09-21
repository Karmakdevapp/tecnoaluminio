<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>HTML email template</title>
   <style>
      <!-- The css code goes here -->
      @font-face {
            font-family: 'Open Sans Regular';
            font-style: normal;
            font-weight: 400;
            src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-regular.woff');
        }
        @font-face {
            font-family: 'Open Sans Bold';
            font-style: normal;
            font-weight: 800;
            src: url('chrome-extension://gkkdmjjodidppndkbkhhknakbeflbomf/fonts/open_sans/open-sans-v18-latin-800.woff');
        }
		
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			font-family: sans-serif;
			min-height: 100vh;
		}

		.page{
			width: 768px;
			margin:  0 auto;
			font-size: 16px;
			color: #555555;
		}

		h1{
			background-color: #f4f4f4;
			padding: 20px;
			margin-top: 20px;
		}

		h2{
			padding: 20px;
		}

		p{
			padding: 10px 20px;
			line-height: 26px;
		}	

		h3{
			padding: 20px;
		}

		table{
			padding: 20px;
			width:  100%;
		}

		table tr{}
		table th{
			text-align: left;
			padding: 10px;
			background-color: #e4e4e4;
		}
		table td{
			border: thin solid #d4d4d4;
			padding: 10px;
		}

		footer{
			padding: 20px;
		}

		footer a{
			text-decoration: none;
			color: #155197;
		}
	
   </style>
</head>
<body>
   <div class="page">
      <h1>Consulta desde la web <?php echo @$name ?> </h1>
 
      <!-- More content here -->
 
      <footer>
         <a href="https://google.com">Hyperlink</a> |
         <a href="https://digitalfox-tutoroals.com">Hyperlink</a> |
         <a href="">Hyperlink</a> |
         <a href="">Hyperlink</a>
      </footer>
   </div>
</body>
</html>