<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Anxiety and Depression Tracker')
    </title>

	<meta charset='utf-8'>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel='stylesheet'>
    <link href='/css/project4.css' type='text/css' rel='stylesheet'>

    @stack('head')

</head>
<body>
	<section>
		@yield('content')
	</section>

	<footer class='container'>
		&copy; {{ date('Y') }} Dylan Rumph
	</footer>

    @stack('body')

</body>
</html>
