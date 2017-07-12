<style type="text/css">
    h1{
        text-align: center;
    }
    p{
        text-align: center;
    }
    h3{
        text-align: center;
    }
    img{
        margin-left: 48%;
    }
    a{
        margin-left: 47%;
    }

</style>
<div class="container">
    @foreach ($students as $key => $student)
        <br/>
        <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>

        <h1>University of Nairobi</h1>
        <img src="/img/Uon_emblem.gif" alt="Smiley face" height="42" width="42" >

        <p>This is to certify that</p>
        <strong><h3>{{ $student->firstName }} {{ $student->lastName }}</h3></strong>
        <p>having satisfied the requirements for the award of the</p>
        <strong><h3>{{ $student->courseName }}</h3></strong>

        <p>was presented at a Congregation held at this University on 4/09/2016</p>
    @endforeach

</div>