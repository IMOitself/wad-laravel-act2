<div style="justify-items: center; text-align: center; align-content: center; height: 100vh">
    <table>
        <thead>
            <tr>
                <th><h1>Students</h1></th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($array as $student)
            <tr>
                <td>{{$student}}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
</div>

