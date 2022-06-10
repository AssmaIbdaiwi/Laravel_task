<h2>Student Name: </h2>
<p>{{ $student->name }} </p>

<h3>Student Belongs to</h3>

<ul>
    @foreach($student->doctor as $doctor)
    <li>{{ $doctor->title }}</li>
    @endforeach
</ul>