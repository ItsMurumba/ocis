<style type="text/css">
    table td, table th{
        border:1px solid black;
    }
    th{
       text-space: 30px;
    }
</style>
<div class="container">

    <br/>
    <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>

    <table>
        <tr>
            <th>No</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Degree</th>
        </tr>
        @foreach ($students as $key => $student)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $student->firstName }}</td>
                <td>{{ $student->lastName }}</td>
                <td>{{ $student->courseName }}</td>
            </tr>
        @endforeach
    </table>
</div>