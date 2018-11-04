<!DOCTYPE html>
<html>
<head>
	<title>Expediente médico</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
@include('forms.pdf.view.datepatient')

@include('forms.pdf.view.anampatient')

@include('forms.pdf.view.rconsult')
   
@include('forms.pdf.view.vital')
   
@include('forms.pdf.view.explo')

@include('forms.pdf.view.dignostic')

@include('forms.pdf.view.evo')
   
	
</div>
</body>
</html>