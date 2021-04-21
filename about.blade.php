@extends('subview/master')
@section('title', 'About')
@section('content')


<style>
p{
  font-weight: bold;
  font-family: monospace;
  font-size: 18px;
  border: solid;
  padding: 10px;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md12">
            <p>This is a web application for sharing E-books, It shows a list of Books that are currently available.
            The list showcases basic information on the books including the title, the author, ISBN, catergory, and number of pages.
            </p>
        </div>
    </div>
</div>





@endsection
